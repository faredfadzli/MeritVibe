<div class="container">
    <h1>Programs List</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Programs Table --}}
    @if($progs->count() > 0)
        <table class="table table-bordered" border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Program Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Place</th>
                    <th>Poster</th>
                    <th>Managed By</th>
                    <th>Pic name</th>
                    <th>Pic email</th>
                    <th>Pic contact number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($progs as $programme)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $programme->prog_name }}</td>
                    <td>{{ \Carbon\Carbon::parse($programme->prog_date)->format('d M Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($programme->prog_time)->format('h:i A') }}</td>
                    <td>{{ $programme->prog_place }}</td>
                    <td>
                        @if($programme->prog_poster)
                            <a href="{{ asset('storage/' . $programme->prog_poster) }}" target="_blank">View Poster</a>
                        @else
                            No Poster
                        @endif
                    </td>
                    <td>{{ $programme->prog_managed_by }}</td>
                    <td>{{ $programme->prog_pic_name }}</td>
                    <td>{{ $programme->prog_pic_email ?? 'N/A' }}</td>
                    <td>{{ $programme->prog_pic_tel }}</td>
                    <td>{{ $programme->createdBy }}</td>
                    <td>
                        <a href="{{ route('programme.edit', $programme) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        @if(Auth::user()->role == 0)
                            <a href="{{ route('programme.join', $programme) }}" class="btn btn-warning btn-sm">Join</a>
                        @elseif(Auth::user()->role == 1)
                            <a href="{{ route('programme.viewApplication', $programme) }}" class="btn btn-info btn-sm">View Application Form</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <p>No programs have been added yet.</p>
    @endif
</div>

<div class="d-flex justify-content-end mt-3">
    <a href="{{ route('dashboard') }}" class="btn btn-outline-primary btn-lg d-inline-flex align-items-center custom-btn">
        <i class="bi bi-arrow-left me-2"></i> Back to Dashboard
    </a>
</div>

