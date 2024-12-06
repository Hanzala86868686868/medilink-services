<?php
session_start();
require_once '../includes/db.php'; // Include the database connection file

$error = ''; // Initialize an error variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if 'email' and 'password' keys exist in $_POST
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare and bind
        $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE email = ?");

        // Check if statement preparation was successful
        if ($stmt === false) {
            // Log the error internally without exposing it to the user
            error_log("Error preparing statement: " . $conn->error);
            die("An error occurred, please try again later.");
        }

        $stmt->bind_param("s", $email); // Bind the email parameter

        // Execute the statement
        $stmt->execute();

        // Store result
        $stmt->store_result();

        // Check if email exists
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $hashed_password, $role);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $hashed_password)) {
                // Set session variables
                $_SESSION['user_id'] = $id;
                $_SESSION['role'] = $role;
                $_SESSION['loggedin'] = true; // Set logged-in session variable

                // Redirect based on user role
                if ($role === 'admin') {
                    header('Location: ../dashboard/admin_dashboard.php');
                } else {
                    header('Location: ../index.php'); // Redirect to user dashboard
                }
                exit();
            } else {
                // Invalid password
                $error = "Invalid email or password.";
            }
        } else {
            // No user found with the email
            $error = "Invalid email or password.";
        }

        $stmt->close(); // Close the prepared statement
    } else {
        $error = "Please fill in all fields."; // Handle the case where email or password is missing
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MediLink Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
        }
        main {
            padding: 40px 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        input {
            margin: 10px 0;
            padding: 15px;
            font-size: 1rem;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            padding: 15px;
            font-size: 1rem;
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            font-size: 1rem;
            margin-top: 15px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .error {
            color: red;
            font-size: 0.9rem;
            margin-top: 15px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }
            .form-container {
                padding: 25px;
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <div class="form-container">
            <?php if (!empty($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 MediLink Services. All Rights Reserved.</p>
    </footer>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
