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
                        <th>
                            <a href="{{ route('programme.index', ['sort_by' => 'id', 'sort_order' => request()->sort_by == 'id' && request()->sort_order == 'asc' ? 'desc' : 'asc']) }}" class="btn-sort">
                                #
                            </a>
                        </th>
                        <th>
                            <a href="{{ route('programme.index', ['sort_by' => 'prog_name', 'sort_order' => request()->sort_by == 'prog_name' && request()->sort_order == 'asc' ? 'desc' : 'asc']) }}" class="btn-sort">
                                Program Name
                            </a>
                        </th>
                        <th>
                            <a href="{{ route('programme.index', ['sort_by' => 'prog_date', 'sort_order' => request()->sort_by == 'prog_date' && request()->sort_order == 'asc' ? 'desc' : 'asc']) }}" class="btn-sort">
                                Date
                            </a>
                        </th>
                        <th>
                            <a href="{{ route('programme.index', ['sort_by' => 'prog_time', 'sort_order' => request()->sort_by == 'prog_time' && request()->sort_order == 'asc' ? 'desc' : 'asc']) }}" class="btn-sort">
                                Time
                            </a>
                        </th>
                        <th>Place</th>
                        <th>Poster</th>
                        <th>Managed By</th>
                        <th>Pic Name</th>
                        <th>Pic Email</th>
                        <th>Pic Contact Number</th>
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
                                <a href="{{ asset('storage/' . $programme->prog_poster) }}" target="_blank" class="text-success">View Poster</a>
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
                            @if (auth()->user()->role == 1)
                            <a href="{{ route('programme.edit', $programme) }}" class="btn btn-warning btn-sm">Edit</a>
                            @endif
                            @if(Auth::user()->role == 0)
                                    @if ($programme->users->contains(Auth::id()))
                                    <!-- User has already joined -->
                                        <button class="btn btn-secondary" disabled>Joined</button>
                                    @else
                                        <a href="{{ route('programme.join', $programme) }}" class="btn btn-success btn-sm">Join</a>
                                    @endif
                            @elseif(Auth::user()->role == 1)
                                <a href="{{ route('programme.viewApplication', $programme) }}" class="btn btn-info btn-sm">View Application</a>
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

<!-- CSS for Enhanced Aesthetics and Responsiveness -->
<style>
    body {
        background-image: url('/image/bground.jpg'); /* Add your background image here */
        background-size: cover; /* Ensures the background image covers the whole screen */
        background-position: center; /* Centers the background image */
        background-repeat: no-repeat; /* Prevents the background image from repeating */
        font-family: 'Poppins', sans-serif;
        color: #333; /* Default text color for readability */
    }

    .container {
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9); /* Light overlay for readability */
        border-radius: 10px;
        margin-top: 40px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    h1 {
        font-weight: bold;
        color: #2e7d32;
    }

    .table {
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
    }

    th {
        background: linear-gradient(135deg, #4CAF50, #2e7d32);
        color: white;
        text-align: center;
        font-weight: bold;
    }

    td {
        text-align: center;
        padding: 12px;
        vertical-align: middle;
    }

    .btn-sort {
        color: white;
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 5px;
        background: linear-gradient(135deg, #66bb6a, #43a047);
        transition: all 0.3s ease;
    }

    .btn-sort:hover {
        background: linear-gradient(135deg, #43a047, #2e7d32);
        transform: translateY(-3px);
    }

    .btn-sm {
        font-size: 14px;
        margin: 2px 5px;
    }

    td a.btn {
        display: inline-block;
    }

    .alert {
        margin-bottom: 20px;
        padding: 15px;
        border-radius: 5px;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .table {
            font-size: 12px;
        }

        .btn-lg {
            font-size: 14px;
        }

        th, td {
            padding: 8px;
        }

        td .btn {
            font-size: 12px;
            margin: 4px 2px;
        }
    }
</style>

