<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        $user = User::firstOrCreate(
            ['email' => $socialUser->getEmail()],
            [
                'name' => $socialUser->getName() ?? $socialUser->getNickname(),
                'user_id' => 'USR' . strtoupper(Str::random(6)),
                'password' => bcrypt(Str::random(12)),
                'role' => 'user' // Default Role
            ]
        );

        Auth::login($user);

        // Redirect Based on Role
        switch ($user->role) {
            case 'super_admin':
                return redirect()->route('super_admin.dashboard');
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'franchise':
                return redirect()->route('franchise.dashboard');
            default:
                return redirect()->route('user.dashboard');
        }
    }
}
