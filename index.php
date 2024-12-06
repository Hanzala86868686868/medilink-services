<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediLink Services - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ 
            font-family: Arial, sans-serif;
         }
        header { 
            background: #007aff;
             color: white;
              padding: 15px 0; 
            }
        footer{ 
            background: #007aff;
             color: white; 
             padding: 15px 0;
             } 
        .welcome { 
            padding: 20px 0 20px 20px; 
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

        .carousel-item {
            height: 400px;
            background-size: cover;
            background-position: center;
        }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 8px;
        }

        .card {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            padding: 20px;
            height: 100%;
        }
        .card h2 {
            color: #007aff;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        .card p {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #007aff;
            border-color: #007aff;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #005bb5;
            border-color: #005bb5;
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

<div id="heroCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="includes/Emergency Medical Services.jpg" class="d-block w-100" alt="Slide 1" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h2>Emergency Medical Services</h2>
                <p>Providing 24/7 emergency support to get you the care you need, when you need it.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="includes/Nursing Services.jpg" class="d-block w-100" alt="Slide 2" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h2>Comprehensive Nursing Services</h2>
                <p>Experienced nurses ready to deliver high-quality care in any setting.</p>
            </div>
        </div>
    
        <div class="carousel-item">
            <img src="includes/Mobile Clinics.jpg" class="d-block w-100" alt="Slide 3" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h2>Mobile Clinics</h2>
                <p>Our mobile clinics bring healthcare services to your location, ensuring accessible care for all.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="includes/Medical Equipment Rental.jpg" class="d-block w-100" alt="Slide 4" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h2>Medical Equipment Rental</h2>
                <p>Reliable medical equipment and supplies to meet your short-term healthcare needs.</p>
            </div>
        </div>
    </div>
    
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center mt-5">
    <div class="welcome">
        <h1>Welcome to MediLink Services</h1><br>
    </div>
    
    <div class="row">   
        <div class="col-md-4 mb-4">
            <div class="card p-3">
                <img src="includes/Experties.jpg" class="card-img-top mb-3" alt="Expertise" style="border-radius: 8px; height: 200px; object-fit: cover;">
                <h2>Expertise</h2>
                <p>HighCare Medical Center is home to a distinguished team of medical experts across a variety of specialties...</p>
            </div>
        </div>
         
        <div class="col-md-4 mb-4">
            <div class="card p-3">
                <img src="includes/Service Offerings.jpg" class="card-img-top mb-3" alt="Service Offerings" style="border-radius: 8px; height: 200px; object-fit: cover;">
                <h2>Service Offerings</h2>
                <p>At HighCare Medical Center, we are proud to offer a comprehensive suite of medical services designed to address a wide range of healthcare needs...</p>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card p-3">
                <img src="includes/Commitment to Healthcare.jpg" class="card-img-top mb-3" alt="Commitment to Healthcare" style="border-radius: 8px; height: 200px; object-fit: cover;">
                <h2>Commitment to Healthcare</h2>
                <p>At the heart of HighCare Medical Center’s mission is a steadfast commitment to promoting health, healing, and wellness in our community...</p>
            </div>
        </div>
    </div>
    <a href="services.php" class="btn btn-primary mt-4">View Services</a>
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

<script>
    $(document).ready(function(){
        $('#heroCarousel').carousel({
            interval: 3000, 
            ride: 'carousel'
        });
    });
        document.querySelectorAll('.dropdown-toggle').forEach(dropdown => {
            dropdown.addEventListener('click', function (e) {
                if (window.innerWidth > 992) {
                    e.stopPropagation();
                }
            });
        });
</script>

</body>
</html>
