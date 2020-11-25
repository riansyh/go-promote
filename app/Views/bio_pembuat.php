<?php
session_start();

if (!isset($_SESSION['login'])) {
	$cek = false;
} else {
	$cek = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Paid Promote Manager</title>
	<link rel="stylesheet" href="CSS/style.css">
	<script src="https://kit.fontawesome.com/a2c3b56892.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap">
	<link rel="preload" href="https://fonts.gstatic.com/s/worksans/v5/QGYsz_wNahGAdqQ43Rh_fKDptfpA4Q.woff2" as="font">
	<link rel="preload" href="https://fonts.gstatic.com/s/worksans/v5/QGYpz_wNahGAdqQ43Rh3x4X8mNhNy_r-Kw.woff2" as="font">
	<link rel="stylesheet" href="CSS/font.css">
</head>

<body>
	<div class="trans"></div>
	<h2>
		<div class="kotak"></div>
	</h2>
	<header>
		<a href="index.php" class="Logo"><img src="../IMAGE/logobl.png" alt=""></a>
		<ul class="satu">
			<li>
				<div class="home in">
					<a href="index.php class=" inti">Home</a>
				</div>			</li>
			<li>
				<div class="in">
					<a href="index.php#produk" class="inti">Product</a>
				</div>
			</li>
			<li>
				<div class="in">
					<a href="index.php#review" class="inti">Testimoni</a>
				</div>
			</li>
			<li>
				<div class="in">
					<a href="loginadmin.php" class="inti">Admin</a>
				</div>
			</li>
			<li>
				<div class="in">
					<a href="#" class="inti">Contact</a>
				</div>
			</li>
			<li></li>
				<div class="topdetil">
					<a href="#" class="detil">Detail</a>
					<i class="fas fa-chevron-down"></i>
					<ul class="intinya">
						<div>
							<li><a href="sk.php">Syarat & ketentuan</a></li>
						</div>
						<div>
							<li><a href="pembuat.php#">Biodata Pembuat</a></li>
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

	<!-- particles.js container -->
	<div class="badan">
		<div class="check">
			<div class="frame">
				<div class="framechild">
					<div class="fotoor"></div>
					<p class="aran">Rian Febriansyah</p>
					<p class="aran2">@rian.fbrsyh</p>
					<p class="job">UI/UX Designer</p>
					<p class="quote">"
						Keep Trying and Never Stop Learning"</p>
					<div class="fotobawahr">
						<a class="btn" href="https://facebook.com/yanz.dheractionz">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a class="btn" href="#">
							<i class="fab fa-twitter"></i>
						</a>
						<a class="btn" href="www.instagram.com/rian.fbrsyh">
							<i class="fab fa-instagram"></i>
						</a>
						<a class="btn" href="#">
							<i class="fab fa-google"></i>
						</a>
					</div>
				</div>
				<div class="framechild">
					<div class="fotoo"></div>
					<p class="aran">Rizal Herliansyah Hidayat</p>
					<p class="aran2">@rizal_herliansyah</p>
					<p class="job">UI/UX Designer</p>
					<p class="quote">"
						Follow what you want, never give up on what you are pursuing, even if it is difficult to achieve. but nothing is impossible in this world "</p>
					<div class="fotobawah">
						<a class="btn" href="https://www.facebook.com/rizal.hidayatpercima/">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a class="btn" href="#">
							<i class="fab fa-twitter"></i>
						</a>
						<a class="btn" href="https://www.instagram.com/rizal_herliansyah/?hl=en">
							<i class="fab fa-instagram"></i>
						</a>
						<a class="btn" href="#">
							<i class="fab fa-google"></i>
						</a>
					</div>
				</div>
				<div class="framechild">
					<div class="fotooin"></div>
					<p class="aran">Indra Kurniawan</p>
					<p class="aran2">@ik_indraa</p>
					<p class="job">UI/UX Designer</p>
					<p class="quote">"
						Just Keep Swimming "</p>
					<div class="fotobawahin">
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
					</div>
				</div>
			</div>
			<div id="particles-js"></div>
		</div>
	</div>



	<!-- scripts -->
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
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