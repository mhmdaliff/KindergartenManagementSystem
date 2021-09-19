<?php  
session_start();  
require '../connection.php';  
  
$idguru=$_POST["idanak"];
$username=$_POST["username"];
$password=$_POST["password"];

$sql = "UPDATE anak SET idanak='$idanak',username='$username',password='$password' where idanak='$idanak'";  
  
if($conn->query($sql)=== TRUE){
  echo "<script>alert('Update Successfully');window.location='index.php'</script>";  
}  
else{  
 echo "Error:". $sql."<br>".$conn->error;  
}  
$conn->close();