<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Http\Request;
use Storage;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $progs = Programme::all();
        return view('programme.index', compact('progs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('programme.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'prog_name' => 'required|string|max:255',
            'prog_date' => 'required|date', // Ensures a valid date format
            'prog_time' => 'required|date_format:H:i', // Validates time in HH:MM format
            'prog_place' => 'required|string|max:255',
            'prog_poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validates optional image upload
            'prog_managed_by' => 'required|string|max:255',
            'prog_pic_name' => 'required|string|max:255',
            'prog_pic_email' => 'nullable|email|max:255', // Optional but must be valid email
            'prog_pic_tel' => 'required|string',//  Validates phone number
        ]);

        // If validation passes, you can proceed with storing the data
        $program = new Programme();
        $program->prog_name = $validatedData['prog_name'];
        $program->prog_date = $validatedData['prog_date'];
        $program->prog_time = $validatedData['prog_time'];
        $program->prog_place = $validatedData['prog_place'];
        $program->prog_poster = $request->hasFile('prog_poster')
            ? $request->file('prog_poster')->store('posters', 'public')
            : null;
        $program->prog_managed_by = $validatedData['prog_managed_by'];
        $program->prog_pic_name = $validatedData['prog_pic_name'];
        $program->prog_pic_email = $validatedData['prog_pic_email'];
        $program->prog_pic_tel = $validatedData['prog_pic_tel'];
        $program->createdBy = auth()->id(); // Sets the authenticated user as the creator
        $program->save();

        return redirect()->route('programme.index')->with('success', 'Program created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Programme $programme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programme $programme)
    {
        return view('programme.edit', compact('programme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Programme $programme)
{
    // Validate the request data
    $validatedData = $request->validate([
        'prog_name' => 'required|string|max:255',
        'prog_date' => 'required|date',
        'prog_time' => 'required|date_format:H:i',
        'prog_place' => 'required|string|max:255',
        'prog_poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'prog_managed_by' => 'required|string|max:255',
        'prog_pic_name' => 'required|string|max:255',
        'prog_pic_email' => 'nullable|email|max:255',
        'prog_pic_tel' => 'required|string|regex:/^[0-9]{10,15}$/',
    ]);

    // Update the program details
    $programme->update([
        'prog_name' => $validatedData['prog_name'],
        'prog_date' => $validatedData['prog_date'],
        'prog_time' => $validatedData['prog_time'],
        'prog_place' => $validatedData['prog_place'],
        'prog_managed_by' => $validatedData['prog_managed_by'],
        'prog_pic_name' => $validatedData['prog_pic_name'],
        'prog_pic_email' => $validatedData['prog_pic_email'],
        'prog_pic_tel' => $validatedData['prog_pic_tel'],
    ]);

    // Handle file upload for the poster if provided
    if ($request->hasFile('prog_poster')) {
        // Delete the old poster if it exists
        if ($programme->prog_poster && Storage::exists('public/' . $programme->prog_poster)) {
            Storage::delete('public/' . $programme->prog_poster);
        }

        // Store the new poster
        $programme->prog_poster = $request->file('prog_poster')->store('posters', 'public');
        $programme->save();
    }

    // Redirect back to the program list with a success message
    return redirect()->route('programme.index')->with('success', 'Program updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programme $programme)
    {
        //
    }
}