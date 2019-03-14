<?php require 'config/conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
	<title>Login - SHIFT</title>
	<link rel="stylesheet" type="text/css" href="assets/css/ctrl.css">
	<link rel="stylesheet" type="text/css" href="assets/css/inputs.css">
	<link rel="stylesheet" type="text/css" href="assets/vegas/vegas.min.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/picker.js"></script>
</head>
<body id="slide-login">
<div class="login-black">
	<section class="login-section">
		<div class="login-box">
			<?php

				// Condição para Login ou Registro
				// Caso o GET esteja vazio ele não entrara em modo de "Registro"
				if (!empty($_GET['registro']) == 'RG') {

					include 'registro.php'; // GET Preenchido "FALSE"

				}else{
					include 'login-lg.php'; // GET Vazio "TRUE"
				}

			?>
		</div>
	</section>
</div>
	<script src="assets/vegas/vegas.min.js"></script>
	<script src="assets/vegas/scripts/login-slide.js"></script>
</body>
</html>