<?php
session_start();
require '../connection.php';

$sql = "SELECT * FROM ibubapa";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMS - Guru</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <center>
        <h2>System Name : Kindergarden Management System(KMS)</h2><br>
        <br>Nama Programmer :<a href="guru/">Guru(Amin)</a>

        <h1>Daftar senarai ibubapa</h1>
        <form method="post" action="save.php">
            <table>
                <tr>
                    <td>Id ibubapa</td>
                    <td><input type="text" name="idibubapa"></td>
                </tr>
                <tr>
                    <td>Nama Penuh</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="int" name="password"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea id="address" name="alamat" rows="4" cols="50" value=""></textarea></td>
                </tr>
                <tr>
                    <td>No. Telefon</td>
                    <td><input type="text" name="notelefon" value="" ></td>
                </tr>
            
                <tr>
                    <td><button type="submit">Simpan</button></td>
                </tr>
                <table border="1">
                    <tr>
                        <thi>idibubapa</th>
                        <th>Nama Penuh</th>
                        <th>Password</th>
                        <th>Alamat</th>
                        <th>No. Telefon</th>

                    </tr>
                    <?php
                    if (mysqli_num_rows($result) > 0) {


                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $row["id_ibubapa"]; ?></td>
                                <td><?php echo $row["username"]; ?></td>
                                <td><?php echo $row["password"]; ?></td>
                                <td><?php echo $row["alamat"]; ?></td>
                                <td><?php echo $row["no_telefon"]; ?></td>
                                
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