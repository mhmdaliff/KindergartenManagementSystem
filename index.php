<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMS</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <center>
        <h2>Login</h2>
        <form action="/action_page.php" method="post">

            <div class="container">
                <tr>
                    <td><label for="uname"><b>Username</b></label></td>
                    <td><input type="text" placeholder="Enter Username" name="uname" required></td>
                </tr>

                <br>
                <br>

                <tr>
                    <td><label for="psw"><b>Password</b></label></td>
                    <td><input type="password" placeholder="Enter Password" name="psw" required></td>
                </tr>

                <br>
                <br>

                <button type="submit">Login</button>

            </div>
        </form>

        <hr>

        <h2>System Name : Kindergarden Management System (KMS)</h2>

        <a href="Admin">Admin : Aliff </a><br>
        -Mengurus senarai guru <br>
        -Lihat senarai ibu bapa dan anak
        <br>
        <br>

        <a href="Guru">Guru : Syifa </a><br>
        -Mengurus senarai ibubapa<br>
        -Melihat senarai anak-anak di dalam kelas
        <br>
        <br>


        <a href="Ibubapa">Ibubapa : Mahaya </a> <br>
        -Mengurus senarai anak-anak<br>
        -Melihat butiran diri guru<br>
        <br>
        <br>


        <hr>

        <br>
        <h3>DATABASE : KMS</h3>
        Table 1 : Admin<br>
        password<br>
        <br>
        Table 2 : Guru<br>
        idguru, email, password, nama_guru, ic_guru, nofone_guru,<br>
        <br>
        Table 3 : Ibubapa<br>
        idIbubapa, email, password, nama_ibubapa, ic_ibubapa, alamat, nofone <br>
        <br>
        Table 4 : Anakanak<br>
        idanak, idIbubapa, nama, nama_kelas, no_mykid<br>

        <hr>

        <h2>TABLE : ADMIN</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Extra</th>
            </tr>
            <tr>
                <td>password</td>
                <td>varchar(250)</td>
                <td></td>
            </tr>

        </table>
</body>

<h2>TABLE : GURU </h2>
<table>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Extra</th>
    </tr>
    <tr>
        <td>idguru</td>
        <td>int</td>
        <td>PK A_I</td>
    </tr>
    <tr>
        <td>email</td>
        <td>varchar(30)</td>
        <td>unik</td>
    </tr>
    <tr>
        <td>password</td>
        <td>varchar(250)</td>
        <td></td>
    </tr>
    <tr>
        <td>nama_guru</td>
        <td>text</td>
        <td></td>
    </tr>
    <tr>
        <td>ic_guru</td>
        <td>varchar(15)</td>
        <td></td>
    </tr>
    <tr>
        <td>nofone_guru</td>
        <td>varchar(11)</td>
        <td></td>
    </tr>

</table>
</body>

<h2>TABLE : IBUBAPA </h2>
<table>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Extra</th>
    </tr>
    <tr>
        <td>idIbubapa</td>
        <td>int</td>
        <td>PK A_I</td>
    </tr>
    <tr>
        <td>email</td>
        <td>varchar(30)</td>
        <td>unik</td>
    </tr>
    <tr>
        <td>password</td>
        <td>varchar(250)</td>
        <td></td>
    </tr>
    <tr>
        <td>nama_ibubapa</td>
        <td>text</td>
        <td></td>
    </tr>
    <tr>
        <td>ic_ibubapa</td>
        <td>varchar(15)</td>
        <td></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td>varchar(100)</td>
        <td></td>
    </tr>
    <tr>
        <td>nofone</td>
        <td>varchar(11)</td>
        <td></td>
    </tr>

</table>
</body>

<h2>TABLE : ANAKANAK </h2>
<table>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Extra</th>
    </tr>
    <tr>
    <tr>
        <td>idIbubapa</td>
        <td>int</td>
        <td>PK A_I</td>
    </tr>
    <tr>
        <td>nama</td>
        <td>text</td>
        <td></td>
    </tr>
    <tr>
        <td>nama_kelas</td>
        <td>varchar(10)</td>
        <td></td>
    </tr>
    <tr>
        <td>no_mykid</td>
        <td>varchar(15)</td>
        <td></td>
    </tr>

</table>
</center>
</body>

</html>