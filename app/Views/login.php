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
				<li>
					<div class="loggin"><a href="/login" class="login">Login</a></div>
				</li>
				<li>
					<div class="register"><a href="register" class="regis inti">Register</a></div>
				</li>
			</ul>
	</div>
	</header>
	</div>
	<main>
		<div class="container">
			<div class="register-box">
				<h3>Login</h3>

				<?php if (session()->get('success')) : ?>
					<div class="" role="alert">
						<?= session()->get('success') ?>
					</div>
				<?php endif; ?>

				<form class="form" method="post" action="">
					<label for="username">Username</label>
					<input type="text" name="username" required autocomplete="off" value="<?= get_cookie('username') ?>">

					<label for="password">Password</label>
					<input type="password" name="password" required autocomplete="off">

					<input type="checkbox" name="remember" id="remember">
					<label for="remember">Remember Me!</label>

					<?php if (isset($validation)) : ?>
						<div class="col-12">
							<div class="">
								<?= $validation->ListErrors() ?>
							</div>
						</div>
					<?php endif; ?>

					<input type="submit" name="submit" value="Login">
				</form>
				<div class="dont-have">
					<a href="/register">Don't Have Account?</a>
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