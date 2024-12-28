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
            color: white;
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

        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
            color: white;
            font-size: 1rem;
            padding: 5px 10px;
            border-radius: 20px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #388E3C;
            border-color: #388E3C;
        }

        p {
            color: white;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Participation List</h1>

        @if($students->count() > 0)
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>IC Number</th>
                        <th>Matric Number</th>
                        <th>Course</th>
                        <th>Points Awarded</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $participant)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $participant->spr_nama }}</td>
                            <td>{{ $participant->spr_nokp }}</td>
                            <td>{{ $participant->ssm_matrik }}</td>
                            <td>{{ $participant->ssm_kursus }}</td>
                            <td>{{ $participant->totalPoints }}</td>
                            <td>
                                <a href="{{ route('programme.participationList', $participant->id) }}" class="btn btn-primary btn-sm">View Participation Programmes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No participants found.</p>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
