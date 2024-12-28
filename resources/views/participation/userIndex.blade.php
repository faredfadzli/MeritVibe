<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participation List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
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
                            <td> <a href="{{ route('programme.participationList', $participant->id) }}" class="btn btn-primary btn-sm">View Particaption Programmes</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No participants found.</p>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
