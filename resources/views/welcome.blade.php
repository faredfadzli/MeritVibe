

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Meritvibe</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation Bar -->
    <header class="navbar">
        <div class="navbar-logo">
            <img src="{{ asset('image/logo1.png') }}" alt="Logo 1" class="logo">
            <span>FC2C</span>
        </div>
        <nav>
            <a href="#" class="nav-link">ABOUT US</a>
            <!-- Modal Structure -->
    <div class="modal-overlay" id="modalOverlay"></div>
    <div class="modal" id="aboutUsModal">
        <p>This project tracks students' merit scores for college admission under an active quota system, helping colleges manage and recognize talented students.</p>

    </div>
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
</body>
</html>
