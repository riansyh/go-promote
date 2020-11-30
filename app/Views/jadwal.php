<!DOCTYPE html>
<html lang="id" data-theme=''>

<head>
    <meta charset="UTF-8">
    <title>Paid Promote Manager</title>
    <script src="https://kit.fontawesome.com/a2c3b56892.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/navbr.css">
    <link rel="stylesheet" href="../CSS/jadwal.css">
    <link rel="stylesheet" type="text/css" href="../CSS/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap">
    <link rel="preload" href="https://fonts.gstatic.com/s/worksans/v5/QGYsz_wNahGAdqQ43Rh_fKDptfpA4Q.woff2" as="font">
    <link rel="preload" href="https://fonts.gstatic.com/s/worksans/v5/QGYpz_wNahGAdqQ43Rh3x4X8mNhNy_r-Kw.woff2" as="font">
    <link rel="stylesheet" href="../CSS/font.css">
</head>

<body>
    <h2>
        <div class="kotak"></div>
    </h2>
    <header>
        <a href="#" class="Logo"><img src="../IMAGE/logo.png" alt=""></a>
        <ul class="satu">
            <li>
                <div class="loggin"><a href="jadwal.php">Jadwal</a></div>
            </li>
            <li>
                <div class="loggin"><a href="pembeli.php">Daftar Pembeli</a></div>
            </li>
            <li>
                <div class="register"><a href="logout.php" class="regis inti">Logout</a></div>
            </li>
        </ul>
        </div>
    </header>

    <!-- tampilan 1 -->
    <h1 class="jdwl">Jadwal Paid Promote</h1>
    <div class="jadwalpp">
        <table class="jadwall">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Olshop</th>
                    <th>Instagram</th>
                    <th>Paket</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Keterangan</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($user_data = mysqli_fetch_array($result)) {
                    $no++;
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $user_data['nama'] . "</td>";
                    echo "<td>" . $user_data['instagram'] . "</td>";
                    echo "<td>" . $user_data['paket'] . "</td>";
                    echo "<td>" . $user_data['tanggal_mulai'] . "</td>";
                    echo "<td>" . $user_data['tanggal_selesai'] . "</td>";
                    echo "<td>" . $user_data['Keterangan'] . "</td>";
                    echo "<td><a href='Selesai.php?id_payment=$user_data[id_payment]'>Selesai</a> | <a href='delete.php?id_payment=$user_data[id_payment]'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
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