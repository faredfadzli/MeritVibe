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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Program Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Place</th>
                    <th>Managed By</th>
                    <th>Pic name</th>
                    <th>Pic email</th>
                    <th>Pic contact number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($progs as $programme) <!-- go thru satu ii array  -->
                <tr>
                    <td>{{ $loop->iteration }}</td> <!-- Row Number -->
                    <td>{{ $programme->prog_name }}</td> <!-- Program Name -->
                    <td>{{ \Carbon\Carbon::parse($programme->prog_date)->format('d M Y') }}</td> <!-- Program Date -->
                    <td>{{ \Carbon\Carbon::parse($programme->prog_time)->format('h:i A') }}</td> <!-- Program Time -->
                    <td>{{ $programme->prog_place }}</td> <!-- Program Place -->
                    <td>
                        @if($programme->prog_poster)
                            <a href="{{ asset('storage/' . $programme->prog_poster) }}" target="_blank">View Poster</a>
                        @else
                            No Poster
                        @endif
                    </td> <!-- Program Poster -->
                    <td>{{ $programme->prog_managed_by }}</td> <!-- Managed By -->
                    <td>{{ $programme->prog_pic_name }}</td> <!-- PIC Name -->
                    <td>{{ $programme->prog_pic_email ?? 'N/A' }}</td> <!-- PIC Email -->
                    <td>{{ $programme->prog_pic_tel }}</td> <!-- PIC Telephone -->
                    <td>{{ $programme->createdBy }}</td> <!-- Creator ID -->
                    <td>
                        <a href="{{ route('programme.edit', $programme) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td> <!-- Action Buttons -->
                </tr>
                            {{-- Edit Button --}}
                            <a href="{{ route('programme.edit', $programme) }}" class="btn btn-warning btn-sm">Edit</a>
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

