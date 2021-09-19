<?php
session_start();
require '../connection.php';

$idguru = $_POST["idguru"];
$idname = $_POST["idname"];
$password = $_POST["password"];

//error checking

if ($idguru == "") {
    echo "<script>alert('Please Enter idguru');window.location='index.php'</script>";
}
if ($idname == "") {
    echo "<script>alert('Please Enter idname ');window.location='index.php'</script>";
}

if ($password == "") {

    echo "<script>alert('Please Enter password');window.location='index.php'</script>";
}

$sql = "INSERT INTO guru(idguru,idname,password)VALUES('$idguru','$idname','$password')";

if ($conn->query($sql) === TRUE) { //true --->successfully
    echo "<script>alert('Register Add Successfully');window.location='Index.php'</script>";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
