<!DOCTYPE html>
<html lang="id" data-theme=''>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css" media="all" rel="stylsheet" type="text/css">
    <script src="https://kit.fontawesome.com/a2c3b56892.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap">
    <link rel="preload" href="https://fonts.gstatic.com/s/worksans/v5/QGYsz_wNahGAdqQ43Rh_fKDptfpA4Q.woff2" as="font">
    <link rel="preload" href="https://fonts.gstatic.com/s/worksans/v5/QGYpz_wNahGAdqQ43Rh3x4X8mNhNy_r-Kw.woff2" as="font">
    <!-- END CSS -->
    <title>GoPromote</title>
</head>

<body>
    <!-- Header -->
    <?php include 'navbar.php' ?>

    <!-- tampilan 1 -->
    <div class="container">
        <div class="register2">
            <div class="cube-group row frame-color cube-shadow tinggi-min">
                <div class="col-md-12">
                    <h1 class="color-text-black">Detail Transaksi</h1>
                    <p class="center color-text-black">ID: <?= $transaksi->id_transaksi; ?></p>
                </div>
                <div class="col-md-12">
                    <ul class="data">
                        <li class="biodata">
                            <table class="detail">
                                <tbody>
                                    <tr>
                                        <td class="color-text-black">Username Akun</td>
                                        <td class="color-text-black">: <?= $transaksi->username; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="color-text-black">Email</td>
                                        <td class="color-text-black">: <?= $user->email; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="color-text-black">Nomor HP</td>
                                        <td class="color-text-black">: <?= $user->no_hp; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="color-text-black">Instagram</td>
                                        <td class="color-text-black">: <?= $user->instagram; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="color-text-black">Tanggal Transaksi</td>
                                        <td class="color-text-black">: <?= $transaksi->tgl_transaksi; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="color-text-black">Metode Pembayaran</td>
                                        <td class="color-text-black">: <?= $transaksi->metode; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="input button-center" onclick="window.location.href='../admin'">Kembali</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Bagian bawah -->
    <!-- Footer -->
    <?php include 'footer.php' ?>

    <!-- Script -->

    <script type="text/javascript" src="../JS/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>