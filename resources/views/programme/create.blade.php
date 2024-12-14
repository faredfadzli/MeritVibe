<form action="{{ route('programme.store') }}" method="POST" enctype="multipart/form-data" class="container mt-5">
    @csrf
    <h2 class="text-center text-primary mb-4">Create New Program</h2>

    <div class="form-container">
        <!-- Program Name -->
        <div class="mb-3">
            <label for="prog_name" class="form-label">Program Name:</label>
            <input type="text" name="prog_name" id="prog_name" class="form-control" placeholder="Enter Program Name" value="{{ old('prog_name') }}" required>
            @error('prog_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Date -->
        <div class="mb-3">
            <label for="prog_date" class="form-label">Program Date:</label>
            <input type="date" name="prog_date" id="prog_date" class="form-control" value="{{ old('prog_date') }}" required>
            @error('prog_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Time -->
        <div class="mb-3">
            <label for="prog_time" class="form-label">Program Time:</label>

            <div class="mb-3">
                <label for="prog_time" class="form-label">Programme Time</label>
                <input type="time" class="form-control" id="prog_time" name="prog_time" value="{{ old('prog_time') }}" required>
                <small class="form-text text-muted">Enter time in 24-hour format (HH:MM).</small>
            </div>

            <button type="button" id="toggle-time-format" class="btn btn-outline-success btn-sm mt-2">Switch to 24-hour format</button>

            @error('prog_time')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Place -->
        <div class="mb-3">
            <label for="prog_place" class="form-label">Program Place:</label>
            <input type="text" name="prog_place" id="prog_place" class="form-control" placeholder="Enter Program Place" value="{{ old('prog_place') }}" required>
            @error('prog_place')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Poster -->
        <div class="mb-3">
            <label for="prog_poster" class="form-label">Program Poster:</label>
            <input type="file" name="prog_poster" id="prog_poster" class="form-control" accept="image/*">
            @error('prog_poster')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Managed By -->
        <div class="mb-3">
            <label for="prog_managed_by" class="form-label">Managed By:</label>
            <input type="text" name="prog_managed_by" id="prog_managed_by" class="form-control" placeholder="Enter Managed By" value="{{ old('prog_managed_by') }}" required>
            @error('prog_managed_by')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program PIC Name -->
        <div class="mb-3">
            <label for="prog_pic_name" class="form-label">PIC Name:</label>
            <input type="text" name="prog_pic_name" id="prog_pic_name" class="form-control" placeholder="Enter PIC Name" value="{{ old('prog_pic_name') }}" required>
            @error('prog_pic_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program PIC Email -->
        <div class="mb-3">
            <label for="prog_pic_email" class="form-label">PIC Email:</label>
            <input type="email" name="prog_pic_email" id="prog_pic_email" class="form-control" placeholder="Enter PIC Email" value="{{ old('prog_pic_email') }}">
            @error('prog_pic_email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program PIC Telephone -->
        <div class="mb-3">
            <label for="prog_pic_tel" class="form-label">PIC Telephone:</label>
            <input type="text" name="prog_pic_tel" id="prog_pic_tel" class="form-control" placeholder="Enter PIC Telephone" value="{{ old('prog_pic_tel') }}" required>
            @error('prog_pic_tel')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-aesthetic btn-lg w-50 mb-4">Create Program</button>
        </div>

        <!-- Back to Dashboard Button -->
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('dashboard') }}" class="btn btn-outline-aesthetic btn-lg d-inline-flex align-items-center">
                <i class="bi bi-arrow-left me-2"></i> Back to Dashboard
            </a>
        </div>
    </div>
</form>

<!-- CSS for Centering, Font, and Button Styles -->
<style>
    body {
        background-color: #f4f7fc;
        font-family: 'Quicksand', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .form-container {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        width: 100%;
        max-width: 600px;
    }

    h2 {
        font-weight: bold;
        color: #3c8c3d;
        font-size: 1.8rem;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #ccc;
        padding: 12px;
        font-size: 1rem;
    }

    .form-control:focus {
        border-color: #66bb6a;
        box-shadow: 0 0 5px rgba(102, 187, 106, 0.7);
    }

    .form-label {
        font-weight: bold;
        color: #3c8c3d;
    }

    .btn-aesthetic {
        background-color: #66bb6a;
        border-color: #66bb6a;
        color: white;
        border-radius: 50px;
        font-size: 1.1rem;
        padding: 12px 30px;
        transition: all 0.3s ease;
    }

    .btn-aesthetic:hover {
        background-color: #43a047;
        border-color: #43a047;
        transform: translateY(-3px);
    }

    .btn-outline-aesthetic {
        background-color: transparent;
        border: 2px solid #66bb6a;
        color: #66bb6a;
        border-radius: 50px;
        font-size: 1.1rem;
        padding: 12px 30px;
        transition: all 0.3s ease;
    }

    .btn-outline-aesthetic:hover {
        background-color: #66bb6a;
        color: white;
        transform: translateY(-3px);
    }

    .text-danger {
        font-size: 0.875rem;
    }

    .mt-5 {
        margin-top: 5rem;
    }

    .mb-3 {
        margin-bottom: 1.5rem;
    }

    .mb-4 {
        margin-bottom: 2rem;
    }

    .d-flex {
        margin-top: 20px;
    }

    .bi-arrow-left {
        font-size: 1.5rem;
    }
</style>

<!-- JavaScript for Time Format Toggle -->
<script>
    document.getElementById('toggle-time-format').addEventListener('click', function() {
        const hours = document.getElementById('prog_hours').value;
        const minutes = document.getElementById('prog_minutes').value;
        const ampm = document.getElementById('prog_am_pm').value;
        const button = document.getElementById('toggle-time-format');

        // Check if it's in 12-hour format (AM/PM)
        if (ampm) {
            // Convert to 24-hour format (HHmmH)
            let hour24 = parseInt(hours, 10);
            if (ampm === 'PM' && hour24 !== 12) {
                hour24 += 12;
            } else if (ampm === 'AM' && hour24 === 12) {
                hour24 = 0;
            }

            // Update the hour input to 24-hour format
            document.getElementById('prog_hours').value = hour24.toString().padStart(2, '0');
            document.getElementById('prog_minutes').value = minutes;
            document.getElementById('prog_am_pm').style.display = 'none';
            button.textContent = 'Switch to 12-hour format';
        } else {
            // Convert to 12-hour format (AM/PM)
            let hour12 = parseInt(hours, 10);
            let ampm = hour12 >= 12 ? 'PM' : 'AM';
            if (hour12 > 12) hour12 -= 12;
            if (hour12 === 0) hour12 = 12;

            // Update the hour input back to 12-hour format
            document.getElementById('prog_hours').value = hour12.toString().padStart(2, '0');
            document.getElementById('prog_minutes').value = minutes;
            document.getElementById('prog_am_pm').style.display = 'inline-block';
            button.textContent = 'Switch to 24-hour format';
        }
    });
</script>
