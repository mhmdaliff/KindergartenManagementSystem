<?php
session_start();
require '../connection.php';

$sql = "SELECT * FROM guru";
$result = mysqli_query($conn, $sql);
header("location:index.php");

if (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_assoc($result)) {
?>

        <tr>
            <td><?php echo $row["idguru"]; ?></td>
            <td><?php echo $row["idname"]; ?></td>
            <td><?php echo $row["password"]; ?></td>
        </tr>

<?php

    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>