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
    <title>Nursing Suppliers - MediLink Services</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header, footer {
    text-align: center;
    padding: 20px;
    background: #007bff;
    color: white;
}

main {
    padding: 40px 20px;
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

.card {
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 10px;
    margin-bottom: 30px;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-body {
    text-align: center;
    padding: 20px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    text-transform: uppercase;
    font-weight: bold;
}

.btn-primary:hover {
    background-color: #0056b3;
    color: white;
}

.btn-warning {
    background-color: #ffdd57;
    border: none;
    color: white;
}

.btn-warning:hover {
    background-color: #e0c20c;
}

.mobile-only {
    display: none;
}

@media (max-width: 768px) {
    /* Make navbar items stack on smaller screens */
    .navbar-nav {
        text-align: center;
        width: 100%;
    }

    /* Dropdown should stay open on mobile */
    .navbar .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }

    /* Make the cards stack vertically on smaller screens */
    .card {
        margin-bottom: 15px;
    }

    .card-img-top {
        height: auto; /* Adjust image height for mobile */
    }

    .mobile-only {
        display: block;
    }

    footer .container {
        text-align: center;
    }
}

@media (max-width: 480px) {
    header h1 {
        font-size: 24px;
    }

    footer h5 {
        font-size: 16px;
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
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
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

<main>
    <h2>Our Nursing Services</h2>
    <p>At HighCare Medical Center, we provide skilled nurses for rent, available for short-term and long-term assignments. Our nurses are suitable for various environments like companies, camps, and clinics. Whether you need assistance with recovery at home or specialized care in a healthcare setting, our team is equipped to meet your needs.</p>

    <h3>What We Offer</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="../includes/nurse_homecare.jpg" alt="Home Care Nursing" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Home Care Nursing</h5>
                    <p class="card-text">Our nurses offer personalized care at home to help you recover in comfort.</p>
                    <a href="nursing_details.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="../includes/nurse_criticalcare.jpg" alt="Critical Care Nursing" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Critical Care Nursing</h5>
                    <p class="card-text">For patients requiring intensive care, our experienced nurses provide expert monitoring and support.</p>
                    <a href="criticalcare_details.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="../includes/nurse_geriatrics.jpeg" alt="Geriatric Nursing" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Geriatric Nursing</h5>
                    <p class="card-text">We specialize in elderly care, helping seniors maintain a high quality of life at home or in care facilities.</p>
                    <a href="geriatrics_details.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <h3>How to Request Nursing Services</h3>
    <p>If you would like to request a nurse, simply click the button below and fill out the request form.</p>
    <a href="request_nurse.php" class="btn btn-warning">Request a Nurse</a>
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
