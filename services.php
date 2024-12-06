<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediLink Services - Our Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background: #007aff;
    color: white;
    padding: 10px 0;
}

nav a {
    color: white;
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease;
}

nav a:hover {
            color: #ffdd57;
        }
        .navbar .nav-item:hover .dropdown-menu {
            display: block;
            transition: opacity 0.3s;
        }
        .dropdown-menu {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            backdrop-filter: blur(5px);
        }
        .dropdown-item {
            color: #333;
        }
        .dropdown-item:hover {
            background-color: rgba(0, 123, 255, 0.3);
        }
        .navbar-toggler-icon {
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path stroke="rgba(255, 255, 255, 1)" stroke-width="2" fill="none" d="M4 6h22M4 14h22M4 22h22"/></svg>');
    background-size: 100%;
}


.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.card img {
    height: 150px;
    object-fit: cover;
}

footer {
    background: #004aad;
    color: white;
    padding: 40px 0;
    text-align: center;
}

.footer-links a,
.footer-social a {
    color: #ffdd57;
    text-decoration: none;
    margin: 0 10px;
    transition: color 0.3s ease;
}

.footer-links a:hover,
.footer-social a:hover {
    color: #fff;
}

.footer-contact p,
.footer-links h5,
.footer-social h5 {
    margin-bottom: 15px;
}

.footer-contact a {
    color: #ffdd57;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-contact a:hover {
    color: #fff;
}

form input[type="email"] {
    border: 1px solid #ccc;
    border-radius: 3px;
    padding: 5px 10px;
}

form button {
    background-color: #007aff;
    border: none;
    color: white;
    padding: 5px 15px;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #005bb5;
}

@media (max-width: 768px) {
    nav .navbar-nav {
        text-align: center;
    }

    .footer-links,
    .footer-contact,
    .footer-social {
        text-align: center;
    }

    .card img {
        height: auto;
    }
} 
.mobile-only {
    display: none;
}

@media (max-width: 768px) {
    .mobile-only {
        display: block;
    }
}

.service-overview {
    background-color: #f8f9fa;
    padding: 40px 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.service-title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #007aff;
    margin-bottom: 20px;
}

.service-overview p {
    font-size: 1.1rem;
    color: #333;
    line-height: 1.6;
}

.service-overview p.lead {
    font-size: 1.3rem;
    font-weight: 500;
}

@media (max-width: 768px) {
    .service-title {
        font-size: 2rem;
    }
}
    </style>
</head>
<body>

<header class="text-center">
    <h1>MediLink Services</h1>
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="services.php" id="servicesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <a class="dropdown-item mobile-only" href="services.php">Services Page</a>
                        <a class="dropdown-item" href="services/ambulance.php">Ambulance Services</a>
                        <a class="dropdown-item" href="services/nursing.php">Nursing Suppliers</a>
                        <a class="dropdown-item" href="services/clinic.php">Temporary Clinics</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="services/equipment.php" id="equipmentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Equipment Supplies
                    </a>
                    <div class="dropdown-menu" aria-labelledby="equipmentDropdown">
                        <a class="dropdown-item mobile-only" href="services/equipment.php">Equipment Supplies</a>
                        <a class="dropdown-item" href="services/ambulance_equipment_details.php">Ambulance Equipment</a>
                        <a class="dropdown-item" href="services/clinic_equipment_details.php">Temporary Clinic Equipment</a>
                        <a class="dropdown-item" href="services/monitoring_equipment_details.php">Monitoring Equipment</a>
                    </div>
                </li>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <li class="nav-item">
                        <a href="../auth/logout.php" class="nav-link">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="../auth/login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="../auth/register.php" class="nav-link">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>

<div class="container mt-5">
    <!-- Service Overview Section -->
    <div class="service-overview text-center mt-3">
        <h2 class="service-title">Why Choose MediLink Services?</h2>
        <p class="lead mt-3">At MediLink Services, we are committed to providing reliable, high-quality healthcare services to meet a wide range of needs. From rapid ambulance dispatch to trained nursing staff, temporary clinics, and medical equipment supplies, we aim to deliver seamless healthcare support whenever and wherever you need it.</p>
        <p class="mt-3">Explore our services below to find out how we can assist you or your loved ones in times of need.</p>
    </div>

    <h2 class="mt-5">Our Services</h2>
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card" onclick="window.location.href='services/ambulance.php'">
                <img src="includes/ambulance.jpg" alt="Ambulance" class="card-img-top">
                <div class="card-body text-center">
                    <a href="services/ambulance.php" class="stretched-link font-weight-bold">Ambulance Services</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card" onclick="window.location.href='services/nursing.php'">
                <img src="includes/nursing.jpg" alt="Nursing" class="card-img-top">
                <div class="card-body text-center">
                    <a href="services/nursing.php" class="stretched-link font-weight-bold">Nursing Services</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card" onclick="window.location.href='services/clinic.php'">
                <img src="includes/clinic.jpg" alt="Temporary Clinics" class="card-img-top">
                <div class="card-body text-center">
                    <a href="services/clinic.php" class="stretched-link font-weight-bold">Temporary Clinics</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card" onclick="window.location.href='services/monitoring.php'">
                <img src="includes/monitoring_equipment.jpg" alt="Monitoring Equipment" class="card-img-top">
                <div class="card-body text-center">
                    <a href="services/monitoring_equipment_details.php" class="stretched-link font-weight-bold">Monitoring Equipment</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-contact">
                    <h5>Contact Us</h5>
                    <p>Phone: +1 123 456 7890</p>
                    <p>Email: info@medilink.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-links">
                    <h5>Quick Links</h5>
                    <a href="about.php">About Us</a>
                    <a href="services.php">Our Services</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-social">
                    <h5>Follow Us</h5>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="newsletter.php" method="post">
                <input type="email" name="email" placeholder="Subscribe to our newsletter" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
        <p class="mt-4">&copy; 2024 MediLink Services. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.querySelectorAll('.dropdown-toggle').forEach(dropdown => {
        dropdown.addEventListener('click', function (e) {
            if (window.innerWidth > 992) {
                e.stopPropagation();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.navbar-nav .dropdown-toggle').on('click', function(e) {
            if ($(window).width() < 768) {
                e.preventDefault();

                var $dropdownMenu = $(this).next('.dropdown-menu');
                $dropdownMenu.toggleClass('show');  
                
                $('.navbar-nav .dropdown-menu').not($dropdownMenu).removeClass('show');
            }
        });
    });
</script>
</body>
</html>
