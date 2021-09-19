<?php
session_start();
require '../connection.php';




$id_ibubapa =  $_POST["id_ibubapa"];
$username =  $_POST["username"];
$password =  $_POST["password"];
$alamat =  $_POST["alamat"];
$no_telefon =  $_POST["no_telefon"];


//error checking

if ($id_ibubapa == "") {
    echo "<script>alert('Please Enter idibubapa');window.location='index.php'</script>";
}
if ($username == "") {
    echo "<script>alert('Please Enter username ');window.location='index.php'</script>";
}

if ($password == "") {

    echo "<script>alert('Please Enter password');window.location='index.php'</script>";
}
if ($alamat == "") {

    echo "<script>alert('Please Enter alamat');window.location='index.php'</script>";
}
if ($no_telefon == "") {

    echo "<script>alert('Please Enter notelefon');window.location='index.php'</script>";
}
$sql = "INSERT INTO ibubapa(id_ibubapa,username,password,alamat,no_telefon)VALUES('$idibubapa','$username','$password','$alamat','$no_telefon')";

if ($conn->query($sql) === TRUE) { //true --->successfully
    echo "<script>alert('Register Add Successfully');window.location='Index.php'</script>";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
