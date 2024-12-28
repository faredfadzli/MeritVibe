<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="form-wrapper">
        <h1 class="text-center text-success mb-4">Edit Program</h1>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success text-center mb-4">
                {{ session('success') }}
            </div>
        @endif

        {{-- Edit Program Form --}}
        <form action="{{ route('programme.update', $programme) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-4">
                <div class="col-12">
                    <label for="prog_name" class="form-label fw-bold">Program Name</label>
                    <input type="text" name="prog_name" id="prog_name" value="{{ old('prog_name', $programme->prog_name) }}" class="form-control shadow-sm" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="prog_date" class="form-label fw-bold">Program Date</label>
                    <input type="date" name="prog_date" id="prog_date" value="{{ old('prog_date', $programme->prog_date) }}" class="form-control shadow-sm" required>
                </div>
                <div class="col-md-6">
                    <label for="prog_time" class="form-label fw-bold">Program Time</label>
                    <input type="time" name="prog_time" id="prog_time" value="{{ old('prog_time', $programme->prog_time) }}" class="form-control shadow-sm" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <label for="prog_place" class="form-label fw-bold">Program Place</label>
                    <input type="text" name="prog_place" id="prog_place" value="{{ old('prog_place', $programme->prog_place) }}" class="form-control shadow-sm" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <label for="prog_poster" class="form-label fw-bold">Program Poster</label>
                    <input type="file" name="prog_poster" id="prog_poster" class="form-control shadow-sm">
                    @if($programme->prog_poster)
                        <small class="text-success">Current Poster: <a href="{{ asset('storage/' . $programme->prog_poster) }}" target="_blank" class="text-decoration-none fw-bold text-primary">View</a></small>
                    @endif
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <label for="prog_managed_by" class="form-label fw-bold">Managed By</label>
                    <input type="text" name="prog_managed_by" id="prog_managed_by" value="{{ old('prog_managed_by', $programme->prog_managed_by) }}" class="form-control shadow-sm" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="prog_pic_name" class="form-label fw-bold">PIC Name</label>
                    <input type="text" name="prog_pic_name" id="prog_pic_name" value="{{ old('prog_pic_name', $programme->prog_pic_name) }}" class="form-control shadow-sm" required>
                </div>
                <div class="col-md-6">
                    <label for="prog_pic_email" class="form-label fw-bold">PIC Email</label>
                    <input type="email" name="prog_pic_email" id="prog_pic_email" value="{{ old('prog_pic_email', $programme->prog_pic_email) }}" class="form-control shadow-sm">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <label for="prog_pic_tel" class="form-label fw-bold">PIC Contact Number</label>
                    <input type="text" name="prog_pic_tel" id="prog_pic_tel" value="{{ old('prog_pic_tel', $programme->prog_pic_tel) }}" class="form-control shadow-sm" required>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-primary btn-lg shadow-sm">
                    <i class="bi bi-arrow-left me-2"></i> Back to Dashboard
                </a>
                <button type="submit" class="btn btn-success btn-lg shadow-sm">Update Program</button>
            </div>
        </form>
    </div>
</div>

<!-- CSS -->
<style>
    body {
        background-image: url('/image/bground.jpg');
        background-size: cover;
        background-position: center;
        font-family: 'Roboto', sans-serif;
        color: #333;
        margin: 0;
        height: 100vh;
    }

    .container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-wrapper {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        padding: 30px;
        width: 100%;
        max-width: 800px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    }

    h1 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .form-label {
        font-size: 1.1rem;
        margin-bottom: 8px;
    }

    .form-control {
        padding: 10px 15px;
        border-radius: 6px;
        border: 1px solid #ccc;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        border-color: #4CAF50;
        outline: none;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    .btn {
        border-radius: 6px;
        padding: 10px 20px;
        font-size: 1.1rem;
    }

    .btn-success:hover {
        background-color: #388E3C;
    }

    .btn-outline-primary:hover {
        background-color: #e3f2fd;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .row .col-md-6, .row .col-12 {
        flex: 1;
    }

    .alert {
        padding: 15px;
        font-size: 1rem;
    }

    .d-flex {
        margin-top: 20px;
    }
</style>
