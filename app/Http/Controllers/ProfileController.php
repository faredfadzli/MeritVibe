<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->is_profile_completed == true){
            return redirect()->route('dashboard');
        };
        return view (view: 'profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::user()->is_profile_completed == true){
            return redirect()->route('dashboard');
        };
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow specific image formats
            'room_number' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:profiles,email', // Ensure email is unique
        ]);

        // Store the uploaded picture
        $path = $request->file('picture')->store('profiles', 'public');

        // Save to the database
        $profile = new Profile();
        $profile->profile_pic = $path;
        $profile->room_number = $request->room_number;
        $profile->email = $request->email;
        $profile->user_id = Auth::user()->id;
        if($profile->save() == true){
            Auth::user()->is_profile_completed = true;
            Auth::user()->save();
        };


        return redirect()->route('dashboard');
    }


    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
