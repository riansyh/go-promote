<!DOCTYPE html>
<html lang="id" data-theme=''>

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
    <?php include 'navbar.php' ?>
    <main>
        <div class="container">
            <div class="register2">
                <div class="cube-group frame-color">
                    <li class="bukti">
                        <h5 class="riwayat-pembelian color-text-black">Daftar Jadwal Promosi</h5>
                        <table class="jadwall">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Payment</th>
                                    <th>Paket</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Keterangan</th>
                                    <th class="center" colspan="2">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($transaksi as $row) : ?>
                                    <tr class="color-text-black">
                                        <td><?= $no; ?></td>
                                        <td><?= $row['id_transaksi']; ?></td>
                                        <td><?= $row['paket']; ?></td>
                                        <td><?= $row['tgl_pp']; ?></td>
                                        <td><?= $row['tgl_selesai']; ?></td>
                                        <td><?= $row['status']; ?></td>
                                        <td><a href="transaksi/update/<?= $row['id_transaksi']; ?>">Selesai</a></td>
                                        <td><a href="transaksi/delete/<?= $row['id_transaksi']; ?>">Hapus</a></td>
                                    </tr>
                                    <?php $no++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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