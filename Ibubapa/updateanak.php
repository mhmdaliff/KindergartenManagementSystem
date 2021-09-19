<?php
session_start();
require '../connection.php';

$idusr = $_GET["idanak"];
$dis_usr = "SELECT * FROM anak WHERE idanak='$idusr'";
$resultusr = $conn->query($dis_usr);

$row = $resultusr->fetch_assoc();
?>
<html>

<head>
    <title>KMS</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <center>
        <h2>System Name : Kindergarden Management System(KMS)</h2><br>
        <br>Nama Programmer :<a href="admin/">Ibubapa(Meisa)</a>

        <h2>Update Anak</h2>

        <form action="updatepro.php" method="post">

            <br>
            <b>Id Anak :</b>
            <input type="text" name="idanak" value="<?php echo $row["idanak"]; ?>" readonly>
            <br>
            <br>
            <b>Nama Penuh :</b>
            <input type="text" name="username" value="<?php echo $row["username"]; ?>">
            <br>
            <br>
            <b>Umur :</b>
            <input type="text" name="age" value="<?php echo $row["age"]; ?>">
            <br>
            <b>No.Ic :</b>
            <input type="text" name="noic" value="<?php echo $row["noic"]; ?>">
            <br>

            <input type="submit" value="Update" />
            <input type="hidden" name="idanak" value="<?php echo $row["idanak"]; ?>">
        </form>
    </center>
</body>

</html>