<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\VerifyUserMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;

class AuthLoginController extends Controller
{
    public function loginPage()
    {
        return view('pages.auth.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ],[
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            if ($request->user()->type == 'admin') {
                return response()->json(['success' => 'Login Successful,  redirecting...', 'url' => route('admin.dashboard')]);
            } elseif ($request->user()->type == 'teacher') {
                return response()->json(['success' => 'Login Successful, redirecting...', 'url' => route('teacher.dashboard')]);
            } elseif ($request->user()->type == 'student') {
                return response()->json(['success' => 'Login Successful, redirecting...', 'url' => route('student.dashboard')]);
            } else {
                return response()->json(['success' => 'Login Successful, redirecting...', 'url' => route('user.dashboard')]);
            }
        } else {
            return response()->json(['error' => 'Given Credentials are Incorrct']);
        }
    }

    public function registerPost(Request $request)
    {
        $credentials = $request->validate([
            'fname' => ['required'],
            'lname' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'type' => ['required'],
        ],[
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'password.confirmed' => 'Confirm your Password',
            'type.required' => 'Role is required',
        ]
    );

        $user = User::create($credentials);
        Auth::login($user);

        event(new Registered($user));
        // $this->sendVerifyMail($user->email, $user->id);

        return response()->json(['message' => 'A link was sent to verify your email']);
    }

    public function sendVerifyMail($email, $id)
    {
        $data = [
            'new_code' => rand(1000, 9999),
            'new_mail' => $email,
            'expire_at' => now()->addMinutes(5)
        ];

        UserOtp::updateOrCreate([
            'user_id' => $id
        ], $data);

        Mail::to($email)->send(new VerifyUserMail($data));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
