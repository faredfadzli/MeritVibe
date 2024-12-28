<form action="{{ route('programme.store') }}" method="POST" enctype="multipart/form-data" class="container mt-5">
    @csrf
    <h2 class="text-center text-primary mb-4">Create New Program</h2>

    <!-- Form Container -->
    <div class="form-container mx-auto">
        <!-- Program Name & Date Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="prog_name" class="form-label">Program Name:</label>
                <input type="text" name="prog_name" id="prog_name" class="form-control" placeholder="Enter Program Name" value="{{ old('prog_name') }}" required>
                @error('prog_name')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="prog_date" class="form-label">Program Date:</label>
                <input type="date" name="prog_date" id="prog_date" class="form-control" value="{{ old('prog_date') }}" required>
                @error('prog_date')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Program Time & Place Section -->
        <div class="row mb-4">
            <!-- Program Time -->
            <div class="col-md-6">
                <label for="prog_time" class="form-label">Program Time:</label>
                <input type="time" class="form-control" id="prog_time" name="prog_time" value="{{ old('prog_time') }}" required>
                @error('prog_time')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="prog_place" class="form-label">Program Place:</label>
                <input type="text" name="prog_place" id="prog_place" class="form-control" placeholder="Enter Program Place" value="{{ old('prog_place') }}" required>
                @error('prog_place')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Program Poster & Managed By Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="prog_poster" class="form-label">Program Poster:</label>
                <input type="file" name="prog_poster" id="prog_poster" class="form-control" accept="image/*">
                @error('prog_poster')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="prog_managed_by" class="form-label">Managed By:</label>
                <input type="text" name="prog_managed_by" id="prog_managed_by" class="form-control" placeholder="Enter Managed By" value="{{ old('prog_managed_by') }}" required>
                @error('prog_managed_by')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- PIC Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="prog_pic_name" class="form-label">PIC Name:</label>
                <input type="text" name="prog_pic_name" id="prog_pic_name" class="form-control" placeholder="Enter PIC Name" value="{{ old('prog_pic_name') }}" required>
                @error('prog_pic_name')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="prog_pic_email" class="form-label">PIC Email:</label>
                <input type="email" name="prog_pic_email" id="prog_pic_email" class="form-control" placeholder="Enter PIC Email" value="{{ old('prog_pic_email') }}">
                @error('prog_pic_email')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <label for="prog_pic_tel" class="form-label">PIC Telephone:</label>
                <input type="text" name="prog_pic_tel" id="prog_pic_tel" class="form-control" placeholder="Enter PIC Telephone" value="{{ old('prog_pic_tel') }}" required>
                @error('prog_pic_tel')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Button Container (Centered) -->
        <div class="d-flex justify-content-between mt-5">
            <!-- Create Program Button -->
            <button type="submit" class="btn btn-success btn-lg w-45 rounded-pill">Create Program</button>
            <!-- Back to Dashboard Button -->
            <a href="{{ route('dashboard') }}" class="btn btn-outline-success btn-lg w-45 rounded-pill">Back to Dashboard</a>
        </div>
    </div>
</form>

<!-- CSS for Improved Aesthetic Layout -->
<style>
    /* Body Background and Centered Form */
    body {
        background-image: url('/image/bground.jpg'); /* Set your background image */
        background-size: cover; /* Ensure the background image covers the screen */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Prevent the background from repeating */
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    /* Form Container */
    .form-container {
        background-color: rgba(255, 255, 255, 0.85);
        border-radius: 12px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 100%;
        max-width: 900px;
    }

    /* Form Labels */
    .form-label {
        font-size: 1rem;
        font-weight: 500;
        color: #2e7d32;
    }

    /* Form Controls */
    .form-control {
        border-radius: 8px;
        padding: 12px;
        font-size: 1rem;
        border: 1px solid #ddd;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 20px;
    }

    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
    }

    /* Button Styles */
    .btn-success {
        background-color: #28a745;
        color: white;
        font-size: 1.1rem;
        padding: 12px 24px;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .btn-outline-success {
        border: 2px solid #28a745;
        color: #28a745;
        font-size: 1.1rem;
        padding: 12px 24px;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .btn-outline-success:hover {
        background-color: #28a745;
        color: white;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .form-container {
            padding: 30px;
        }

        .form-label {
            font-size: 0.9rem;
        }

        .btn {
            font-size: 1rem;
        }

        .form-control {
            font-size: 0.9rem;
        }
    }
</style>