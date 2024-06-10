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
    <center><h2>Add new Course</h2></center>

    <a class='btn2' href="courses.php">View Courses</a>
<br><br>

    
<center>
    <form action="php/addcourse.php" class="form" method="post">
        <input class="input" type="text" name="name" placeholder="Course Name" required>
        <br>
        <input class="input" type="text" name="head" placeholder="Head name" required>
        <br>
        <textarea class="input" name="description" rows="4" placeholder="Course Description" required></textarea>
        <br>
        <center>
            <input class="btn" type="submit" value="Add"><br><br>
        </center>  
    </form>
</center>








    </div>
</body>
</html>