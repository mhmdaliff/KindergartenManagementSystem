<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    isset($_POST['Username']);
    $name = $_POST['uname'];
    $psw = $_POST['psw'];


    if ($name == '') {
        echo 'Enter Username';
    } elseif ($psw == '') {
        echo 'Enter Password';
    } else {
        echo $name;
    }
    ?>
</body>

</html>