<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                <div class="in"><a href="profile" class="info nav-item">Profile</a></div>
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
                <div class="cube-group">
                    <li class="bukti">
                        <h5 class="riwayat-pembelian">Riwayat Pembelian</h5>
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
                                <?php $no = 1; ?>
                                <?php foreach ($transaksi as $row) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $row['id_transaksi']; ?></td>
                                        <td><?= $row['paket']; ?></td>
                                        <td><?= $row['tgl_pp']; ?></td>
                                        <td><?= $row['tgl_selesai']; ?></td>
                                    </tr>
                                    <?php $no++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </li>
                    <li class="belilagi">
                        <div class="bl">
                            <a href="beli">
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