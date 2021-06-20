<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>KMS</title>

</head>

<body>
    <center>

        <head>
            <style id="stndz-style"></style>
            <title>SRS</title>

            <link rel="stylesheet" href="stylesheet.css">
        </head>

        <body>

            <div data-role="page" id="page1">
                <div class="header">
                    <h1></h1>
                </div>

                <center>

                    <h3>Name System : Kindergarden Management System(KMS)</h3><br>


                    <br> Nama Programmer: <a href="ibubapa/">ibubapa (mahaya)</a>


                </center>
                <center>
                    <h1>Daftar senarai anak</h1>
                    <form action="daftar-simpan.php" method="post">
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>Nama Penuh</td>
                                <td><input type="text" name="fullname"></td>
                            </tr>
                            <tr>
                                <td><button type="submit">Simpan</button></td>
                            </tr>
                        </table>
                    </form>
                </center>
                <?php
                require '../conns.php';
                ?>


                <nav style="background-color: hotpink">
                    <strong style="font-size: xx-large"></strong>
                    [
                    <a href="index.php?menu=senarai">butiran guru</a>
                    |
                    <a href="index.php?menu=senarai">daftar anak anak</a>
                    |
                    <a href="index.php?menu=katalaluan">Kata Laluan</a>
                    |
                    <a href="../logout.php">Keluar</a>
                    ]
                </nav>

                <div>
                    <?php
                    $menu = 'senarai';
                    if (isset($_GET['menu'])) $menu = $_GET['menu'];
                    require "$menu.php";
                    ?>
                </div>

                <footer style="background-color: hotpink">
                    Nama Pelanggan: <?php echo $fullname; ?>
                </footer>

            </div>
        </body>

</html>
</center>
</body>

</html>