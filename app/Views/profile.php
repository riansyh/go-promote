<!DOCTYPE html>
<html lang="id">

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
            <div class="cube-group row bg-white">
                <div class="col-md-1"></div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="foto-profile" id="foto-profile">
                   
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="data">
                        <li class="biodata">
                            <input type="hidden" name="username" value=<?= $user->username; ?>>
                            <table class="bio">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h4>Data Akun</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                    </tr>
                                    <tr>
                                        <td><?= $user->nama ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                    </tr>
                                    <tr>
                                        <td><?= $user->email; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Instagram</td>
                                    </tr>
                                    <tr>
                                        <td><?= $user->instagram; ?></td>

                                    </tr>
                                    <tr>
                                        <td>Nomor HP</td>
                                    </tr>
                                    <tr>
                                        <td><?= $user->no_hp; ?></td>
                                    </tr>
                                    <tr>
                                        <td><button class="input" onclick="window.location.href='/edit/<?= session()->get('username');?>'">Edit</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Bagian bawah -->
    <!-- Footer -->
    <?php include 'footer.php' ?>

    <?php $nama = "rian.jpeg"; ?>

    <!-- Script -->
    <script>document.getElementById("foto-profile").style.backgroundImage = "url('../img/<?=$nama;?>')";</script>
    <script type="text/javascript" src="../JS/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>