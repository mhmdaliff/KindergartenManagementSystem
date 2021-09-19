<?php 
require '../connection.php'; 
 
$idanak = $_GET['idanak']; 
 
$deleteusr = "DELETE FROM anak WHERE idanak='$idanak'"; 
$resultdelete -= $conn->query($deleteusr); 
 
?> 
 
<script> 
    window.location = "index.php"; 
</script>