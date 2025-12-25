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

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
body {
    font-family: 'Roboto', sans-serif;
    overflow-x: hidden;
}
.navbar-brand { font-weight: 700; font-size: 1.8rem; }
/* HERO */
.hero {
    background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), 
        url('https://images.unsplash.com/photo-1560347876-aeef00ee58a1?auto=format&fit=crop&w=1470&q=80') center/cover no-repeat;
    height: 90vh;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
}
.hero h1 { font-size: 4rem; font-weight: 700; text-shadow: 2px 2px 8px rgba(0,0,0,0.6); }
.hero p { font-size: 1.5rem; margin: 20px 0; text-shadow: 1px 1px 6px rgba(0,0,0,0.5); }
.btn-hero { padding: 15px 35px; font-size: 1.2rem; transition: 0.3s ease; }
.btn-hero:hover { transform: scale(1.08); }

/* FEATURES */
.features { padding: 100px 0; background: #f8f8f8; }
.feature-card { border-radius: 15px; background: white; transition: transform 0.3s, box-shadow 0.3s; overflow: hidden; }
.feature-card:hover { transform: translateY(-8px); box-shadow: 0 12px 22px rgba(0,0,0,0.15); }
.feature-card img { width: 100%; height: 200px; object-fit: cover; }

/* FOOTER */
footer { background: #222; color: #ccc; padding: 50px 0; }
footer a { color: #fff; text-decoration: none; transition: 0.2s; }
footer a:hover { text-decoration: underline; }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">HotelSphere</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link fw-bold" href="#features">Features</a></li>
            <li class="nav-item">
                <a class="nav-link btn btn-outline-light text-primary fw-bold px-3" 
                   href="https://hotelsphere-718e.onrender.com/auth/login.php" target="_blank">Admin Login</a>
            </li>
        </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="text-center animate__animated animate__fadeInDown">
        <h1>Welcome to HotelSphere</h1>
        <p>Experience luxury, comfort & unforgettable memories.</p>
        <a href="#features" class="btn btn-primary btn-hero me-2">Explore Now</a>
        <a href="https://hotelsphere-718e.onrender.com/auth/login.php" target="_blank" class="btn btn-outline-light btn-hero">Admin Login</a>
    </div>
</section>

<!-- FEATURES -->
<section class="features" id="features">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="animate__animated animate__fadeInUp">Our Services</h2>
            <p class="animate__animated animate__fadeInUp animate__delay-1s">
                Top-notch services to elevate your stay.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-3 animate__animated animate__zoomIn animate__delay-1s">
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1470&q=80" alt="Luxury Rooms">
                    <div class="p-3 text-center">
                        <h5>Luxury Rooms</h5>
                        <p>Elegant room designs with premium comfort.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 animate__animated animate__zoomIn animate__delay-2s">
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1600566751658-936a4640b1e7?auto=format&fit=crop&w=1470&q=80" alt="Easy Booking">
                    <div class="p-3 text-center">
                        <h5>Easy Booking</h5>
                        <p>Simple & fast reservation process online.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 animate__animated animate__zoomIn animate__delay-3s">
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=1470&q=80" alt="Delicious Food">
                    <div class="p-3 text-center">
                        <h5>Delicious Food</h5>
                        <p>Local & international cuisine made fresh.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 animate__animated animate__zoomIn animate__delay-4s">
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1556228724-4ec7b6b6bcd2?auto=format&fit=crop&w=1470&q=80" alt="Relaxing Spa">
                    <div class="p-3 text-center">
                        <h5>Relaxing Spa</h5>
                        <p>Pamper yourself with premium spa services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
