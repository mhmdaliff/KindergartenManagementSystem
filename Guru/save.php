<?php
session_start();
require '../connection.php';

$sql = "SELECT * FROM ibubapa";
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
        <br>Nama Programmer :<a href="guru/">Guru(Amin)</a>
        <br>
        <table border="1">
            <tr>
            <th>Username</th>
                    <th>Nama Penuh</th>
                    <th>Alamat</th>
                    <th>No. Telefon</th>
                    <th>Password</th>
                    <th>Tindakan</th>

            </tr>

            <?php
            if (mysqli_num_rows($result) > 0) {


                while ($row = mysqli_fetch_assoc($result)) {
            ?>

                    <tr>
                        
                    <td><?php echo $row["idibubapa"]; ?></td>
                            <td><?php echo $row["idname"]; ?></td>
                            <td><?php echo $row["password"]; ?></td>
                            <td><?php echo $row["alamat"]; ?></td>
                            <td><?php echo $row["notelefon"]; ?></td>
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