<?php
session_start();
require '../connection.php';

$sql = "SELECT * FROM guru";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMS - Admin</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <center>
        <h2>System Name : Kindergarden Management System(KMS)</h2><br>
        <br>Nama Programmer :<a href="admin/">Admin(Aliff)</a>

        <h1>Daftar senarai Guru</h1>
        <form method="post" action="save.php">
            <table>
                <tr>
                    <td>Id Guru</td>
                    <td><input type="int" name="idguru"></td>
                </tr>
                <tr>
                    <td>Nama Penuh</td>
                    <td><input type="int" name="idname"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="int" name="password"></td>
                </tr>
                <tr>
                    <td><button type="submit">Save</button></td>
                </tr>
            </table>
            <table border="1">
                <tr>
                    <th>Id Guru</th>
                    <th>Nama Penuh</th>
                    <th>Password</th>
                    <th>Action</th> 
                </tr>
                <?php
                if (mysqli_num_rows($result) > 0) {


                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <tr>
                            <td><?php echo $row["idguru"]; ?></td>
                            <td><?php echo $row["idname"]; ?></td>
                            <td><?php echo $row["password"]; ?></td>
                            <td colspan="2">
                                <a href="updateguru.php?idguru=<?php echo $row["idguru"]; ?>">Update</a>
                                <a href="deleteguru.php?idguru=<?php echo $row["idguru"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>

                <?php

                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
                ?>

            </table>
        </form>
    </center>
</body>

</html>