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

	<main>
		<div class="container">
			<div class="register-box">
				<h3>Login</h3>

				<?php if (session()->get('success')) : ?>
					<div class="manual-alert succes" role="alert">
						<?= session()->get('success') ?>
					</div>
				<?php endif; ?>

				<form class="form" method="post" action="">
					<div class="form-manual">
						<label for="username">Username</label>
						<input type="text" name="username" required autocomplete="off" placeholder="username" value="<?= get_cookie('username') ?>">
					</div>

					<div class="form-manual">
						<label for="password">Password</label>
						<input type="password" name="password" required autocomplete="off" placeholder="password">
					</div>
					<div class="remember">
						<input type="checkbox" name="remember" id="remember" class="remember-me">
						<label for="remember">Remember Me!</label>
					</div>

					<?php if (isset($validation)) : ?>
						<div class="col-12">
							<div class="manual-alert wrng">
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

		<!-- Footer -->
		<?php include 'footer.php' ?>

		<!-- Script -->
		<script type="text/javascript" src="../JS/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>