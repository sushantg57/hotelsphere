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
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIPEhIQERIRFRUXGBISGBcVFhUSFRcSFRkYFxUVGBMYHSggGBolGxMWJj0hJikrMC4uFyAzODMsNy0uLisBCgoKDg0OGxAQGy0mICU1LS4vNysvLS03Ky8tLS0tLTI1Li0tLTc1MC0tLS0tLSstNy8tKy0tNS0tKy0vLS0tL//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABAUDBgcCAQj/xABIEAACAQIDBAUHCAYJBQEAAAABAgADEQQSIQUGMUETIlFhgQcVMlJxkZIjQoKTobHB0hQzQ2Ky0SRTcnODoqPT8BZjs8LDVP/EABkBAQEBAQEBAAAAAAAAAAAAAAABAgMEBf/EACMRAQACAgICAwADAQAAAAAAAAABAgMREiEEMRNBUXGRsdH/2gAMAwEAAhEDEQA/AO4xEQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEj4zG06K5qjqo7zx7gOJPskTePaoweHqV9CVGgPAseH8/CcZxm1MRi6tO+etXq/q6fzQDqNNBwuddAPZeenB405Y5TOoebP5EY+ojcupYje+nwpLfvbQfCPxIlNivKCKFzUfDtb5ihs3sJDED3Su2f5M8RXF8biygP7OhrYdhqNpf6J9s2TZnk52dQIboelYc6zGoPg9D/LOsz41OvblEeRbv02XZ2LFelSrAECoiVADxAYBgD36yRPgE+zwvdBERAREQEREBERAREQEREBERAREQEREBERAREXgImKpikX0nQe1gPvkZ9s4ZeNel8an7jA1HytVGajRoJ+0duz5qn8Cx8JReS7B9LtDEVypApU8i3FrF2yjj2Cm48ZZ73Y5auKo1RrRoo9UtY2z0xn59qdIJs+5WDNLDLm9I6Me0oAhPiVY/SM9UZ5rinHr2804Itli6/iInlekiIgIiICIiAiIgIiIHxmA1JtIz7Ror6VakPa6j8Zzjyv4tAy0nsSaYK31sczAkA8DoNe6cvS/K/hPoYPBjJSLTbT5+bzZpeaxXb9KLtbDkgCtSJJAADqbk8BoZlfG0l41EHtY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" alt="Easy Booking">
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
                    <img src="https://www.shutterstock.com/image-photo/rolled-white-towels-candle-flower-260nw-2643069499.jpg" alt="Relaxing Spa">
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

