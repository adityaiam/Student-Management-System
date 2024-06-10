<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin | Student Data</title>
</head>
<body>
    <?php
include('include/nav.php');
    ?>
    <br>
    <div>
    <center><h3>Student Details</h3></center>


    <?php
include('php/db.php');

// SQL query to select all data from the student table
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Date of Birth</th>
                <th>Course</th>
                <th>Joining Year</th>
                <th>Address</th>
                <th>Action</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["mobile"]. "</td>
                <td>" . $row["dob"]. "</td>
                <td>" . $row["course"]. "</td>
                <td>" . $row["joiningyear"]. "</td>
                <td>" . $row["address"]. "</td>
                <td>";
                
                if ($row["status"] == "unauthorized") {
                    echo "<form action='php/approve.php' method='post'>
                              <input type='hidden' name='id' value='" . $row["id"] . "'>
                              <input type='submit' class='btn2' value='Approve'>
                          </form>";
                } else {
                    echo "Authorized";
                }

                echo "</td>
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