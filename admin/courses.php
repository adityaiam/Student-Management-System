<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin | Courses Data</title>
</head>
<body>
    <?php
include('include/nav.php');
    ?>
    <br>
    <div>
    <center><h3>Courses</h3></center>

    <a class='btn2' href="addcourse.php">Add new Course</a>
<br><br>

    <?php
include('php/db.php');

// SQL query to select all data from the student table
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Course Head</th>
                <th>About Course</th>
                <th>Action</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["head"]. "</td>
                <td>" . $row["description"]. "</td>
                <td>
                    <form action='updatecourse.php' method='get'>
                              <input type='hidden' name='id' value='" . $row["id"] . "'>
                              <input type='submit' class='btn2' value='Update'>
                    </form>
                    <br>
                    <form action='php/deletecourse.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <input type='submit' class='btn2' value='Delete'>
                    </form>

                </td>


              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>










    </div>
</body>
</html>