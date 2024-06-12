<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Mitra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styleloginmitra.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

</head>

<body>
    <div class="tombol"><a href="beranda.php">Beranda</a></div>
    <div class="form">
        <div class="gambar"><img src="./img/add-friend_3893109.png" alt=""></div>
        <div class="teks">
            <h3>Silahkan login sebagai Mitra</h3>
        </div>
        <!-- Add form tag with action and method attributes -->
        <form action="" method="post">

            <!-- Input fields -->
            <input name="nama" type="text" id="nama" placeholder="Nama">
            <input name="password" type="text" id="password" placeholder="Password">

            <!-- Login button -->
            <input name="login" type="submit" id="login" value="Login">
        </form>

        <?php
        // Your PHP code for handling form submission goes here
        if (isset($_POST["login"])) {
            // Your existing PHP code
            $sqla = mysqli_query($kon, "select * from mitra where nama='$_POST[nama]' and password='$_POST[password]'");
            $ra = mysqli_fetch_array($sqla);
            $row = mysqli_num_rows($sqla);
            if ($row > 0) {
                session_start();
                $_SESSION["namamt"] = $ra["nama"];
                $_SESSION["passwordmt"] = $ra["password"];
                echo '<div style="padding-left: 46em; padding-top: 1.5em; color:white;">Selamat Datang</div>';
                echo "<META HTTP-EQUIV='Refresh' content='1; URL=useradd.php'>";
            } else {
                echo '<div style="padding-left: 47em; padding-top: 1.5em; color:white;">Login Gagal</div>';
                echo "<META HTTP-EQUIV='Refresh' content='1; URL=login mitra.php'>";
            }
        }
        ?>
    </div>
</body>

</html>