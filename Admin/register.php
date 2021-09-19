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
        <br>Nama Programmer :<a href="admin/">Admin(Aliff)</a>

        <h2>Register Guru</h2>

        <form action="save.php" method="post">

            <table align="center">
                <tr>
                    <td>IdGuru :</td>
                    <td> <input type="text" name="idguru"> </td>
                </tr>
                <tr>
                    <td>Nama Penuh :</td>
                    <td> <input type="text" name="fullname"> </td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td> <input type="text" name="password"> </td>
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