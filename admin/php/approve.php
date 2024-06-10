<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['id'];

    // Update the student's status to authorized
    $sql = "UPDATE student SET status = 'authorized' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);

    if ($stmt->execute()) {
        echo "<script>alert('Student approved successfully'); window.location.href = '../student.php';</script>";
    } else {
        echo "<script>alert('Error approving student'); window.location.href = '../student.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
