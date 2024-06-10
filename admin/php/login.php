<?php
session_start();
include('db.php');

// Get form data
$input_username = $_POST['username'];
$input_password = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("SELECT password FROM admin WHERE username = ?");
$stmt->bind_param("s", $input_username);

// Execute the statement
$stmt->execute();

// Bind result variables
$stmt->bind_result($hashed_password);

// Fetch the result
if ($stmt->fetch()) {
    if ($input_password == $hashed_password) {
        // Store user information in session
        $_SESSION['admin_username'] = $input_username;
        header("Location: ../dashboard.php"); // Redirect to the admin dashboard
    } else {
        echo "<script>alert('Incorrect password'); window.location.href = '../login.html';</script>";
    }
} else {
    echo "<script>alert('No account found with that username'); window.location.href = '../login.html';</script>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
