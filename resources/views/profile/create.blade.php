<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('./image/student.jpg') no-repeat center center fixed; /* Background image */
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #2E4F2F; /* Elegant green text */
        }
        .header {
            background: rgba(46, 79, 47, 0.9); /* Darker green for header with transparency */
            color: white;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header .profile span {
            font-size: 20px;
            font-weight: bold;
        }
        .container {
            max-width: 700px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.9); /* Soft white container with transparency */
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
        h2 {
            text-align: center;
            color: #2E4F2F;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-size: 16px;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #2E4F2F;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-group input[type="text"]:focus,
        .form-group input[type="email"]:focus,
        .form-group input[type="file"]:focus {
            outline: none;
            border-color: #2E4F2F;
            box-shadow: 0 0 5px rgba(46, 79, 47, 0.5);
        }
        .error {
            color: #d9534f;
            font-size: 12px;
            margin-top: 5px;
        }
        .submit-btn {
            background: #2E4F2F;
            color: white;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
            text-align: center;
        }
        .submit-btn:hover {
            background: #3c6640;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="profile">
            <span>STUDENT PROFILE</span>
        </div>
    </div>
    <div class="container">
        <h2>Welcome to Your Profile</h2>
        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="picture">Upload Picture:</label>
                <input type="file" name="picture" id="picture" accept="image/*">
                @error('picture')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="room_number">Room Number:</label>
                <input type="text" name="room_number" id="room_number" placeholder="Enter Room Number" value="{{ old('room_number') }}">
                @error('room_number')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter Email" value="{{ old('email') }}">
                @error('email')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
