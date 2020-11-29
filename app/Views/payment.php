<?php
include "function.php";
session_start();
$usern = $_SESSION['username'];
if(!isset($usern)){
    header("Location: login.php");
}

if (isset($_POST["beli"])) {
    $paket = $_POST['paket'];
    if ($paket == "bronze") {
        $npaket = 1;
    } else if ($paket == "silver") {
        $npaket = 2;
    } else if ($paket == "platinum") {
        $npaket = 4;
    } else if ($paket == "gold") {
        $npaket = 3;
    }

    $metodep = $_POST['metodep'];
    $tglpp = $_POST['tglpp'];

    $tambah = mysqli_query($conn, "INSERT INTO payment (id_paket, metode, tgl_pp, tanggal_transaksi, id_pembeli, id_admin) 
                              VALUES ('$npaket','$metodep','$tglpp', CURDATE(), '$usern', 'riansyah22')");

    if ($tambah) {
        echo "<script>
        alert('Berhasil Membeli');
        document.location.href = 'profil.php';
        </script>";
    } else {
        echo "<p align='center'>Pembelian Gagal </p>";
        echo "<meta http-equiv='refresh' content='2; url=payment.php'>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" media="all" rel="stylsheet" type="text/css">
    <script src="https://kit.fontawesome.com/a2c3b56892.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap">
    <link rel="preload" href="https://fonts.gstatic.com/s/worksans/v5/QGYsz_wNahGAdqQ43Rh_fKDptfpA4Q.woff2" as="font">
    <link rel="preload" href="https://fonts.gstatic.com/s/worksans/v5/QGYpz_wNahGAdqQ43Rh3x4X8mNhNy_r-Kw.woff2" as="font">
    <!-- END CSS -->
    <title>GoPromote</title>
</head>

<body>
    <h2>
        <div class="kotak"></div>
    </h2>
    <header>
        <a href="index.php" class="Logo"><img src="../IMAGE/logo.png" alt=""></a>
        <ul class="satu">
            <li>
                <div class="home in"><a href="index.php" class="inti">Home</a></div>
            </li>
            <li>
                <div class="in"><a href="index.php#produk" class="inti">Product</a></div>
            </li>
            <li>
                <div class="in"><a href="index.php#review" class="inti">Testimoni</a></div>
            </li>
            <!-- <li>
                <div class="in"><a href="loginadmin.php" class="inti">Admin</a></div>
            </li> -->
            <li>
                <div class="in"><a href="#bawah" class="inti">Contact</a></div>
            </li>
            <li>
                <div class="topdetil"><a href="#" class="detil">Detail</a>
                    <i class="fas fa-chevron-down"></i>
                    <ul class="intinya">
                        <div>
                            <li><a href="sk.php">Syarat & ketentuan</a></li>
                        </div>
                        <div>
                            <li><a href="pembuat.php">Biodata Pembuat</a></li>
                        </div>
                    </ul>
                </div>
            </li>
        </ul>
        <ul>
            <li><?= $_SESSION["username"] ?></li>
            <li>
                <div class="register"><a href="logout.php" class="regis inti">Logout</a></div>
            </li>
        </ul>
        </div>
    </header>

    <!-- tampilan 1 -->
    <div class="payment">
        <div class="kotakk">
            <h4>Form Pembelian</h4>
            <h5>Halo,
                <?php
                $nama = $_SESSION['username'];
                echo $nama;
                ?>
            </h5>
            <form class="ff" method="post" action="">
                <label class="jdll" for="paket">Pilihan Paket</label>
                <select name="paket" id="paket">
                    <option value="bronze">Bronze</option>
                    <option value="silver">Silver</option>
                    <option value="gold">Gold</option>
                    <option value="platinum">Platinum</option>
                </select>

                <label for="metodep">Metode Pembayaran</label>
                <select name="metodep" id="metodep">
                    <option value="gopay">GoPay</option>
                    <option value="ovo">OVO</option>
                    <option value="linkaja">LinkAja</option>
                    <option value="dana">Dana</option>
                </select>

                <label for="tglpp">Tanggal Paid Promote</label>
                <input type="date" name="tglpp" required>

                <input type="submit" value="Beli" name="beli">
            </form>
        </div>
    </div>


    <!-- Bagian bawah -->
    <footer class="bawah" id="bawah">
        <div class="container2">
            <div class="foto"><a href="pembuat.php">
                    <p>Our Team</p>
                    <div class="fotori">
                        <h3>Rian Febriansyah</h3>
                    </div>
                    <div class="fotorz">
                        <h3>Rizal Herliansyah Hidayat</h3>
                    </div>
                    <div class="fotoid">
                        <h3>Indra Kurniawan</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="middle">
                <a class="btn" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="btn" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="btn" href="#">
                    <i class="fab fa-google"></i>
                </a>
                <a class="btn" href="#">
                    <i class="fab fa-line"></i>
                </a>
                <br>
                <p>@ 2020 - All right reserved</p>
            </div>
        </div>
    </footer>
    <!-- Script -->
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var h2 = document.querySelector("h2");
            h2.classList.toggle("hdua", window.scrollY > 0);
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>