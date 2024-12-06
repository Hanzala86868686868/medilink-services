<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediLink Services - About Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    header {
        background: #007bff;
        color: white;
        padding: 10px 0;
    }

    footer {
        background: #007bff;
        color: white;
        padding: 10px 0;
    }

    nav a {
        color: white;
        margin: 0 10px;
        font-weight: bold;
        text-decoration: none;
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

    .hero {
        position: relative;
        background: url('includes/About.jpg') no-repeat center center;
        background-size: cover;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        border-radius: 8px;
    }

    .hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 8px;
    }

    .hero-text {
        position: relative;
        z-index: 1;
        color: white;
    }

    .hero h1 {
        font-size: 3rem;
        background: rgba(0, 0, 0, 0.6);
        padding: 15px 30px;
        border-radius: 8px;
    }

    .hero p {
        font-size: 1.2rem;
        margin-top: 10px;
        background: rgba(0, 0, 0, 0.5);
        padding: 8px 20px;
        border-radius: 5px;
    }

    .container {
        margin-top: 30px;
    }

    .about-text {
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .section-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
    }

    .section-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 40px;
    }

    .section-content .text {
        flex: 1;
        padding-right: 20px;
    }

    .section-content .image {
        flex: 1;
        padding-left: 20px;
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

    @media (max-width: 991px) {
        .section-content {
            flex-direction: column;
            text-align: center;
        }

        .section-content .text,
        .section-content .image {
            padding: 0;
        }

        .hero h1 {
            font-size: 2.5rem;
            padding: 10px 20px;
        }

        .hero p {
            font-size: 1rem;
            padding: 5px 15px;
        }

        .navbar-nav {
            text-align: center;
        }

        .navbar-toggler {
            margin-left: auto;
        }

        .navbar-nav .nav-item {
            margin-top: 10px;
        }

        .footer-contact,
        .footer-social,
        .footer-links {
            text-align: center;
            margin-top: 15px;
        }

        .footer-contact a {
            color: #ffdd57;
        }

        .footer-social a {
            margin-top: 5px;
        }
    }

    @media (max-width: 575px) {
        .hero h1 {
            font-size: 2rem;
        }

        .hero p {
            font-size: 0.9rem;
        }

        .section-image {
            height: 200px;
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

<!-- Hero Section -->
<div class="hero">
    <div class="hero-text">
        <h1>About MediLink Services</h1>
        <p>Committed to Accessible, Compassionate Healthcare Across Saudi Arabia</p>
    </div>
</div>

<!-- Page Content -->
<div class="container">
    <!-- Our Mission Section -->
    <div class="section-content">
        <div class="text">
            <h2>Our Mission</h2>
            <p class="about-text">At MediLink Services, we aim to provide exceptional healthcare services through our comprehensive offerings. We are committed to ensuring that top-quality healthcare solutions are easily accessible to people everywhere, at any time. Our mission is to bridge gaps in healthcare delivery through innovative solutions such as ambulance services, temporary clinics, and medical equipment supplies.</p>
        </div>
        <div class="image">
            <img src="includes/Our Mission.jpg" alt="Our Mission" class="section-image">
        </div>
    </div>

    <!-- Our Values Section -->
    <div class="section-content">
        <div class="text">
            <h2>Our Values</h2>
            <p class="about-text">We operate with a strong set of core values that guide us in every aspect of our work. Compassion, excellence, accessibility, and innovation are at the heart of everything we do. We believe in creating lasting relationships with our clients and providing them with the highest standard of care possible. We’re here for your health, when and where you need us the most.</p>
        </div>
        <div class="image">
            <img src="includes/Our Values.jpg" alt="Our Values" class="section-image">
        </div>
    </div>

    <!-- Commitment to Healthcare Section -->
    <div class="section-content">
        <div class="text">
            <h2>Commitment to Healthcare</h2>
            <p class="about-text">Our commitment to healthcare goes beyond merely providing services. We prioritize health education, accessibility, and continuous improvements in our offerings. We focus on building a healthier community by providing timely and reliable healthcare solutions and ensuring that no one is left behind.</p>
        </div>
        <div class="image">
            <img src="includes/Comitment to Healthcare.jpg" alt="Commitment to Healthcare" class="section-image">
        </div>
    </div>
</div>

<!-- Footer -->
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

            <div class="col-md-4 footer-contact">
                <h5>Contact Us</h5>
                <p>Phone: +123 456 7890</p>
                <p>Email: <a href="mailto:info@medilinkservices.com" style="color: #ffdd57;">info@medilinkservices.com</a></p>
                <p>Address: 123 Health St., MedCity</p>
            </div>

            <div class="col-md-4 footer-social">
                <h5>Follow Us</h5>
                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#" title="Twitter"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>

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

