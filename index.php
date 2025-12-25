<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelSphere - Luxury Hotel Experience</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css for smooth animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
        }
        /* Navbar */
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
        }
        /* Hero Section */
        .hero {
            background: url('assets/images/hero-bg.jpg') center/cover no-repeat;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        .hero::after {
            content: "";
            position: absolute;
            top:0; left:0; right:0; bottom:0;
            background: rgba(0,0,0,0.5);
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero h1 {
            font-size: 4rem;
            font-weight: 700;
        }
        .hero p {
            font-size: 1.5rem;
            margin: 20px 0;
        }
        .btn-hero {
            padding: 15px 35px;
            font-size: 1.2rem;
            transition: transform 0.3s;
        }
        .btn-hero:hover {
            transform: scale(1.1);
        }
        /* Features Section */
        .features {
            padding: 100px 0;
            background: #f7f7f7;
        }
        .feature-card {
            padding: 30px;
            border-radius: 15px;
            background: white;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        /* Footer */
        footer {
            background: #222;
            color: #ccc;
            padding: 50px 0;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">HotelSphere</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="admin_login.php">Admin Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content animate__animated animate__fadeInDown">
        <h1>Welcome to HotelSphere</h1>
        <p>Your ultimate luxury hotel experience</p>
        <div class="mt-4">
            <a href="#features" class="btn btn-primary btn-hero me-2">Explore Now</a>
            <a href="admin_login.php" class="btn btn-outline-light btn-hero">Admin Login</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features" id="features">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="animate__animated animate__fadeInUp">Our Services</h2>
            <p class="animate__animated animate__fadeInUp animate__delay-1s">Everything to make your stay perfect</p>
        </div>
        <div class="row g-4">
            <div class="col-md-3 animate__animated animate__zoomIn animate__delay-1s">
                <div class="feature-card text-center">
                    <img src="assets/images/room.png" alt="Rooms" class="mb-3" width="80">
                    <h4>Luxury Rooms</h4>
                    <p>Comfortable rooms with modern amenities.</p>
                </div>
            </div>
            <div class="col-md-3 animate__animated animate__zoomIn animate__delay-2s">
                <div class="feature-card text-center">
                    <img src="assets/images/booking.png" alt="Booking" class="mb-3" width="80">
                    <h4>Easy Booking</h4>
                    <p>Seamless booking experience online.</p>
                </div>
            </div>
            <div class="col-md-3 animate__animated animate__zoomIn animate__delay-3s">
                <div class="feature-card text-center">
                    <img src="assets/images/food.png" alt="Food" class="mb-3" width="80">
                    <h4>Delicious Food</h4>
                    <p>Order from our diverse food menu anytime.</p>
                </div>
            </div>
            <div class="col-md-3 animate__animated animate__zoomIn animate__delay-4s">
                <div class="feature-card text-center">
                    <img src="assets/images/spa.png" alt="Spa" class="mb-3" width="80">
                    <h4>Relaxing Spa</h4>
                    <p>Pamper yourself with our spa and wellness services.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <p>© 2025 HotelSphere. All Rights Reserved.</p>
        <p>
            <a href="#">Facebook</a> | 
            <a href="#">Instagram</a> | 
            <a href="#">Twitter</a>
        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Smooth Scroll JS -->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e){
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>
</html>
