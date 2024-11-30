<!-- resources/views/admindashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        .btn-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Admin Dashboard, {{ Auth::user()->SPR_NAMA }}</h1>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <!-- Create Program Button -->
    <a href="{{ route('programme.create') }}" class="btn-link">
        Create Program
    </a>

    <!-- List of Program Button -->
    <a href="{{ route('programme.index') }}" class="btn-link">
        List of Program
    </a>
</body>
</html>



 <!-- tambah button untuk ke index -->
  <!-- each of the view programme needs to have back to dashboard -->
