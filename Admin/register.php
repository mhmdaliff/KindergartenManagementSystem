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
    <div class="container">
        <br><br><br>
        <div class="center">
            <h2>Kindergarten Management System</h2>
        </div>
        <center><br> Nama Programmer: Admin (Aliff)</a></center>
    </div>
    <center>
        <h2>Register Guru</h2>
    </center>
    <form action="index.php" method="post">

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
                        <input type="submit" value="Add"/>
                    </center>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>