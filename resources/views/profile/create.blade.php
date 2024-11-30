<html>
 <head>
  <title>
   Student/Admin Profile
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            background: url('https://placehold.co/1000x1000/cccccc/ffffff') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #4a5d23;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header img {
            height: 50px;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-pic {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }
        .profile-pic img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .profile-pic .camera-icon {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: black;
            color: white;
            border-radius: 50%;
            padding: 5px;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .profile-info {
            text-align: left;
        }
        .profile-info h2 {
            text-align: center;
            color: #4a5d23;
        }
        .profile-info .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .profile-info .info-item label {
            flex: 1;
            font-weight: bold;
        }
        .profile-info .info-item .value {
            flex: 2;
            background-color: #4a5d23;
            color: white;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .profile-info .info-item .value input {
            background: none;
            border: none;
            color: white;
            width: 100%;
        }
        .profile-info .info-item .value i {
            margin-left: 10px;
        }
        .action-buttons {
            text-align: center;
            margin-top: 20px;
        }
        .action-buttons button {
            background-color: #4a5d23;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 10px;
        }
        .action-buttons .cancel-button {
            background-color: #d9534f;
        }
  </style>
  <script>
   function redirectToLogin() {
            window.location.href = 'login.html';
        }

        function changeProfilePicture(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profile-picture').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }
  </script>
 </head>
 <body>
  <div class="header">
   <div class="logo">
    <img alt="University Logo" height="50" src="https://storage.googleapis.com/a1aa/image/H1nOQmr9jI5EDB9meM7aUoWgpe2bPi6fix200qOLzAB5dTmnA.jpg" width="50"/>
   </div>
   <div class="profile">
    <span>
     STUDENT/ADMIN PROFILE
    </span>
    <img alt="Profile Icon" height="50" src="https://storage.googleapis.com/a1aa/image/KrWrz6XxVc7AJ1Bvdnl6O6AgxfMdT4dfMZeC54sTODxf7mMPB.jpg" width="50"/>
   </div>
  </div>

  <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Picture Upload -->
    <div>
        <label for="picture">Upload Picture:</label>
        <input type="file" name="picture" id="picture" accept="image/*">
        @error('picture')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Room Number -->
    <div>
        <label for="room_number">Room Number:</label>
        <input type="text" name="room_number" id="room_number" placeholder="Enter Room Number" value="{{ old('room_number') }}">
        @error('room_number')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Email -->
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter Email" value="{{ old('email') }}">
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit">Submit</button>
</form>


 </body>
</html>
