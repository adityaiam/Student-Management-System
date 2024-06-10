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
        <center>
            <h2>Update Course</h2>
        </center>
        <br><br>

        <center>

            <?php
            include('php/db.php');

            $id = $_GET['id'];

            // SQL query to select all data from the student table
            $sql = "SELECT * FROM courses where id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    echo '
                    <form action="php/updatecourse.php" class="form" method="post">
                        <input class="input" type="hidden" name="id" value="' . $row["id"] . '" required>
                        <input class="input" type="text" name="name" value="' . $row["name"] . '" placeholder="Course Name" required>
                        <br>
                        <input class="input" type="text" name="head" value="' . $row["head"] . '" placeholder="Head name" required>
                        <br>
                        <input class="input" type="text" name="description" value="' . $row["description"] . '" placeholder="Course Description" required>
                        <br>
                        <center>
                            <input class="btn" type="submit" value="Update"><br><br>
                        </center>  
                    </form>
                    ';
                }
            }
            $conn->close();
            ?>









        </center>








    </div>
</body>

</html>