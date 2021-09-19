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
    <title>KMS -Ibubapa</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <center>
        <h2>System Name : Kindergarden Management System(KMS)</h2><br>
        <br>Nama Programmer :<a href="ibubapa/">Ibubapa(Merisa)</a>

        <h1>Daftar senarai anak-anak</h1>
        <form method="post" action="save.php">
            <table>
                <tr>
                    <td>Id anak</td>
                    <td><input type="text" name="idanak"></td>
                </tr>
                <tr>
                    <td>Nama Penuh</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="text" name="age"></td>
                </tr>
                <tr>
                    <td>No.Ic</td>
                    <td><input type="text" name="noic" value="" ></td>
                </tr>
            
                <tr>
                    <td><button type="submit">Simpan</button></td>
                </tr>
                <table border="1">
                    <tr>
                       
                        <th>Nama Penuh</th>
                        <th>Umur</th>
                        <th>No. Ic</th>

                    </tr>
                    <?php
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $row["idanak"]; ?></td>
                                <td><?php echo $row["username"]; ?></td>
                                <td><?php echo $row["age"]; ?></td>
                                <td><?php echo $row["noic"]; ?></td>
                                <td colspan="2">
                                <a href="updateanak.php?idanak=<?php echo $row["idanak"]; ?>">Update</a>
                                <a href="deleteanak.php?idanak=<?php echo $row["idanak"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
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