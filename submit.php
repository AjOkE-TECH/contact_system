<?php
session_start();
require_once 'config/db.php';

if (!$conn) {
    die("Database connection failed");
}

if (isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // VALIDATION
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $_SESSION['error'] = "All fields are required!";
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format!";
    }

    else {
        // SANITIZE (for output safety)
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $phone = htmlspecialchars($phone);
        $message = htmlspecialchars($message);

        $sql = "INSERT INTO contacts (name, email, phone, message)
                VALUES ('$name', '$email', '$phone', '$message')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['success'] = "Message sent successfully!";
        } else {
            $_SESSION['error'] = "Something went wrong!";
        }
    }
}

// Redirect back
header("Location: index.php");
exit();
?>