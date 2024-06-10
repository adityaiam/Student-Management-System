<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Student Login</title>
</head>

<body>

<?php include 'include/nav.php' ?>
    <center>
    <form action="php/login.php" class="form" method="post">
        <center><h2>Student Login</h2></center>
        <input class="input" type="email" name="email" placeholder="Enter Email" required>
        <br>
        <input class="input" type="password" name="password" placeholder="Enter your password" required>
        <br>
        <center>
            <input class="btn" type="submit" value="Login"><br><br>
            <a href="register.php">Not Registered Yet? <span class="theamcolor">Register here</span></a>
        </center>  
    </form>
</center>

</body>

</html>