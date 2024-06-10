<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve course ID from the form submission
    $course_id = $_POST['id'];

    // SQL query to delete the course from the database
    $sql = "DELETE FROM courses WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $course_id);

    if ($stmt->execute()) {
        echo "<script>alert('Course deleted successfully'); window.location.href = '../courses.php';</script>";
    } else {
        echo "<script>alert('Error deleting course'); window.location.href = '../courses.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
