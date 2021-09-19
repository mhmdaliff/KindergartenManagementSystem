<?php 
require '../connection.php'; 
 
$idguru = $_GET['idguru']; 
 
$deleteusr = "DELETE FROM guru WHERE idguru='$idguru'"; 
$resultdelete -= $conn->query($deleteusr); 
 
?> 
 
<script> 
    window.location = "index.php"; 
</script>