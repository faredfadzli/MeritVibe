<div class="container">
    <h1 class="text-center text-primary mb-4">Programs List</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Programs Table --}}
    @if($progs->count() > 0)
        <table class="table table-bordered table-striped">
            <thead class="bg-success text-white">
                <tr>
                    <th>
                        <a href="{{ route('programme.index', [
                            'sort_by' => 'id', 
                            'sort_order' => request()->sort_by == 'id' && request()->sort_order == 'asc' ? 'desc' : 'asc'
                        ]) }}">
                            #
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('programme.index', [
                            'sort_by' => 'prog_name', 
                            'sort_order' => request()->sort_by == 'prog_name' && request()->sort_order == 'asc' ? 'desc' : 'asc'
                        ]) }}">
                            Program Name
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('programme.index', [
                            'sort_by' => 'prog_date', 
                            'sort_order' => request()->sort_by == 'prog_date' && request()->sort_order == 'asc' ? 'desc' : 'asc'
                        ]) }}">
                            Date
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('programme.index', [
                            'sort_by' => 'prog_time', 
                            'sort_order' => request()->sort_by == 'prog_time' && request()->sort_order == 'asc' ? 'desc' : 'asc'
                        ]) }}">
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
                        <a href="{{ route('programme.edit', $programme) }}" class="btn btn-warning btn-sm">Edit</a>
                        @if(Auth::user()->role == 0)
                            <a href="{{ route('programme.join', $programme) }}" class="btn btn-success btn-sm">Join</a>
                        @elseif(Auth::user()->role == 1)
                            <a href="{{ route('programme.viewApplication', $programme) }}" class="btn btn-info btn-sm">View Application</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No programs have been added yet.</p>
    @endif

    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-success btn-lg">
            <i class="bi bi-arrow-left me-2"></i> Back to Dashboard
        </a>
    </div>
</div>

<!-- Add CSS for better responsiveness -->
<style>
    body {
        background-color: #e9f7e2;
        font-family: Arial, sans-serif;
    }
    .container {
        padding: 20px;
    }
    table {
        width: 100%;
        margin-bottom: 20px;
    }
    th, td {
        text-align: center;
        padding: 12px;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
    td {
        background-color: #ffffff;
    }
    .btn {
        font-size: 14px;
        padding: 8px 16px;
        margin: 2px;
    }
    .btn-sm {
        font-size: 12px;
    }
    .text-center {
        text-align: center;
    }
    .mb-4 {
        margin-bottom: 2rem;
    }
    @media (max-width: 768px) {
        table {
            font-size: 12px;
        }
        .btn-lg {
            font-size: 16px;
        }
    }
</style>
