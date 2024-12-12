<!-- resources/views/studentdashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #e3f2fd; /* Light blue background */
            color: #333;
        }

        h1 {
            color: #1e88e5; /* Blue color for the header */
            font-size: 36px;
            font-weight: 700;
            margin: 0;
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 40px;
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        /* Header Section */
        .header {
            text-align: center;
            background-color: #2196f3; /* Slightly darker blue for header */
            padding: 20px;
            border-radius: 12px 12px 0 0;
        }

        .header h1 {
            font-size: 40px;
            color: white;
        }

        .header p {
            font-size: 18px;
            color: #f1f1f1;
        }

        /* Program Button */
        .programs-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .program-button {
            background-color: #1e88e5;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .program-button:hover {
            background-color: #1565c0;
            transform: translateY(-3px); /* Subtle lift effect */
        }

        /* Logout Button */
        .logout-button {
            text-align: center;
            margin-top: 40px;
        }

        .logout-button button {
            background-color: #e91e63; /* Pink color for logout */
            color: white;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .logout-button button:hover {
            background-color: #c2185b;
            transform: translateY(-3px); /* Subtle lift effect */
        }

        /* Success Alert */
        .alert {
            background-color: #81c784; /* Light green success alert */
            color: white;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 16px;
        }
        
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Header Section -->
        <div class="header">
            @if(Auth::check())
                <h1>Welcome, {{ Auth::user()->name }}!</h1>
            @else
                <h1>Welcome, Guest!</h1>
            @endif
            <p>Student Dashboard</p>
        </div>

        <!-- Success Alert -->
        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <!-- Program Button to Show Program List -->
        <div class="programs-container">
            <a href="{{ route('programme.index') }}" class="program-button">View Available Programs</a>
        </div>

        <!-- Logout Button -->
        <div class="logout-button">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
