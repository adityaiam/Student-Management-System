<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin | Contact Data</title>
</head>
<body>
    <?php
include('include/nav.php');
    ?>
    <br>
    <div>
    <center><h3>Contacts Details</h3></center>


    <?php
include('php/db.php');

// SQL query to select all data from the student table
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact me</th>
                <th>Message</th>
                <th>Marked as Read</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["contact"]. "</td>
                <td>" . $row["msg"]. "</td>
                <td>";
                    echo "<form action='php/donecontact.php' method='post'>
                              <input type='hidden' name='id' value='" . $row["id"] . "'>
                              <input type='submit' class='btn2' value='Done'>
                          </form>";
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