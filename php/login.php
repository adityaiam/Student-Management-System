<?php
session_start();

include('db.php');

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("SELECT id, password, status FROM student WHERE email = ?");
$stmt->bind_param("s", $email);

// Execute the statement
$stmt->execute();

// Bind result variables
$stmt->bind_result($id, $hashed_password, $status);

// Fetch the result
if ($stmt->fetch()) {
    if ($password == $hashed_password) {
        if ($status === 'unauthorized') {
            echo "<script>alert('Your account is not authorized'); window.location.href = '../login.html';</script>";
        } else {
            // Store user information in session
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;
            header("Location: student/dashboard.php"); // Redirect to a welcome page
        }
    } else {
        echo "<script>alert('Incorrect password'); window.location.href = '../login.html';</script>";
    }
} else {
    echo "<script>alert('No account found with that email'); window.location.href = '../login.html';</script>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
