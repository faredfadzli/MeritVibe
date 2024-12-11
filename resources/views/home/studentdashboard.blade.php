<!-- resources/views/studentdashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #007bff;
        }
        form {
            display: inline-block;
            margin-top: 20px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .link-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .link-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Student Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <!-- Button to Show Program List -->
    <a href="{{ route('programme.index') }}" class="link-button">Show Program List</a>
</body>
</html>
