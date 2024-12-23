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
        <h1 class="mb-4">{{$user->spr_nama}} Participation List</h1>

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
