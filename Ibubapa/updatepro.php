<?php  
session_start();  
require '../connection.php';  
  
$idguru=$_POST["idanak"];
$username=$_POST["username"];
$age=$_POST["age"];
$noic=$_POST["noic"];

$sql = "UPDATE anak SET idanak='$idanak',username='$username',age='$age',noic='$noic' where idanak='$idanak'";  
  
if($conn->query($sql)=== TRUE){
  echo "<script>alert('Update Successfully');window.location='index.php'</script>";  
}  
else{  
 echo "Error:". $sql."<br>".$conn->error;  
}  
$conn->close();