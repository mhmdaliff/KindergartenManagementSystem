<?php
session_start();
require '../connection.php';

$idusr = $_GET["idguru"];
$dis_usr = "SELECT * FROM guru WHERE idguru='$idusr'";
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
        <br>Nama Programmer :<a href="admin/">Admin(Aliff)</a>

        <h2>Update Guru</h2>

        <form action="updatepro.php" method="post">
            <br>
            <b>Id Guru :</b>
            <input type="text" name="idguru" value="<?php echo $row["idguru"]; ?>">
            <br>
            <br>
            <b>Nama Penuh :</b>
            <input type="text" name="idname" value="<?php echo $row["idname"]; ?>">
            <br>
            <br>
            <b>Password:</b>
            <input type="text" name="password" value="<?php echo $row["password"]; ?>">
            <br>

            <input type="submit" value="Update" />
            <input type="hidden" name="idguru" value="<?php echo $row["idguru"]; ?>" />
        </form>
    </center>
</body>

</html>