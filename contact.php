<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: auth/login.php');
    exit();
}

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    require_once 'includes/db.php';

    $sql = "SELECT username, email FROM users WHERE id = '$userId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        $username = $user_data['username'];
        $email = $user_data['email'];
    } else {
        die("User not found.");
    }
} else {
    echo "Session not set properly.";
    exit(); 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['message']) && !empty($_POST['message'])) {
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $sql = "INSERT INTO contact_messages (user_id, username, email, message) 
        VALUES ('$userId', '$username', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            $success_msg = "Message sent successfully!";
        } else {
            $error_msg = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $error_msg = "Message cannot be empty.";
    }
}

$sql = "SELECT * FROM contact_messages ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediLink Services - Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('includes/Contact Us.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        header {
            background: rgba(0, 123, 255, 0.8);
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
            background: url('includes/Contact Us.jpg') no-repeat center center;
            background-size: cover;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        }
        .contact-form {
            color: #007bff;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: -100px;
        }
        .contact-form label {
            font-weight: bold;
            color: #333;
        }
        .contact-form textarea {
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
            padding: 12px;
            width: 100%;
            font-size: 1rem;
        }
        .contact-form button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .contact-form button:hover {
            background-color: #0056b3;
            cursor: pointer;
        }
        .message-table {
            margin-top: 50px;
            color: white;
        }
        .message-table th, .message-table td {
            padding: 15px;
            text-align: left;
        }
        .footer {
            background-color: rgba(0, 123, 255, 0.8) !important;
            color: white !important;
}

.footer-links a {
    color: white !important;
    text-decoration: none;
    margin: 0 10px;
}

.footer-social a {
    color: #ffdd57;
    font-size: 24px;
    margin: 0 15px;
}

.footer-social a:hover {
    color: white;
}

.social-icon {
    font-size: 2rem;
    padding: 10px;
}

.footer .row {
    margin-bottom: 10px;
}

@media (max-width: 767px) {
    .footer-links a, .footer-social a {
        display: block;
        margin: 5px 0;
    }
    .social-icon {
        font-size: 1.5rem;
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

<section class="hero">
    <h2>Contact Us</h2>
</section>

<div class="container contact-form">
    <h3>Send Us A Message</h3>
    <form method="POST" action="">
        <div class="form-group">
            <label for="message">Your Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Enter your message here..." required></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>

    <?php if(isset($success_msg)) { echo "<p>$success_msg</p>"; } ?>
    <?php if(isset($error_msg)) { echo "<p>$error_msg</p>"; } ?>
</div>

<?php if($result->num_rows > 0): ?>
    <div class="message-table container">
        <h3>All Messages</h3>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Message</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<footer class="footer bg-dark text-light py-4">
    <div class="container">    
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 text-center mb-3 mb-md-0">
                <a href="#" class="fa fa-facebook social-icon"></a>
                <a href="#" class="fa fa-twitter social-icon"></a>
                <a href="#" class="fa fa-instagram social-icon"></a>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p>&copy; 2024 MediLink Services. All rights reserved.</p>
            </div>
        </div>
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
