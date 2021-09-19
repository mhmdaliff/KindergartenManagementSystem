<?php
session_start();
require '../connection.php';

$sql = "SELECT * FROM guru";
$result = mysqli_query($conn, $sql);
header("location:index.php");
?>

<html>

<head>
    <title>KMS</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <center>
        <h2>System Name : Kindergarden Management System(KMS)</h2><br>
        <br>Nama Programmer :<a href="admin/">Admin(Aliff)</a>

        <br>
        <table border="1">
            <tr>
                <th>IdGuru</th>
                <th>Nama Penuh</th>
                <th>Password</th>
            </tr>

            <?php
            if (mysqli_num_rows($result) > 0) {


                while ($row = mysqli_fetch_assoc($result)) {
            ?>

                    <tr>
                        <td><?php echo $row["idguru"]; ?></td>
                        <td><?php echo $row["fullname"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                    </tr>

            <?php

                }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
            ?>

        </table>
    </center>
</body>

</html>