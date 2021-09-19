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

        <form name="myform" action="updatepro.php" method="post">
            <center>
                <br>
                <b>idCustomer :</b>
                <input type="text" name="idCustomer" value="<?php echo $row["idCustomer"]; ?>">
                <br>
                <br>
                <b>Nama Penyewa :</b>
                <input type="text" name="name" value="<?php echo $row["NamaPenyewa"]; ?>">
                <br>
                <br>
                <b>No Telefon:</b>
                <input type="text" name="noTelefon" value="<?php echo $row["NoTelefon"]; ?>">
                <br>
                <br>
                <b>Email :</b>
                <input type="email" name="email" value="<?php echo $row["Email"]; ?>">
                <br>
                <br>
                <b>No IC :</b>
                <input type="text" name="noIC" value="<?php echo $row["NoIC"]; ?>">
                <br>
                <br>
                <b>Alamat :</b>
                <input type="text" name="alamat" value="<?php echo $row["Alamat"]; ?>">

            </center>
            <br>
            <center>
                <input type="submit" value="Update" style="background-color:PaleGreen;font-size: 15px;" />
                <input type="hidden" name="idCustomer" value="<?php echo $row["idCustomer"]; ?>" />
            </center>
        </form>
    </center>
</body>

</html>