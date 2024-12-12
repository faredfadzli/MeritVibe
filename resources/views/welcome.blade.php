<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to MeritVibe</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        /* General Reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            overflow: hidden; /* Prevent scrolling */
        }

        /* Background Video */
        .background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        /* Overlay for video */
        .video-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Dark transparent overlay */
            z-index: 0;
        }

        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(34, 49, 63, 0.8); /* Semi-transparent dark slate */
            padding: 15px 30px;
            width: 100%;
            position: absolute;
            top: 0;
            z-index: 2;
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
            font-weight: 400;
        }

        nav a.nav-link:hover {
            color: #FFD700; /* Gold hover */
        }

        /* Welcome Section Styles */
        .welcome-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            color: white;
            z-index: 1;
            position: relative;
        }

        .welcome-content h1 {
            font-size: 3.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            font-weight: 700;
        }

        .welcome-content p {
            font-size: 1.8em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            font-weight: 300;
        }

        .login-button {
            display: inline-block;
            background-color: #228B22; /* Forest Green */
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #32CD32; /* Lime Green */
        }

        /* About Us Button Styles */
        .about-us-button {
            display: inline-block;
            background-color: #555; /* Dark gray */
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            margin-top: 10px;
            opacity: 0.7; /* Make the button less visible */
            transition: background-color 0.3s ease, opacity 0.3s ease;
        }

        .about-us-button:hover {
            background-color: #888; /* Slightly lighter gray */
            opacity: 1; /* Increase visibility on hover */
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
            font-family: 'Poppins', Arial, sans-serif;
        }

        .modal p {
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="background-video">
        <source src="{{ asset('videos/welcome_vid.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay for Video -->
    <div class="video-overlay"></div>

    <!-- Navigation Bar -->
    <header class="navbar">
        <div class="navbar-logo">
            <img src="{{ asset('image/logo1.png') }}" alt="Logo 1" class="logo">
            <span>FC2C</span>
        </div>
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
            <!-- About Us Button below the login button -->
            <a href="#" class="about-us-button" id="aboutUsLink">ABOUT US</a>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal-overlay" id="modalOverlay"></div>
    <div class="modal" id="aboutUsModal">
        <p>
            Kolej Tun Dr. Ismail (KTDI) is the fifth student residential college at Universiti Teknologi Malaysia, Skudai campus.<br><br>
            Initially named Kolej 5, it was later renamed Kampung Pelajar Resak, in line with the university’s policy of naming student villages after local trees and timber species.<br><br>
            The location is adjacent to the PALAPES Army and Navy headquarters and the road leading to the Observatory Tower.<br><br>
            It is now permanently known as KTDI after merging with a new college, Kolej 11, in 2012, which is situated near the original KTDI.
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
