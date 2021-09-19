<?php  
session_start();  
require '../connection.php';  
  
$idguru=$_POST["idguru"];
$idname=$_POST["idname"];
$password=$_POST["password"];

$sql = "UPDATE guru SET idguru='$idguru',idname='$idname',password='$password' where idguru='$idguru'";  
  
if($conn->query($sql)=== TRUE){
  echo "<script>alert('Update Successfully');window.location='index.php'</script>";  
}  
else{  
 echo "Error:". $sql."<br>".$conn->error;  
}  
$conn->close();
