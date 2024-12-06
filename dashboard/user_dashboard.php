<?php
session_start();
require_once '../includes/db.php';

// Redirect to login if not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit();
} 

$user_id = $_SESSION['user_id'];

// Fetch user details
$stmt = $conn->prepare("SELECT username, email FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard - MediLink Services</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        header, footer { text-align: center; padding: 10px; background: #007bff; color: white; }
        main { padding: 20px; }
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
    </style>
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
        <nav>
            <a href="../index.php">Home</a> | 
            <a href="../services.php">Services</a> | 
            <a href="../auth/logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h2>Your Information</h2>
        <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
        
        <h3>Available Services</h3>
        <ul>
            <li><a href="../services/ambulance.php">Book Ambulance</a></li>
            <li><a href="../services/nursing.php">Nursing Services</a></li>
            <li><a href="../services/clinic.php">Temporary Clinics</a></li>
            <li><a href="../services/equipment.php">Medical Equipment</a></li>
        </ul>
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

