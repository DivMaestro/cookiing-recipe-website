<?php
session_start();
require 'connection.php'; // Include your database connection

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if user exists
    $sql = "SELECT * FROM accounts WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variables on successful login
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];

            // Redirect to profile page
            header("Location: ../profile.php");
            exit();
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }
}
?>