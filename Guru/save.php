<?php
session_start();
require '../connection.php';


$idibubapa =  $_POST["idibubapa"];
$idname =  $_POST["idname"];
$alamat =  $_POST["alamat"];
$notelefon =  $_POST["notelefon"];



//error checking

if ($idibubapa == "") {
    echo "<script>alert('Please Enter idibubapa');window.location='index.php'</script>";
}
if ($idname == "") {
    echo "<script>alert('Please Enter idname ');window.location='index.php'</script>";
}

if ($alamat == "") {

    echo "<script>alert('Please Enter alamat');window.location='index.php'</script>";
}
if ($notelefon == "") {

    echo "<script>alert('Please Enter notelefon');window.location='index.php'</script>";
}
$sql = "INSERT INTO ibubapa(idibubapa,idname,alamat,notelefon)VALUES('$iibubapa','$idname','$alamat','$notelefon')";

if ($conn->query($sql) === TRUE) { //true --->successfully
    echo "<script>alert('Register Add Successfully');window.location='Index.php'</script>";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
