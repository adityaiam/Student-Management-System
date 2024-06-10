<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve course ID from the form submission
    $id = $_POST['id'];

    // SQL query to delete the course from the database
    $sql = "DELETE FROM contact WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Marked As Read'); window.location.href = '../contact.php';</script>";
    } else {
        echo "<script>alert('Not DOne'); window.location.href = '../contact.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
