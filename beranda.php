<?php
include("koneksi.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Beranda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
    <div class="containerr">
        <header>
            <nav class="navbar">
                <div class="logo">PeSaT</div>
                <ul class="nav-list">
                    <li><a href="keranjang.php">Keranjang</a></li>
                    <li><a href="Info.php">Tentang</a></li>
                    <li><a href="loginn.php">Login</a></li>
                    <li><i class='bx bxs-sun bx-spin' id="dark-mode-toggle" style='color:#6616d0; font-size:x-large'></i></li>
                </ul>
                <ul class="nav-list1">
                    <li> <i class='bx bxs-cart-alt' onclick="window.location.href='keranjang.php'" style='color:#6616d0; font-size:x-large'></i></li>
                    <li><i class='bx bxs-info-circle' onclick="window.location.href='Info.php'" style='color:#6616d0; font-size:x-large'></i></li>
                    <li><i class='bx bxs-user-circle' onclick="window.location.href='loginn.php'" style='color:#6616d0; font-size:x-large'></i></li>
                    <li><i class='bx bxs-sun bx-spin' id="dark-mode-toggle" style='color:#6616d0; font-size:x-large'></i></li>

                </ul>
            </nav>

        </header>
        <div class="text-in-image">
            <img src="./img/Makanan-Khas-Daerah-tiap-Provinsi-di-Indonesia-Serta-Daerah-Asalnya.jpg" alt="">
            <div class="kalimat">
                <p>Selamat datang di Aplikasi Pemesanan Makanan</p>
                <a class="button" href="#menu">Klik disini</a>
            </div>
        </div>

        <div class="Menu" id="menu">
            <p>Pilih Kategori Disini</p>
        </div>
        <div class="Kategori">
            <div onclick="window.location.href='Menu.php'" class="bulaaatbes">
                <div class="bulaaatkec">
                    <img src="./img/makanan.png" alt="">
                </div>
            </div>
            <div onclick="window.location.href='Bahan.php'" class="bulaaatbes">
                <div class="bulaaatkec">
                    <img src="./img/bahan.png" alt="">
                </div>
            </div>
            <div onclick="window.location.href='Mitra.php'" class="bulaaatbes">
                <div class="bulaaatkec">
                    <img src="./img/add-friend_3893109.png" alt="">
                </div>
            </div>
        </div>
        <div class="namakategori">
            <p>Food Calls</p>
            <p>Food Stall</p>
            <p>kemitraan</p>
        </div>
        <div class="bar">
            <marquee behavior="" direction="">Note : Website ini dibikin sepenuhnya tanpa boostrap dan menggunakan CSS murni. Mohon penilaiannya Pak🙏</marquee>
        </div>
    </div>

    <!--------------------------------------- Footer Section --------------------------------------->
    <footer class="footer_section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="beranda.php" class="footer__logo">
                    <i class="ri-leaf-line footer__logo-icon"></i> PeSaT
                </a>

                <h3 class="footer__title">
                    Subscribe to mendapatkan informasi yang terbaru<br> jangan lupa tekan yaa
                </h3>

                <div class="footer__subscribe">
                    <input type="email" placeholder="Enter your email" class="footer__input">

                    <button class="buttons button--flex footer__button">
                        Subscribe
                    </button>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Kantor</h3>

                <ul class="footer__data">
                    <li class="footer__information">Padang</li>
                    <li class="footer__information">Bukittinggi</li>
                    <li class="footer__information">Pekanbaru</li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Hubungi</h3>

                <ul class="footer__data">
                    <li class="footer__information">083801012326</li>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    Jangan Lupa Kunjungi kami yaa
                </h3>

                <div class="footer__cards">
                    <img src="img/whatsapp_2504957.png" alt="" class="footer__card">
                    <img src="img/facebook_2504903.png" alt="" class="footer__card">
                    <img src="img/instagram_2504918.png" alt="" class="footer__card">
                    <img src="img/twitter_5968830.png" alt="" class="footer__card">
                </div>
            </div>
        </div>

        <h3 class="footer__copy">ReyVrs</h3>
    </footer>
    </div>
    <!-- JavaScript -->
    <script src="script.js"></script>
</body>

</html>