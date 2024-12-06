<?php
session_start();
require_once '../includes/db.php';

// Redirect to login if not logged in or not an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../auth/login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch admin details (optional)
$stmt = $conn->prepare("SELECT username, email FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$admin = $result->fetch_assoc();

$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - MediLink Services</title>
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
        <h1>Welcome, Admin <?php echo htmlspecialchars($admin['username']); ?>!</h1>
        <nav>
            <a href="../index.php">Home</a> | 
            <a href="../services.php">Services</a> | 
            <a href="../auth/logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h2>Manage Users</h2>
        <a href="view_users.php">View All Users</a>
        <h2>Manage Services</h2>
        <a href="add_service.php">Add New Service</a>
        <a href="view_services.php">View All Services</a>
    </main>
    <footer>
    <div class="container">
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

