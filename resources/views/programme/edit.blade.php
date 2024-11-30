


<div class="container">
    <h1>Edit Program</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Edit Program Form --}}
    <form action="{{ route('programme.update', $programme) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="prog_name">Program Name</label>
            <input type="text" name="prog_name" id="prog_name" value="{{ old('prog_name', $programme->prog_name) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prog_date">Program Date</label>
            <input type="date" name="prog_date" id="prog_date" value="{{ old('prog_date', $programme->prog_date) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prog_time">Program Time</label>
            <input type="time" name="prog_time" id="prog_time" value="{{ old('prog_time', $programme->prog_time) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prog_place">Program Place</label>
            <input type="text" name="prog_place" id="prog_place" value="{{ old('prog_place', $programme->prog_place) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prog_poster">Program Poster</label>
            <input type="file" name="prog_poster" id="prog_poster" class="form-control">
            @if($programme->prog_poster)
                <p>Current Poster: <a href="{{ asset('storage/' . $programme->prog_poster) }}" target="_blank">View</a></p>
            @endif
        </div>

        <div class="form-group">
            <label for="prog_managed_by">Managed By</label>
            <input type="text" name="prog_managed_by" id="prog_managed_by" value="{{ old('prog_managed_by', $programme->prog_managed_by) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prog_pic_name">PIC Name</label>
            <input type="text" name="prog_pic_name" id="prog_pic_name" value="{{ old('prog_pic_name', $programme->prog_pic_name) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prog_pic_email">PIC Email</label>
            <input type="email" name="prog_pic_email" id="prog_pic_email" value="{{ old('prog_pic_email', $programme->prog_pic_email) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="prog_pic_tel">PIC Contact Number</label>
            <input type="text" name="prog_pic_tel" id="prog_pic_tel" value="{{ old('prog_pic_tel', $programme->prog_pic_tel) }}" class="form-control" required>
        </div>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary btn-lg mb-3 d-inline-flex align-items-center">
            <i class="bi bi-arrow-left me-2"></i> Back to Dashboard
        </a>

        <button type="submit" class="btn btn-primary">Update Program</button>
    </form>
</div>

