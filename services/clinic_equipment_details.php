<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MediLink Services - Clinic & Equipment Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { font-family: Arial, sans-serif; }
        header { background: #007aff; color: white; padding: 10px 0; }
        footer {
            background: #004aad;
            color: white;
            padding: 40px 0;
            text-align: center;
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
        .section-title {
            margin-top: 30px;
            text-align: center;
            font-weight: bold;
            color: #007aff;
        }
        .card {
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        footer a {
            color: #ffdd57;
            text-decoration: none;
        }
        footer a:hover {
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

<div class="container mt-5">
    <!-- Clinic Section -->
    <h2 class="section-title">Temporary Clinic Services</h2>
    <div class="row">
        <div class="col-md-6 image-container">
            <img src="../includes/clinic-setup.jpg" alt="Temporary Clinic Setup">
        </div>
        <div class="col-md-6">
            <p>Our temporary clinics provide comprehensive healthcare services in areas that may lack permanent medical facilities. MediLink offers trained professionals and essential equipment to set up a fully functional clinic to cater to various healthcare needs.</p>
            <ul>
                <li>Primary care consultations and checkups</li>
                <li>Vaccination and immunization programs</li>
                <li>Basic diagnostic tests and health screenings</li>
                <li>Health education and awareness programs</li>
                <li>Emergency response and first aid</li>
            </ul>
            <p>Our clinics are adaptable to both urban and rural settings, ensuring that communities can access essential healthcare regardless of their location.</p>
        </div>
    </div>

    <!-- Equipment Section -->
    <h2 class="section-title">Medical Equipment Supplies</h2>
    <div class="row">
        <div class="col-md-6">
            <p>Our extensive range of medical equipment is designed to meet the needs of clinics, hospitals, and individual healthcare providers. We ensure that our equipment is of the highest quality, reliable, and readily available to support various medical treatments and procedures.</p>
            <ul>
                <li>Portable diagnostic devices (e.g., blood pressure monitors, glucometers)</li>
                <li>Patient care items (e.g., hospital beds, wheelchairs, and stretchers)</li>
                <li>Infection control supplies (e.g., PPE kits, sanitizers, masks)</li>
                <li>Emergency equipment (e.g., defibrillators, oxygen cylinders)</li>
                <li>Basic and advanced surgical tools</li>
            </ul>
            <p>We work with certified suppliers to ensure that all equipment meets medical standards and is available for prompt delivery and setup.</p>
        </div>
        <div class="col-md-6 image-container">
            <img src="../includes/medical-equipment.jpg" alt="Medical Equipment">
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="text-center mt-5">
        <h4>Need Specialized Equipment or a Custom Clinic Setup?</h4>
        <p>Contact us today to discuss how we can support your unique healthcare requirements with our clinic and equipment solutions.</p>
        <a href="../contact.php" class="btn btn-primary">Get in Touch</a>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
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

        <p class="mt-4">"Your health and safety are our top priorities. At MediLink Services, we’re here to serve you with compassion, professionalism, and dedication to quality care."</p>
        
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
