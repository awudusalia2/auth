<?php

require_once 'dbconnect.php'; // Include database connection file

session_start();
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $name = trim($_POST['name']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $created_at = date('Y-m-d H:i:s');

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    // Validate name
    if (empty($name)) {
        $errors['name'] = 'Name is required';
    }

    // Validate password
    if (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters long.';
    }

    if ($password !== $confirm_password) {
        $errors['confirm_password'] = 'Passwords do not match.';
    }

    // Check if the email already exists
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_fetch_assoc($result)) {
        $errors['user_exist'] = 'Email is already registered.';
    }

    mysqli_stmt_close($stmt);

    // Redirect back if there are validation errors
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: register.php');
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert the new user
    $query = "INSERT INTO users (email, password, name, created_at) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $email, $hashed_password, $name, $created_at);

    if (mysqli_stmt_execute($stmt)) {
        // Redirect to index.php on success
        header('Location: index.php');
        exit();
    } else {
        // Handle database insertion errors
        $_SESSION['errors'] = ['db_error' => 'An error occurred while creating your account. Please try again later.'];
        header('Location: register.php');
        exit();
    }

    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($connection);
?>
