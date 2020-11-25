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
    <!-- Header -->
    <?php include 'navbar.php' ?>
    <!-- tampilan 1 -->
    <div class="register2">
        <div class="kotakk">
            <h4>Data Akun</h4>
            <ul class="data">
                <li class="biodata">
                    <form method="post" action="dashboard/update">
                        <input type="hidden" name="username" value=<?= $user->username; ?>>
                        <table class="bio">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="name" value=<?= $user->nama ?>></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="email" value=<?= $user->email; ?>></td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="instagram" value=<?= $user->instagram; ?>></td>

                                </tr>
                                <tr>
                                    <td>Nomor HP</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="nohp" value=<?= $user->no_hp; ?>></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="update" value="Update"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </li>
            </ul>
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