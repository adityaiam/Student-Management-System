<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Student Registration</title>
</head>

<body>
<?php include 'include/nav.php' ?>
    <?php
    include('php/db.php');
    $sql = "SELECT name FROM courses";
    $result = $conn->query($sql);
    ?>




<center>
    <form action="php/register.php" class="form" method="post">
        <center><h2>Student Registration Form</h2></center>
        <input class="input" type="text" name="name" placeholder="Enter Name" required>
        <br>
        <input class="input" type="text" name="email" placeholder="Enter Email" required>
        <br>
        <input class="input" type="number" name="mobile" placeholder="Enter Mobile" required>
        <br>
        <label for="dob">Date of Birth</label>
        <input class="input" type="date" name="dob" required>
        <br>



        <label for="course">Course</label><br>
        <select class="input" id="course" name="course">
        <?php
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    echo "<td>" . $row["name"]. "</td><option value=". $row["name"].">" . $row["name"]. "</option>";
                }
            }
        ?>
        </select>

        <br>
        <label for="joiningyear">Joining Year</label>
        <input class="input" type="number" name="joiningyear" min="1995" max="2100" step="1" placeholder="YYYY" required>
        <br>
        <textarea class="input" name="address" rows="4" placeholder="Enter your address" required></textarea>
        <br>
        <input class="input" type="password" name="password" placeholder="Enter your password" required>
        <br>
        <center>
        <input class="btn" type="submit" value="Register"><br><br>
        <a href="login.php">Already Registered? <span class="theamcolor">Login here</span></a>
    </center>
    </form>
</center>
    

</body>

</html>