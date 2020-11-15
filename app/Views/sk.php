<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Go Promote</title>
	<script src="https://kit.fontawesome.com/a2c3b56892.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../CSS/nvbar2.css">
	<link rel="stylesheet" href="../CSS/sk.css">
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
			<li>
				<?php if ($cek == false) : ?>
					<div class="in">
						<a href="loginadmin.php" class="inti">Admin</a>
					</div>
				<?php endif; ?>
			</li>
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
			<?php if ($cek == true) : ?>
				<li>
					<div class="loggin"><a href="profil.php" class="login"><?= $_SESSION["username"] ?></a></div>
				</li>
				<li>
					<div class="register"><a href="logout.php" class="regis inti">Logout</a></div>
				</li>
			<?php else : ?>
				<li>
					<div class="loggin"><a href="login.php" class="login">Login</a></div>
				</li>
				<li>
					<div class="register"><a href="register.php" class="regis inti">Register</a></div>
				</li>
			<?php endif; ?>
		</ul>
		</div>
	</header>
	<div class="sk">
		<br><br><br>
		<h1> Ketentuan Paid Promote Manager </h1><br>
		<div class="p1">
			<p>Paid Promote Manager (PPM) merupakan salah satu penyedia jasa paid promote termurah di Indonesia.PPM memiliki 100 akun aktif dengan followers lebih dari 70.000 orang. PPM juga menyediakan metode pembayaran yang bervariasi yang tentunya memudahkan anda untuk bertransaksi</p>
		</div><br>
		<div class="syarat">
			<h3>Syarat Paid Promote</h3><br>
		</div>
		<ol>
			<li><i class="fas fa-circle"></i> Produk atau jasa tidak mengandung unsur yang menyinggung SARA dan/atau melanggar ketentuan yang berlaku </li>
			<li><i class="fas fa-circle"></i> Produk atau jasa yang diiklankan tidak bersifat penipuan, pornografi, MLM, dan sejenisnya</li>
			<li><i class="fas fa-circle"></i> Produk atau jasa yang diiklankan harus sesuai dengan ketentuan dan disetujui oleh pihak kami</li>
		</ol>
		<br>
		<div class="ketentuan">
			<h3>Ketentuan Paid Promote</h3><br>
		</div>
		</ol>
		<ol>
			<li><i class="fas fa-circle"></i> Pengiklan melakukan Log in pada website lalu memilih paket yang tersedia</li>
			<li><i class="fas fa-circle"></i> Mengirimkan poster, artikel, dan gambar ke surel ppm2020@gmail.com(maksimal H-3 sebelum dipost)</li>
			<li><i class="fas fa-circle"></i> Melakukan pembayaran lau pengiklan akan menerima bukti screenshot dan link berita saat iklan sudah diposting </li>
		</ol>
		<br>
		<div class="paket">
			<h3>Paket Paid Promote</h3><br>
		</div>
		<ol>
			<li>Paket Bronze</li>
			<ul>
				<li><i class="fas fa-circle"></i> 1 Day Keep</li>
				<li><i class="fas fa-circle"></i> 1x Feed</li>
				<li><i class="fas fa-circle"></i> 2x Instastory</li>
				<li><i class="fas fa-circle"></i> Rp. 15.000</li>
			</ul><br>
			<li>Paket Silver</li>
			<ul>
				<li><i class="fas fa-circle"></i> 2 Day Keep</li>
				<li><i class="fas fa-circle"></i> 1x Feed</li>
				<li><i class="fas fa-circle"></i> 2x Instastory</li>
				<li><i class="fas fa-circle"></i> Rp 25.000</li>
			</ul><br>
			<li>Paket Gold</li>
			<ul>
				<li><i class="fas fa-circle"></i> 5 Day Keep</li>
				<li><i class="fas fa-circle"></i> 2x Feed</li>
				<li><i class="fas fa-circle"></i> 4x Instastory</li>
				<li><i class="fas fa-circle"></i> Rp 50.000</li>
			</ul><br>
			<li>Paket Platinum</li>
			<ul>
				<li><i class="fas fa-circle"></i> 7 Day Keep</li>
				<li><i class="fas fa-circle"></i> 3x Feed</li>
				<li><i class="fas fa-circle"></i> 5x Instastory</li>
				<li><i class="fas fa-circle"></i> Rp 60.000</li>
			</ul><br>
		</ol>
	</div>
	<!-- Footer -->
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
	<!-- Akhir Footer -->

	<!-- Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>