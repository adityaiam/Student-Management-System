<?php
include('db.php');

$name = $_POST['name'];
$contact = $_POST['contact'];
$msg = $_POST['msg'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact (name, contact, msg) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $contact, $msg);


if ($stmt->execute()) {
    echo "
    <script>
    alert('Thank you for contacting us. We will contact you soon');
window.location.href = '../index.php#contact';
    </script>
    ";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
