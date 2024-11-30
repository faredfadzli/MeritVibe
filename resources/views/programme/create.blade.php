<form action="{{ route('programme.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Program Name -->
    <div>
        <label for="prog_name">Program Name:</label>
        <input type="text" name="prog_name" id="prog_name" placeholder="Enter Program Name" value="{{ old('prog_name') }}" required>
        @error('prog_name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Program Date -->
    <div>
        <label for="prog_date">Program Date:</label>
        <input type="date" name="prog_date" id="prog_date" value="{{ old('prog_date') }}" required>
        @error('prog_date')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Program Time -->
    <div>
        <label for="prog_time">Program Time:</label>
        <input type="time" name="prog_time" id="prog_time" value="{{ old('prog_time') }}" required>
        @error('prog_time')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Program Place -->
    <div>
        <label for="prog_place">Program Place:</label>
        <input type="text" name="prog_place" id="prog_place" placeholder="Enter Program Place" value="{{ old('prog_place') }}" required>
        @error('prog_place')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Program Poster -->
    <div>
        <label for="prog_poster">Program Poster:</label>
        <input type="file" name="prog_poster" id="prog_poster" accept="image/*">
        @error('prog_poster')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Program Managed By -->
    <div>
        <label for="prog_managed_by">Managed By:</label>
        <input type="text" name="prog_managed_by" id="prog_managed_by" placeholder="Enter Managed By" value="{{ old('prog_managed_by') }}" required>
        @error('prog_managed_by')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Program PIC Name -->
    <div>
        <label for="prog_pic_name">PIC Name:</label>
        <input type="text" name="prog_pic_name" id="prog_pic_name" placeholder="Enter PIC Name" value="{{ old('prog_pic_name') }}" required>
        @error('prog_pic_name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Program PIC Email -->
    <div>
        <label for="prog_pic_email">PIC Email:</label>
        <input type="email" name="prog_pic_email" id="prog_pic_email" placeholder="Enter PIC Email" value="{{ old('prog_pic_email') }}">
        @error('prog_pic_email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Program PIC Telephone -->
    <div>
        <label for="prog_pic_tel">PIC Telephone:</label>
        <input type="text" name="prog_pic_tel" id="prog_pic_tel" placeholder="Enter PIC Telephone" value="{{ old('prog_pic_tel') }}" required>
        @error('prog_pic_tel')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
 <!-- Submit Button -->
    <button type="submit">Create Program</button>

<div class="d-flex justify-content-end mt-3">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary btn-lg d-inline-flex align-items-center custom-btn">
            <i class="bi bi-arrow-left me-2"></i> Back to Dashboard
        </a>
    </div>

</form>
