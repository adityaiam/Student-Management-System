<?php
include('db.php');

$name = $_POST['name'];
$head = $_POST['head'];
$description = $_POST['description'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO courses (name, description, head) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $description, $head);


if ($stmt->execute()) {
    echo "
    <script>
    alert('Course Added Successfully');
window.location.href = '../courses.php';
    </script>
    ";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
