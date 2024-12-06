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
    <title>Monitoring Equipment Details - MediLink Services</title>
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
        .equipment-details {
            margin-top: 40px;
        }
        .feature-list {
            list-style-type: disc;
            padding-left: 20px;
        }
        .feature-list li {
            margin-bottom: 10px;
        }
        .mobile-only {
            display: none;
        }
        @media (max-width: 768px) {
            .mobile-only {
                display: block;
            }
            .card {
                margin-bottom: 1rem;
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

<main class="container my-5">
    <div class="container equipment-details">
        <!-- Equipment 1 -->
        <div class="card mb-4">
            <img src="../includes/monitoring_equipment.jpg" alt="Patient Monitoring Equipment" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Advanced Monitoring Solutions</h5>
                <p class="card-text">
                    Our Patient Monitoring Equipment delivers reliable, real-time monitoring of vital signs to help healthcare providers make informed decisions. This equipment is designed to meet the needs of healthcare facilities, offering advanced features in a compact, user-friendly format.
                </p>
                <p><strong>Features:</strong></p>
                <ul class="feature-list">
                    <li>Real-time tracking of heart rate, blood pressure, oxygen levels, and respiration.</li>
                    <li>Configurable alarms and notifications for critical changes.</li>
                    <li>Data storage with advanced analytics for trend tracking.</li>
                    <li>Lightweight, portable design suitable for any healthcare setting.</li>
                </ul>
                <hr>
                <h6>Usage and Benefits</h6>
                <p class="card-text">
                    This monitoring equipment enhances patient safety by providing immediate data access and critical alerts. Designed for hospitals, clinics, and home care, it is trusted by medical professionals worldwide.
                </p>
                <h6>Specifications</h6>
                <ul class="feature-list">
                    <li><strong>Display:</strong> 10.2-inch touchscreen with high visibility</li>
                    <li><strong>Connectivity:</strong> Bluetooth and Wi-Fi enabled</li>
                    <li><strong>Battery life:</strong> Up to 10 hours on a single charge</li>
                    <li><strong>Weight:</strong> 2.5 kg (5.5 lbs)</li>
                </ul>
                <div class="d-flex justify-content-center mt-4">
                    <a href="../contact.php" class="btn btn-primary btn-lg">Contact Us for More Information</a>
                </div>
            </div>
        </div>
        <!-- Equipment 2 -->
        <div class="card mb-4">
            <img src="../includes/ecg_monitoring.jpg" alt="ECG Monitoring" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">ECG Monitoring System</h5>
                <p class="card-text">
                    The ECG Monitoring System provides accurate and continuous monitoring of cardiac activity, helping healthcare providers detect any abnormalities in real-time.
                </p>
                <p><strong>Features:</strong></p>
                <ul class="feature-list">
                    <li>12-lead ECG with real-time analysis.</li>
                    <li>Alarms for irregular heartbeats and arrhythmias.</li>
                    <li>Wireless connectivity for remote monitoring.</li>
                    <li>Portable and user-friendly interface.</li>
                </ul>
                <hr>
                <h6>Usage and Benefits</h6>
                <p class="card-text">
                    This equipment is critical for monitoring heart conditions and ensuring patient safety, especially in emergency and intensive care units.
                </p>
                <h6>Specifications</h6>
                <ul class="feature-list">
                    <li><strong>Display:</strong> 7-inch color LCD display</li>
                    <li><strong>Battery life:</strong> Up to 8 hours</li>
                    <li><strong>Weight:</strong> 1.2 kg (2.6 lbs)</li>
                </ul>
                <div class="d-flex justify-content-center mt-4">
                    <a href="../contact.php" class="btn btn-primary btn-lg">Contact Us for More Information</a>
                </div>
            </div>
        </div>
        <!-- Equipment 3 -->
        <div class="card mb-4">
            <img src="../includes/infusion_pump.jpg" alt="Infusion Pump" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Infusion Pump</h5>
                <p class="card-text">
                    The Infusion Pump provides accurate and controlled delivery of fluids and medications to patients, ensuring proper dosing and flow rates.
                </p>
                <p><strong>Features:</strong></p>
                <ul class="feature-list">
                    <li>Precise control of infusion rates and volumes.</li>
                    <li>Alarms for occlusions and incorrect infusion rates.</li>
                    <li>Multiple infusion modes for different therapeutic needs.</li>
                    <li>Compact and portable design.</li>
                </ul>
                <hr>
                <h6>Usage and Benefits</h6>
                <p class="card-text">
                    Infusion pumps are widely used in hospitals and clinics for delivering fluids, medications, and nutrients intravenously to patients.
                </p>
                <h6>Specifications</h6>
                <ul class="feature-list">
                    <li><strong>Display:</strong> 5-inch LCD touchscreen</li>
                    <li><strong>Battery life:</strong> Up to 6 hours on a full charge</li>
                    <li><strong>Weight:</strong> 1.8 kg (3.9 lbs)</li>
                </ul>
                <div class="d-flex justify-content-center mt-4">
                    <a href="../contact.php" class="btn btn-primary btn-lg">Contact Us for More Information</a>
                </div>
            </div>
        </div>
        <!-- Equipment 4 -->
        <div class="card mb-4">
            <img src="../includes/ventilator.jpg" alt="Ventilator" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Advanced Ventilator</h5>
                <p class="card-text">
                    Our Advanced Ventilator provides critical respiratory support for patients in need of artificial ventilation.
                </p>
                <p><strong>Features:</strong></p>
                <ul class="feature-list">
                    <li>Full-featured ventilation modes for diverse patient needs.</li>
                    <li>Real-time monitoring of respiratory parameters.</li>
                    <li>Integrated oxygen therapy settings.</li>
                    <li>Lightweight and mobile for ICU and emergency use.</li>
                </ul>
                <hr>
                <h6>Usage and Benefits</h6>
                <p class="card-text">
                    This ventilator ensures reliable ventilation and life support in both critical and routine care settings.
                </p>
                <h6>Specifications</h6>
                <ul class="feature-list">
                    <li><strong>Display:</strong> 10.2-inch touchscreen</li>
                    <li><strong>Battery life:</strong> Up to 10 hours</li>
                    <li><strong>Weight:</strong> 4.5 kg (9.9 lbs)</li>
                </ul>
                <div class="d-flex justify-content-center mt-4">
                    <a href="../contact.php" class="btn btn-primary btn-lg">Contact Us for More Information</a>
                </div>
            </div>
        </div>
    </div>
</main>

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
                <a href="https://facebook.com" target="_blank">Facebook</a> |
                <a href="https://twitter.com" target="_blank">Twitter</a> |
                <a href="https://linkedin.com" target="_blank">LinkedIn</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
