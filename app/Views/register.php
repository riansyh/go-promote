<!DOCTYPE html>
<html lang="id">

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
	<!-- Header -->
	<?php include 'navbar.php' ?>
	
	<main>
		<div class="container">
			<div class="register-box">
				<h3>Register</h3>
				<form class="form" method="post" action="register">
					<div class="form-manual">
						<label for="username">Username</label>
						<input type="text" name="username" id="username" placeholder="username" required autocomplete="off">
					</div>
					<div class="form-manual">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" placeholder="password" required autocomplete="off">
					</div>
					<div class="form-manual">
						<label for="password_confirm">Konfirmasi Password</label>
						<input type="password" name="password_confirm" placeholder="password" id="password_confirm" required>
					</div>
					<?php if (isset($validation)) : ?>
						<div class="col-12">
							<div class="manual-alert wrng" role="alert">
								<?= $validation->ListErrors() ?>
							</div>
						</div>
					<?php endif; ?>

					<input type="submit" name="submit">
				</form>
				<a href="/login">Already have account?</a>
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