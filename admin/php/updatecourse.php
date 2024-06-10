<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $head = $_POST['head'];
    $description = $_POST['description'];

    // Update the course details in the database
    $sql = "UPDATE courses SET name = ?, head = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $head, $description, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Course details updated successfully'); window.location.href = '../courses.php';</script>";
    } else {
        echo "<script>alert('Error updating course'); window.location.href = '../cources.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
