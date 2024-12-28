<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participation List</title>
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
            background: rgba(0, 0, 0, 0.6); /* Dark overlay for readability */
            border-radius: 10px;
            padding: 30px;
            max-width: 1000px;
            margin: 50px auto;
        }

        h1 {
            color: #4CAF50; /* Green color for the heading */
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        table {
            background-color: #ffffff;
            border-radius: 8px;
            margin-top: 20px;
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

        p {
            color: white;
            font-size: 1.2rem;
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">{{$user->spr_nama}} Participation List</h1>

        <!-- Back to Dashboard Button -->
        <a href="{{ route('admindashboard') }}" class="btn btn-back mb-3">Back to Dashboard</a>

        @if($participations->count() > 0)
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Programme Name</th>
                        <th>Programme Date</th>
                        <th>Point Awarded</th>
                        <th>Comment</th>
                        <th>Approval Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($participations as $participation)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $participation->prog_name }}</td>
                            <td>{{ \Carbon\Carbon::parse($participation->prog_date)->format('d M Y') }}</td>
                            <td>{{ $participation->pivot->point_awarded ?? 'N/A' }}</td>
                            <td>{{ $participation->pivot->comment ?? 'No Comment' }}</td>
                            <td>
                                @if ($participation->pivot->is_approve)
                                    <span class="badge bg-success">Approved</span>
                                @elseif ($participation->pivot->is_approve == 0)
                                    <span class="badge bg-danger">Rejected</span>
                                @else
                                    <span class="badge bg-warning">Pending</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No participations found.</p>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
