<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Display the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login submission
    public function login(Request $request)
    {
        // Validate input data
        $request->validate([
            'matric_no' => 'required|string',
            'id_number' => 'required|string',
            'role' => 'required',
        ]);

        // Define credentials with correct database field names
        $credentials = [
            'SSM_MATRIK' => $request->matric_no,
            'SPR_NOKP' => $request->id_number
        ];

        // Debug: Check credentials before attempting login
        if (Auth::attempt($credentials)) {
            // If login is successful, retrieve the user
            $user = Auth::user();

            // Debug: Check the user's role and redirect based on it
            if ($user->role === $request->role) {
                if ($user->role === 'student') {
                    return redirect()->route('student.dashboard');
                } elseif ($user->role === 'admin') {
                    return redirect()->route('admin.dashboard');
                }
            } else {
                // Logout and show error if roles don't match
                Auth::logout();
                return redirect()->route('login')->withErrors(['role' => 'Invalid role selected.']);
            }
        } else {
            // Debugging output to confirm why Auth::attempt failed
            return back()->withErrors(['matric_no' => 'Invalid credentials or user does not exist.']);
        }
    }



}
