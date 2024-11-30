<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Meritvibe</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* General Reset with Background Image */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('image/background.jpg') }}');
            background-size: cover;
            background-position: center;
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(44, 62, 80, 0.8); /* Semi-transparent background */
            padding: 15px 30px;
            width: 100%;
        }

        .navbar-logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo {
            height: 50px;
            width: auto;
        }

        nav a.nav-link {
            color: white;
            text-decoration: none;
            font-size: 16px;
            margin-left: 20px;
            transition: color 0.3s ease;
        }

        nav a.nav-link:hover {
            color: #F39C12;
        }

        /* Welcome Section Styles */
        .welcome-section {
            display: flex;
            flex: 1;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .welcome-content h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .welcome-content p {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .login-button {
            display: inline-block;
            background-color: #E67E22;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #D35400;
        }

        /* Modal Styles */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1001;
            width: 90%;
            max-width: 500px;
        }

        .modal p {
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <header class="navbar">
        <div class="navbar-logo">
            <img src="{{ asset('image/logo1.png') }}" alt="Logo 1" class="logo">
            <span>FC2C</span>
        </div>
        <nav>
            <a href="#" class="nav-link" id="aboutUsLink">ABOUT US</a>
        </nav>
        <div class="navbar-logo">
            <img src="{{ asset('image/logo2.jpg') }}" alt="Logo 2" class="logo">
        </div>
    </header>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="welcome-content">
            <h1>WELCOME TO MERITVIBE</h1>
            <p>"From Community To College"</p>
            <a href="{{ url('/login') }}" class="login-button">LOGIN</a>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal-overlay" id="modalOverlay"></div>
    <div class="modal" id="aboutUsModal">
        <p>
            This project tracks students' merit scores for college admission under an active quota system,
            helping colleges manage and recognize talented students.
        </p>
    </div>

    <script>
        // Modal Functionality
        const aboutUsLink = document.getElementById('aboutUsLink');
        const modalOverlay = document.getElementById('modalOverlay');
        const aboutUsModal = document.getElementById('aboutUsModal');

        aboutUsLink.addEventListener('click', (e) => {
            e.preventDefault();
            modalOverlay.style.display = 'block';
            aboutUsModal.style.display = 'block';
        });

        modalOverlay.addEventListener('click', () => {
            modalOverlay.style.display = 'none';
            aboutUsModal.style.display = 'none';
        });
    </script>
</body>
</html>
