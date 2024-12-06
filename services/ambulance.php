<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../auth/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ambulance Service - MediLink Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        header, footer { background-color: #007bff; color: white; padding: 10px 0; }
        footer { margin-top: 30px; }
        nav a {
            color: white;
            margin: 0 10px;
            font-weight: bold;
            text-decoration: none;
        }
        nav a:hover {
            color: #ffdd57;
        }
        /* Dropdown menu on hover */
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
        .content {
            margin-top: 20px;
            text-align: center;
        }
        .service-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }
        .service-description {
            font-size: 1.2rem;
            margin-top: 20px;
        }
        .card {
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        footer-links, .footer-contact, .footer-social {
            margin-bottom: 20px;
        }
        .footer-links a, .footer-social a {
            color: #ffdd57;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer-social a:hover {
            color: #fff;
        }
        .mobile-only {
    display: none;
}
    @media (max-width: 768px) {
    .mobile-only {
        display: block;
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
                    <a href="../index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="../about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="../contact.php" class="nav-link">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../services.php" id="servicesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <a class="dropdown-item mobile-only" href="../services.php">Services Page</a>
                        <a class="dropdown-item" href="ambulance.php">Ambulance Services</a>
                        <a class="dropdown-item" href="nursing.php">Nursing Suppliers</a>
                        <a class="dropdown-item" href="clinic.php">Temporary Clinics</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="equipment.php" id="equipmentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Equipment Supplies
                    </a>
                    <div class="dropdown-menu" aria-labelledby="equipmentDropdown">
                        <a class="dropdown-item mobile-only" href="equipment.php">Equipment Supplies</a>
                        <a class="dropdown-item" href="ambulance_equipment_details.php">Ambulance Equipment</a>
                        <a class="dropdown-item" href="clinic_equipment_details.php">Temporary Clinic Equipment</a>
                        <a class="dropdown-item" href="monitoring_equipment_details.php">Monitoring Equipment</a>
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

    <main class="container">
        <div class="content">
            <h2>Our Ambulance Services</h2>
            <!-- Add Image for Ambulance Service -->
            <img src="../includes/ambulance_service.jpg" alt="Ambulance Service" class="service-image">

            <div class="service-description">
                <p>
                    At MediLink Services, we provide fast and efficient ambulance services to ensure the safety and well-being of our clients during medical emergencies. Our fleet of well-equipped ambulances is staffed with trained medical professionals who can respond quickly and provide the necessary medical care during transportation.
                </p>
                <p>
                    Whether it's a routine transport or an emergency situation, we are here to help. Our service operates 24/7, ensuring that you can rely on us at any time of the day or night.
                </p>
            </div>

            <h3>Why Choose Our Ambulance Service?</h3>
            <ul class="list-group">
                <li class="list-group-item bg-light text-dark">24/7 Availability</li>
                <li class="list-group-item bg-secondary text-white">Trained Medical Professionals Onboard</li>
                <li class="list-group-item bg-light text-dark">Fully Equipped Vehicles</li>
                <li class="list-group-item bg-secondary text-white">Fast Response Times</li>
                <li class="list-group-item bg-light text-dark">Affordable Pricing</li>
            </ul>

            <div class="mt-4">
                <h3>How to Book an Ambulance</h3>
                <p>
                    To book an ambulance, simply reach out to our customer support team via the <a href="../contact.php">contact page</a>, or call our emergency number directly. We will confirm the details and dispatch an ambulance to your location as quickly as possible.
                </p>
                <!-- Add another Image for Booking or Phone number -->
                <img src="../includes/booking_ambulance.jpg" alt="Booking Ambulance" class="service-image">
            </div>
        </div>
    </main>

    <footer>
    <div class="container">
        <div class="row">
            <!-- Quick Links -->
            <div class="col-md-4 footer-links">
                <h5>Quick Links</h5>
                <a href="about.php">About Us</a> | 
                <a href="contact.php">Contact</a> | 
                <a href="faq.php">FAQ</a>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 footer-contact">
                <h5>Contact Us</h5>
                <p>Phone: +123 456 7890</p>
                <p>Email: <a href="mailto:info@medilinkservices.com" style="color: #ffdd57;">info@medilinkservices.com</a></p>
                <p>Address: 123 Health St., MedCity</p>
            </div>

            <!-- Social Media Links -->
            <div class="col-md-4 footer-social">
                <h5>Follow Us</h5>
                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#" title="Twitter"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>

        <!-- Newsletter Subscription -->
        <div class="mt-4">
            <h5>Subscribe to Our Newsletter</h5>
            <form action="subscribe.php" method="post" class="form-inline justify-content-center">
                <input type="email" name="email" placeholder="Enter your email" class="form-control mr-2" required>
                <button type="submit" class="btn btn-warning">Subscribe</button>
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

