<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthSocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('google_id', $user->id)->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect()->route('dashboard');
            } else {
                $name = explode(' ', $user->name, 2);
                $fname = $name[0];
                $lname = !empty($name[1]) ? $name[1] : '';

                $addUser = User::create([
                    'fname' => $fname,
                    'lname' => $lname,
                    'email' => $user->email,
                    'password' => encrypt('userpassword'),
                    'provider' => 'Google',
                    'google_id' => $user->id,
                    'email_verified_at' => now(),
                    'avatar' => $user->avatar,
                ]);

                Auth::login($addUser);
                return redirect()->route('user.dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
