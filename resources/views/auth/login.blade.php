<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* General Styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('image/background.jpg') }}'); /* Background image */
            background-size: cover;
            background-position: center;
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Overlay to darken background */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        /* Container for login form */
        .login-container {
            position: relative;
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent background */
            padding: 2rem;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-container h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #fff;
        }

        /* Form Styles */
        .login-container label {
            display: block;
            margin: 0.5rem 0 0.25rem;
            color: #ddd;
            font-size: 1rem;
        }

        .login-container input,
        .login-container select {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .login-container button {
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #45A049;
        }
    </style>
</head>
<body>
    <div class="overlay"></div> <!-- Dark overlay on background -->

    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <label for="role">Login As:</label>
            <select name="role" id="role" required>
                <option value="student">Student</option>
                <option value="admin">Admin</option>
            </select>

            <label for="matric_no">Matric Number:</label>
            <input type="text" name="matric_no" id="matric_no" required>

            <label for="id_number">IC Number:</label>
            <input type="text" name="id_number" id="id_number" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
