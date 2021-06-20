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

        <h3>Name System : Kindergarden Management System(KMS)</h3><br>
        <br>Nama Programmer :<a href="guru/">Guru(Syifa)</a>

        <html lang="en">

        <center>
            <h1>Daftar senarai ibubapa</h1>
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


        if (!isset($_SESSION['idguru'])) {
        } else {
            $idpelanggan = $_SESSION['idguru'];
            $sql = "SELECT * FROM pelanggan WHERE idguru = $idguru";
            $row = $conn->query($sql)->fetch_object();
            $fullname = $row->nama;
        }

        ?>


        <nav style="background-color: hotpink">
            <strong style="font-size: xx-large"></strong>
            [
            <a href="index.php?menu=senarai">senarai ibubapa</a>
            |
            <a href="index.php?menu=senarai">senarai anak murid</a>
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
            Nama Guru: <?php echo $fullname; ?>
        </footer>

        </div>
</body>
</body>

</html>