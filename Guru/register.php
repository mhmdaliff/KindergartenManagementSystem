<?php
session_start();
require '../connection.php';
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

        <h2>Register Ibubapa</h2>

        <form action="save.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea id="address" name="address" rows="4" cols="50" value=""></textarea></td>
                </tr>
                <tr>
                    <td>No. Telefon</td>
                    <td><input type="text" name="contact" value=""></td>
                </tr>
                <tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="Add" />
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>