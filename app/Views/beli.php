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
            <div class="cube-group center-manual">
                <ul class="data">
                    <li class="pembelian frame-color">
                        <form method="post" action="/Transaksi/beli" enctype="multipart/form-data">
                            <h1 class="color-text-black">Beli Paket</h1>
                            <table class="beli-table">
                                <tbody>
                                    <tr>
                                        <td class="color-text-black">Paket</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="paket" id="paket" required>
                                                <option value="1">Bronze</option>
                                                <option value="2">Silver</option>
                                                <option value="3">Gold</option>
                                                <option value="4">Platinum</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="color-text-black">Jasa Desain</td>
                                    </tr>
                                    <tr>
                                        <td> <select name="desain" id="desain" required>
                                                <option value="0">Tidak</option>
                                                <option value="1">Ya</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td class="color-text-black">Konten</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="label-center">
                                                <input id="foto" type="file" name="konten" class="input-file" required>
                                                <label class="text-color-black input-button" for="foto"><i class="fas fa-upload"></i>Pilih Foto</label>
                                            </div>
                                            <div class="showname color-text-black" id="showname"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="color-text-black">Caption</td>
                                    </tr>
                                    <tr>
                                        <td><textarea name="caption" id="" cols="30" rows="10"></textarea></td>
                                    </tr>

                                    <tr>
                                        <td class="color-text-black">Tanggal Promosi</td>
                                    </tr>

                                    <tr>
                                        <td><input type="date" name="tgl_pp" required></td>
                                    </tr>
                                    <tr>
                                        <td class="color-text-black">Metode Pembayaran</td>
                                    </tr>
                                    <tr>
                                        <td> <select name="metode" id="metode" required>
                                                <option value="OVO">OVO</option>
                                                <option value="GoPay">GoPay</option>
                                                <option value="LinkAja">LinkAja</option>
                                                <option value="Dana">Dana</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="beli" value="Beli"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php' ?>

    <!-- Script -->
    <script>
        ubahFoto = document.getElementById('ubah')
        foto = document.getElementById('foto')
        showName = document.getElementById('showname')

        foto.addEventListener('change', function() {
            var p = foto.value;
            var filename = p.replace(/^.*[\\\/]/, '')
            console.log(filename)
            extension = filename.split('.').pop()
            filename = filename.slice(0, 12) + '...'
            showName.innerHTML = filename + extension
            showName.style.visibility = 'visible'
            ubahFoto.disabled = false;
        })
    </script>
    <script type="text/javascript" src="../JS/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>