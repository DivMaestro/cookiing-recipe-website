<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Check if email already exists
    $stmt = $conn->prepare('SELECT * FROM accounts WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email already exists!";
    } else {
        // Insert data into database
        $stmt = $conn->prepare('INSERT INTO accounts (first_name, last_name, gender, birthday, email, password) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('ssssss', $firstName, $lastName, $gender, $birthday, $email, $hashedPassword);

        if ($stmt->execute()) {
            echo "Account successfully created!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
