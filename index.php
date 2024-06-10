<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Student Management System</title>
</head>
<body>
    <?php include 'include/nav.php' ?>
<center>
    <img style="width: 90%;height:85vh;margin:20px;border-radius: 15px;" src="images/college.jpg" alt="SMS">
</center>
<br><br>
<center><h2 id="courses">Courses</h2></center>

<?php
include('php/db.php');

// SQL query to select all data from the student table
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "
    <center>
    <table border='1' style='width:80%;'>
            <tr>
                <th>Course Name</th>
                <th>Course Head</th>
                <th>About Course</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["name"]. "</td>
                <td>" . $row["head"]. "</td>
                <td>" . $row["description"]. "</td>
              </tr>";
    }
    echo "</table></center>";
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>

<br><br>
<center><h2 id="contact">Contact Us</h2></center>

<center>
    <form action="php/contact.php" class="form" method="post">
        <input class="input" type="text" name="name" placeholder="Name" required>
        <br>
        <input class="input" type="text" name="contact" placeholder="Mobile/Email" required>
        <br>
        <textarea class="input" name="msg" rows="4" placeholder="Write your Query/Message" required></textarea>
        <br>
        <center>
            <input class="btn" type="submit" value="Send"><br><br>
        </center>  
    </form>
</center>
<br><br>

<footer>
  <p>Student Management System<br>
  <a style="color: #fff;" href="mailto:email@sms.com">email@sms.com</a></p>
</footer>


</body>
</html>