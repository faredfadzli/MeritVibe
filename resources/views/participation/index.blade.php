<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participants for {{ $programme->prog_name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/image/bground.jpg'); /* Path to your background image */
            background-size: cover;
            background-position: center;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white background for readability */
            border-radius: 8px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #4CAF50;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .table {
            background-color: #ffffff;
            border-radius: 8px;
        }

        th, td {
            color: #333;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        .badge {
            font-size: 0.9rem;
            padding: 5px 10px;
            border-radius: 15px;
        }

        .badge.bg-success {
            background-color: #4CAF50;
        }

        .badge.bg-danger {
            background-color: #F44336;
        }

        .badge.bg-warning {
            background-color: #FFEB3B;
        }

        .btn-success {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }

        .btn-danger {
            background-color: #F44336;
            border-color: #F44336;
        }

        .btn-sm {
            font-size: 0.875rem;
            padding: 5px 10px;
        }

        .form-control {
            margin-bottom: 5px;
        }

        .btn-success:hover, .btn-danger:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        .btn-danger:hover {
            background-color: #e53935;
            border-color: #e53935;
        }

        .table .btn {
            margin: 3px;
        }

        .table td a {
            color: #4CAF50;
        }

        .table td a:hover {
            text-decoration: underline;
        }

        .btn-back {
            background-color: #4CAF50; /* Green background */
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        .comment-form {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
        }

        .comment-form input, .comment-form textarea {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Back to Dashboard Button -->
        <a href="{{ route('dashboard') }}" class="btn btn-back mb-3">Back to Dashboard</a>

        <h1>Participants for {{ $programme->prog_name }}</h1>

        @if($participants->count() > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Profile Pic</th>
                        <th>IC Number</th>
                        <th>Matric Number</th>
                        <th>Course</th>
                        <th>Proof Image</th>
                        <th>Approval Status</th>
                        <th>Participation Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($participants as $participant)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $participant->spr_nama }}</td>
                            <td>
                                @if($participant->profile->profile_pic)
                                    <a href="{{ asset('storage/' . $participant->profile->profile_pic) }}" target="_blank">View Profile Pic</a>
                                @else
                                    No Profile Pic
                                @endif
                            </td>
                            <td>{{ $participant->spr_nokp }}</td>
                            <td>{{ $participant->ssm_matrik }}</td>
                            <td>{{ $participant->ssm_kursus }}</td>
                            <td>
                                @if($participant->pivot->proof_image)
                                    <a href="{{ asset('storage/' . $participant->pivot->proof_image) }}" target="_blank">View Proof</a>
                                @else
                                    No Proof Image
                                @endif
                            </td>
                            <td>
                                @if ($participant->pivot->is_approve == 1)
                                    <span class="badge bg-success">Approved</span>
                                @elseif ($participant->pivot->is_approve == 2)
                                    <span class="badge bg-danger">Rejected</span>
                                @else
                                    <span class="badge bg-warning">Pending</span>
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($participant->pivot->created_at)->format('d M Y h:i A') }}</td>
                            <td>
                                @if (is_null($participant->pivot->is_approve))
                                    <form action="{{ route('programme.approveParticipant', $programme->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $participant->id }}">
                                        <input type="number" name="point_awarded" class="form-control mb-1" placeholder="Points" value="{{ $programme->prog_default_point }}" required>
                                        <input type="text" name="comment" class="form-control mb-1" placeholder="Comment" value="default">
                                        <button type="submit" name="action" value="1" class="btn btn-success btn-sm">Approve</button>
                                    </form>
                                    <form action="{{ route('programme.approveParticipant', $programme->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $participant->id }}">
                                        <button type="submit" name="action" value="0" class="btn btn-danger btn-sm">Reject</button>
                                    </form>

                                    <!-- Admin Comment Section -->
                                    <div class="comment-form">
                                    <form action="{{ route('programme.addComment', ['programme' => $programme->id, 'participant' => $participant->id]) }}" method="POST">
                                        @csrf
                                        <textarea name="admin_comment" class="form-control" placeholder="Add a comment" rows="3"></textarea>
                                        <button type="submit" class="btn btn-primary btn-sm">Add Comment</button>
                                    </form>

                                    </div>
                                @else
                                    <p>Point: {{ $participant->pivot->point_awarded }}</p>
                                    <p>Comment: {{ $participant->pivot->comment }}</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No participants have joined this programme yet.</p>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
