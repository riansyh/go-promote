<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
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
    <div class="kepala">
        <header>
            <a href="/" class="Logo"><img src="img/logo.png" alt=""></a>
            <ul class="satu">
                <li>
                    <div class="home in">
                        <a href="/" class="inti">Home</a>
                    </div>
                </li>
                <li>
                    <div class="in">
                        <a href="/#produk" class="inti">Product</a>
                    </div>
                </li>
                <li>
                    <div class="in">
                        <a href="/#review" class="inti">Testimoni</a>
                    </div>
                </li>
                <li>
                    <div class="in">
                        <a href="/#bawah" class="inti">Contact</a>
                    </div>
                </li>
                <li>
                    <div class="topdetil">
                        <a href="#" class="detil">Detail</a>
                        <i class="fas fa-chevron-down"></i>
                        <ul class="intinya">
                            <div>
                                <li><a href="#">Syarat & ketentuan</a></li>
                            </div>
                            <div>
                                <li><a href="#">Biodata Pembuat</a></li>
                            </div>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li></li>
                    <div class="loggin"><a href="#" class="login"></a></div>
                </li>
                <!-- <li><div class="register"><a href="#" class="regis inti">Logout</a></div></li> -->
                <li>
                    <div class="loggin"><a href="#" class="login">Login</a></div>
                </li>
                <li>
                    <div class="register"><a href="register.html" class="regis inti">Register</a></div>
                </li>
            </ul>
    </div>
    </header>
    </div>
    <main>
        <div class="container">
            <div class="register2">
                <div class="kotakk">
                    <h4>Data Akun</h4>
                    <ul class="data">
                        <li class="biodata">
                            <table class="bio">
                                <tbody>
                                    <tr>
                                        <td>Nama Toko</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><?= session()->get('username'); ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Instagram</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor HP</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="edit.php">
                                <h5>edit</h5>
                            </a>
                        </li>
                        <li class="bukti">
                            <h5>Riwayat Pembelian</h5>
                            <table class="jadwall">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Payment</th>
                                        <th>Paket</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </li>
                        <li class="belilagi">
                            <div class="bl">
                                <a href="payment.php">
                                    <h5>Beli Paket</h5>
                                </a>
                            </div>
                            <div class="logout">
                                <a href="Login/logout">
                                    <h5>Logout</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

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
            <div class="container1">
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
        <!-- Akhir Footer -->

        <!-- Script -->
        <script type="text/javascript" src="../JS/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>