<?php require '../config/conn.php';
require 'check-login.php'; //Verificar se já esta logado ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
	<title>Login ADMIN - SHIFT</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/ctrl.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/inputs.css">
	<link rel="stylesheet" type="text/css" href="control/css/admin.css">
	<link rel="stylesheet" type="text/css" href="control/css/icon.css">
	<link rel="stylesheet" type="text/css" href="control/css/materialize.min.css">

	<script type="text/javascript" src="control/js/jquery.js"></script>
	<script type="text/javascript" src="control/js/materialize.min.js"></script>
	<script type="text/javascript" src="control/js/sweetalert.min.js"></script>

</head>

<body id="slide-login">
<div class="login-black">
	<section class="login-section">
		<div class="login-box" style="background-color: white; padding: 20px;">
			<form method="POST" action="conexao-admin.php" class="col s4">
			
		  <div class="row">
		    <div class="input-field ">
		      <i class="material-icons prefix">account_circle</i>
		      <input id="icon_prefix" type="text" name="admin" class="validate">
		      <label for="icon_prefix">Usuário ou email</label>
		    </div>
		  </div>

		  <div class="row">
		    <div class="input-field ">
		      <i class="material-icons prefix">https</i>
		      <input id="icon_telephone" type="password" name="pass" class="validate">
		      <label for="icon_telephone">Senha</label>
		    </div>
		  </div>

		  <button class="btn waves-effect waves-light" type="submit" name="Enviar">Entrar
		    <i class="material-icons right">send</i>
		  </button>

		</form>
		</div>
	</section>
</div>
</body>

</html>