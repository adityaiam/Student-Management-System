<?php

include('db.php');

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];
$course = $_POST['course'];
$joiningyear = $_POST['joiningyear'];
$address = $_POST['address'];
$password = $_POST['password'];


// Prepare and bind
$stmt = $conn->prepare("INSERT INTO student (name, email, mobile, dob, course, joiningyear, address, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisssss", $name, $email, $mobile, $dob, $course, $joiningyear, $address, $password);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully
    <script>
    alert('Student Resistration Success');
window.location.href = '../login.html';
    </script>
    ";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
