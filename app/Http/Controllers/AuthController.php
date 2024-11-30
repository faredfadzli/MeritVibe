<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Ensure this view exists
    }

    public function login(Request $request)
    {
        $credentials = $request->only('ssm_matrik', 'spr_nokp', 'role');
        $role = $request->role;
        $user = User::where($credentials)->firstOrFail();

        if ($user->role == '0') {
            auth()->login($user);
            return redirect()->route('dashboard');
        }
        if ($user->role == '1') {
            auth()->login($user);
            session()->regenerate();  // Regenerate session to ensure it persists
            return redirect()->route('dashboard');
        }


        return back()->withErrors(['login' => 'Invalid credentials.']);
    }


    public function logout(Request $request)
    {
        $role = $request->input('role', 'web');
        Auth::guard($role)->logout();
        return redirect()->route('login');
    }
}
