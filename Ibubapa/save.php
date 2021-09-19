<?php
session_start();
require '../connection.php';


$idanak =  $_POST["idanak"];
$username =  $_POST["username"];
$age =  $_POST["age"];
$noic =  $_POST["noic"];



//error checking

if ($idanak == "") {
    echo "<script>alert('Please Enter idanak');window.location='index.php'</script>";
}
if ($username == "") {
    echo "<script>alert('Please Enter username ');window.location='index.php'</script>";
}

if ($age == "") {

    echo "<script>alert('Please Enter Age');window.location='index.php'</script>";
}
if ($noic == "") {

    echo "<script>alert('Please Enter IC');window.location='index.php'</script>";
}
$sql = "INSERT INTO anak(idanak,username,age,noic)VALUES('$idanak','$username','$age','$noic')";

if ($conn->query($sql) === TRUE) { //true --->successfully
    echo "<script>alert('Register Add Successfully');window.location='Index.php'</script>";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();