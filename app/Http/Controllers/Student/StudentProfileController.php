<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Mail\EmailUpdateMail;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\UserOtp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\RateLimiter;

class StudentProfileController extends Controller
{
    public function profilePage()
    {
        return view('pages.student.profile');
    }

    public function profilePostDetail(Request $request)
    {
        $inputs = $request->validate([
            'fname' => ['required'],
            'lname' => ['required'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($request->user()->id)],
            'old_code' => ['nullable', Rule::requiredIf(fn () => $request->special == 'checked')],
            'new_code' => ['nullable', Rule::requiredIf(fn () => $request->special == 'checked')]
        ]);

        $user = $request->user();

        if ($request->email !== $user->email) {
            if (!is_null($request->old_code) || !is_null($request->new_code)) {

                $mailOtp = $request->user()->mailOtp;

                if (now() > $mailOtp->expire_at) {
                    return response()->json(['error' => 'Code expired, send again']);
                } else {
                    if (($request->old_code == $mailOtp->old_code) && ($request->new_code == $mailOtp->new_code)) {
                        $user->update($inputs);
                        $mailOtp->delete();
                        return response()->json(['message' => 'Updated Successfully', 'button' => 'hide']);
                    } else {
                        return response()->json(['error' => 'Code doesnot match']);
                    }
                }
            } else {
                $this->sendMailCode($user->id, $request->user()->email, $request->email);

                return response()->json(['notice' => 'We have sent codes to your old email as well as new email. Use those codes to update your email.']);
            }
        } else {
            $user->update($inputs);
            return response()->json(['message' => 'Successfully Updated']);
        }
    }

    public function resendUpdate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $userid = $request->user()->id;

        if (RateLimiter::tooManyAttempts('updatemail-resend:' . $userid, 3)) {
            $available = RateLimiter::availableIn('updatemail-resend:' . $userid);
            return response()->json(['notice' => 'Too many mail sent, try again after ' . $available . ' seconds']);
        }

        RateLimiter::hit('updatemail-resend:' . $userid);

        $this->sendMailCode($userid, $request->user()->email, $request->email);

        $remaining = RateLimiter::remaining('updatemail-resend:' . $userid, 3);
        return response()->json(['notice' => 'We have sent codes to your old email as well as new email. Use those codes to update your email.', 'remaining' => $remaining]);
    }

    public function sendMailCode($user_id, $old_mail, $new_mail)
    {
        $old_code = rand(1000, 9999);
        $new_code = rand(1000, 9999);

        Mail::to($old_mail)->send(new EmailUpdateMail($old_code));
        Mail::to($new_mail)->send(new EmailUpdateMail($new_code));

        UserOtp::updateOrCreate([
            'user_id' => $user_id
        ], [
            'old_mail' => $old_mail,
            'new_mail' => $new_mail,
            'old_code' => $old_code,
            'new_code' => $new_code,
            'expire_at' => Carbon::now()->addMinutes(1),
        ]);
    }

    public function profilePostPassword(Request $request)
    {
        $request->validate([
            'oldpass' => ['required'],
            'password' => ['nullable', Password::defaults(), Rule::requiredIf($request->filled('oldpass')), 'confirmed']
        ], [
            'oldpass.required' => 'Old password is required'
        ]);

        $user = $request->user();

        if (Hash::check($request->oldpass, $user->password)) {
            $user->update([
                'password' => $request->password
            ]);

            return response()->json(['message' => 'Successfully Updated']);
        } else {
            return response()->json(['error' => 'Old Password doesnot match']);
        }
    }

    public function profileRemoveAvatar(Request $request)
    {
        $user = $request->user();

        if (!is_null($user->avatar)) {
            unlink(storage_path('app/public/' . $user->avatar));
            $user->update([
                'avatar' => null
            ]);
            return response()->json(['message' => 'Successfully Removed ✔']);
        } else {
            return response()->json(['error' => 'This is Default Avatar 😂']);
        }
    }

    public function profileUpdateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => ['required', 'image']
        ], [
            'avatar.required' => 'Choose an image first'
        ]);

        $path = $request->file('avatar')->store('user/avatar', 'public');
        $user = $request->user();
        if ($user->avatar) {
            unlink(storage_path('app/public/' . $user->avatar));
        }
        $user->update([
            'avatar' => $path
        ]);

        return response()->json(['message' => 'Successfully Updated ✔']);
    }
}
