<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class LoginController extends Controller
{

    public function username()
    {
        return 'user_id';
    }

    // =============login ==========
    public function login(Request $request)
    {
         $user = User::where('user_id', $request->user_id)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        Auth::login($user, $request->has('remember'));

        // Role-Based Redirect
        switch ($user->role->name) {
            case 'super_admin':
                return redirect()->route('super_admin.dashboard');
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'franchise':
                return redirect()->route('franchise.dashboard');
            case 'user':
                return redirect()->route('user.dashboard');
            default:
                Auth::logout();
                return redirect()->route('signin')->with('error', 'Unauthorized role.');
        }
    }

return back()->with('error', 'Invalid Credentials');


        return back()->with('error', 'Invalid Credentials');
    }
// ==============logout ============

    public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('signin')->with('success', 'Logged out successfully!');
        }

    // ===========registration============

    public function registerUser(Request $request) {
        return $this->register($request, 'user');
    }

    private function register(Request $request, $role) {
         $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'sponsor_id' => 'required|string',
        'position' => 'required|in:left,right',
        'terms' => 'accepted',
    ]);
    // Generate Random UserID (6-digit number)
        do {
            $userId = 'USR' . mt_rand(100000, 999999);
        } while (User::where('user_id', $userId)->exists());

        // Generate Random Password (8 characters)
        $randomPassword = Str::random(8);

        // Create User
        $user = User::create([
            'user_id' => $userId,
            'name' => $request->name,
            'email' => $request->email,
            'sponsor_id' => $request->sponsor_id,
            'position' => $request->position,
            'password' => Hash::make($randomPassword),  // Hashed Password
            'plain_password' => $randomPassword ,        // Plain Password (store securely)
            'role_id' => 0 ,        // Plain Password (store securely)
        ]);

            return redirect()->back()->with([
                'success_user_id' => $userId,
                'success_password' => $randomPassword
            ]);
    }

    public function validateSponsor(Request $request)
    {
        $sponsor = User::where('user_id', $request->sponsor_id)->first();

        if($sponsor) {
            return response()->json(['valid' => true]);
        } else {
            return response()->json(['valid' => false]);
        }
    }






}

