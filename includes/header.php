<?php
session_start(); // Start the session to access session variables
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediLink Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { font-family: Arial, sans-serif; }
        header { background: #007bff; color: white; padding: 10px 0; }
        nav a { color: white; margin: 0 15px; }
    </style>
</head>
<body>
    <header class="text-center">
        <h1>MediLink Services</h1>
        <nav>
    <a href="../index.php">Home</a> | 
    <a href="../about.php">About Us</a> | 
    <a href="../contact.php">Contact</a> | 
    <a href="../services.php">Services</a> |
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="../auth/logout.php">Logout</a>
    <?php else: ?>
        <a href="../auth/login.php">Login</a>
        <a href="../auth/register.php">Register</a>
    <?php endif; ?>
</nav>

    </header>
