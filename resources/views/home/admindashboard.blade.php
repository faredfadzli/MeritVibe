<!-- resources/views/admindashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #d4f1dc; /* Pastel green background */
            color: #333;
        }

        h1 {
            color: #2e7d32;
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
            background-color: #81c784; /* Lighter pastel green */
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

        /* Action Buttons Container */
        .action-buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Grid layout for responsiveness */
            gap: 20px;
            justify-items: center;
            margin-top: 30px;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #4caf50; /* Pastel green button */
            color: white;
            border-radius: 8px;
            font-size: 16px;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #388e3c;
            transform: translateY(-3px); /* Subtle floating effect */
        }

        .btn-logout {
            background-color: #e53935; /* Red logout button */
        }

        .btn-logout:hover {
            background-color: #c13522;
        }

        /* Logout Button */
        .logout-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #777;
            font-size: 14px;
        }

        .footer a {
            color: #4caf50;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Header Section -->
        <div class="header">
            <h1>Welcome, {{ Auth::user()->SPR_NAMA }}!</h1> <!-- User's name will be dynamically inserted here -->
            <p>Your Admin Dashboard</p>
        </div>

        <!-- Main Content Section -->
        <div class="content">
            <p>Manage your programs, view applications, and take actions below:</p>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <a href="{{ route('programme.create') }}" class="btn">Create Program</a>
                <a href="{{ route('programme.index') }}" class="btn">List of Programs</a>
            </div>

            <!-- Logout Button -->
            <div class="logout-button">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-logout">Logout</button>
                </form>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>&copy; {{ date('Y') }} All Rights Reserved. <a href="#">Privacy Policy</a></p>
        </div>
    </div>
</body>
</html>
