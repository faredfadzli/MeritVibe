<div class="container">
    <h1 class="text-center text-primary mb-4">Programs List</h1>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <!-- Programs Table -->
    @if($progs->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Program Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Place</th>
                        <th>Poster</th>
                        <th>Managed By</th>
                        <th>Pic Name</th>
                        <th>Pic Email</th>
                        <th>Pic Contact</th>
                        <th>Created By</th>
                        <th>Actions</th>
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
                                <img height="50%" width="50%" src="{{ asset('storage/' . $programme->prog_poster) }}" alt="Programme Poster" style="max-width: 100px; max-height: 100px;">
                            @else
                                <span>N/A</span>
                            @endif
                        </td>

                        <td>{{ $programme->prog_managed_by }}</td>
                        <td>{{ $programme->prog_pic_name }}</td>
                        <td>{{ $programme->prog_pic_email ?? 'N/A' }}</td>
                        <td>{{ $programme->prog_pic_tel }}</td>
                        <td>{{ $programme->createdBy }}</td>
                        <td>
                            @if (auth()->user()->role == 1)
                                <a href="{{ route('programme.edit', $programme) }}" class="btn btn-warning btn-sm">Edit</a>
                            @endif
                            @if(Auth::user()->role == 0)
                                @if ($programme->users->contains(Auth::id()))
                                    <button class="btn btn-secondary btn-sm" disabled>Joined</button>
                                @else
                                    <a href="{{ route('programme.join', $programme) }}" class="btn btn-success btn-sm">Join</a>
                                @endif
                            @elseif(Auth::user()->role == 1)
                                <a href="{{ route('programme.viewApplication', $programme) }}" class="btn btn-info btn-sm">View</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-center">No programs have been added yet.</p>
    @endif

    <div class="text-center mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-success btn-lg">
            <i class="bi bi-arrow-left me-2"></i> Back to Dashboard
        </a>
    </div>
</div>

<!-- CSS for Improved Aesthetics -->
<style>
    body {
        background-image: url('/image/bground.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        font-family: 'Poppins', sans-serif;
        color: #333;
    }

    .container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        overflow-x: auto; /* Ensure horizontal scrolling */
    }

    h1 {
        font-weight: bold;
        color: #2e7d32;
    }

    .table {
        width: 100%;
        min-width: 900px; /* Force table to scroll if too wide */
        background-color: white;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    th {
        background: linear-gradient(135deg, #4CAF50, #2e7d32);
        color: white;
        font-size: 14px;
        text-align: center;
        white-space: nowrap; /* Prevents wrapping */
    }

    td {
        text-align: center;
        font-size: 13px;
        padding: 10px;
    }

    .btn-sort {
        color: white;
        text-decoration: none;
        padding: 6px 12px;
        border-radius: 5px;
        font-size: 12px;
        background: linear-gradient(135deg, #66bb6a, #43a047);
        transition: 0.3s;
    }

    .btn-sort:hover {
        background: linear-gradient(135deg, #43a047, #2e7d32);
    }

    .btn-sm {
        font-size: 12px;
        margin: 2px;
    }

    @media (max-width: 768px) {
        th, td {
            font-size: 11px;
        }

        .btn-lg {
            font-size: 12px;
        }
    }
</style>
