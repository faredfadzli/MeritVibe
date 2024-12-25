<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Storage;
use Auth;

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

    public function sort(Request $request){
    // Get the sort parameters from the request or set defaults
    $sortBy = $request->get('sort_by', 'prog_date'); // Default to sorting by date
    $sortOrder = $request->get('sort_order', 'asc'); // Default to ascending order

    // Fetch the programs, ordered by the chosen column and direction
    $progs = Programme::orderBy($sortBy, $sortOrder)->get();

    return view('programme.index', compact('progs', 'sortBy', 'sortOrder'));
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
        if (auth()->user()->role != 1) {
            return redirect()->route('programme.index')->with('error', 'You are not authorized to edit programmes.');
        }
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

    public function createParticipation (Programme $programme)
    {

        return view('participation.create', compact('programme'));
    }
    public function storeParticipation (Programme $programme, Request $request)
    {

        $user = Auth::user();

        if ($request->hasFile('proof_image')) {
            // Store the file in the public storage directory
            $filePath = $request->file('proof_image')->store('photos', 'public');
        }
        // Add a participation with additional fields
        $user->programmes()->attach($programme->id, [
        'proof_image' => $filePath,
        'is_approve' => null,
        ]);
        return redirect()->route('dashboard')->with('success', 'Form has been send successfully.');

    }

    public function viewApplication(Programme $programme)
    {

        $participants = $programme->users;
        return view('participation.index', compact('programme','participants'));
    }
    /**
     * return redirect to participation.index
     */

     public function approveParticipant(Programme $programme, Request $request)
    {
        // Find the specific participation entry for the user and programme
        $participant = $programme->users()
            ->where('user_id', $request->user_id)
            ->first();

        // Check if the participant exists
        if (!$participant) {
            return redirect()->back()->with('error', 'Participant not found.');
        }

        // Default message if no valid action is provided
        $message = 'No action performed. Invalid request.';

        // Handle the action based on the submitted value
        if ($request->action == '1') {
        $participant->pivot->is_approve = true;
        $participant->pivot->point_awarded = $request->point_awarded;
        $participant->pivot->comment = $request->comment;
        $message = 'Participant approved successfully.';
        } elseif ($request->action == '0') {
        $participant->pivot->is_approve = false;
        $participant->pivot->comment = 'Rejected: ' . ($request->comment ?? 'No additional comment');
        $participant->pivot->point_awarded = 0; // No points awarded for rejection
        $message = 'Participant rejected successfully.';
    }

        // Save the updated pivot record
        $participant->pivot->save();

        return redirect()->back()->with('success', $message);
}


    public function userIndex()
    {

        $students = User::where('role', '0')->get();
        return view('participation.userIndex', compact('students'));
        // Retrieve participants for the programme
        //  $participants = $programme->users()->withPivot('point_awarded', 'comment')->get();

        // Return the view with participants
        //return view('participationList', compact('participants', 'programme'));
    }
    public function participationList($user_id)
    {
        // Get the user by ID
        $user = User::findOrFail($user_id);

        // Fetch all the programmes the user has participated in, along with pivot data (point_awarded, comment, is_approve)
        $participations = $user->programmes()->withPivot('point_awarded', 'comment', 'is_approve')->get();
        // Return the view with the participation data
        return view('participation.participationList', compact('user', 'participations'));
    }
         public function destroy(Programme $programme)
    {
        //
    }

        /*public function rejectParticipant(Programme $programme, Request $request){
        $participant = $programme->users() // Find the specific participation entry for the user and programme
            ->where('user_id', $request->user_id)
            ->first();
        // Check if the participant exists
        if (!$participant) {
            return redirect()->back()->with('error', 'Participant not found.');
        }
        $participant->pivot->is_rejected = false;  // Update the rejection status for this specific user
        $participant->pivot->save(); // Optional: Reset approval if rejecting
        return redirect()->back()->with('success', 'Participant rejected successfully.');
    }*/
}
