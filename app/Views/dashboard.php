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
    <div class="nav"></div>
        <header>
            <a href="/" class="Logo"><img src="img/logo.png" alt=""></a>
            <ul class="satu">
                <li>
                    <div class="home in">
                        <a href="/" class="nav-item">Home</a>
                    </div>
                </li>
                <li>
                    <div class="in">
                        <a href="/#produk" class="nav-item">Product</a>
                    </div>
                </li>
                <li>
                    <div class="in">
                        <a href="/#review" class="nav-item">Testimoni</a>
                    </div>
                </li>
                <li>
                    <div class="in">
                        <a href="/#bottom" class="nav-item">Contact</a>
                    </div>
                </li>
                <li>
                    <div class="nav-item-detail">
                        <a href="#" class="nav-detail">Detail</a>
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
                <li>
                    <div class="in"><a href="dashboard" class="info nav-item">Profile</a></div>
                </li>
                <li>
                    <div class="in"><a href="Login/logout" class="warning nav-item">Logout</a></div>
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
                                        <td>Nama</td>
                                    </tr>
                                    <tr>
                                        <td><?=  $user->nama ?></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                    </tr>
                                    <tr>
                                        <td><?= session()->get('username'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                    </tr>
                                    <tr>
                                        <td><?= $user->email ?></td>
                                    </tr>
                                    <tr>
                                        <td>Instagram</td>
                                    </tr>
                                    <tr>
                                        <td><?=  $user->instagram ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor HP</td>
                                    </tr>
                                    <tr>
                                        <td><?=  $user->no_hp ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="edit/<?= session()->get('username'); ?>">
                                <h5>Edit</h5>
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
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'footer.php' ?>

        <!-- Script -->
        <script type="text/javascript" src="../JS/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>