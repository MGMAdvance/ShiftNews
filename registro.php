<?php
date_default_timezone_set('GMT');
$ano_init = 1920;
$ano_final = date('Y');
?>
<style type="text/css">
	.sele{
		padding: 8px;
	}
	.de{
		padding: 8px;
		width: 60px;
	}
	.data{
		padding: 8px;
	}
	body{color: white;}
</style>
<link rel="stylesheet" type="text/css" href="assets/css/registro.css">
<script src="assets/js/mascara.js"></script>
<meta charset="utf-8">
<form method="POST" action="config/registrar.php" enctype="multipart/form-data">
	<legend class="cadastro-login">Cadastro</legend>
	<input required type="text" name="nome" placeholder="Nome completo"><br>
	<input required type="text" name="username" placeholder="Nome de usuário"><br>
	<input required type="email" name="email" placeholder="Insira seu e-mail"><br>
	<input required type="password" name="senha" minlength="3" placeholder="Insira sua senha"><br>
	<!--
	<input type="text" name="data" id="outra_data" maxlength="10" placeholder="11/08/2017" onkeypress="mascaraData(this)"><br> -->
	
	<select name="data" required class="data">
		<option value="" disabled selected>Data</option>
	<?php for ($i=1; $i <= 31 ; $i++) { ?>
		<option value="<?=$i;?>"><?=$i;?></option>
	<?php } ?>
	</select>

	<select name="de" required class="de">
		<option value="" disabled selected>de</option>
	<?php for ($i=1; $i <= 12 ; $i++) { ?>
		<option value="<?=$i;?>"><?=$i;?></option>
	<?php } ?>
	</select>

	<select name="nascimento" required class="sele">
		<option value="" disabled selected>Nascimento</option>
	<?php for ($i=$ano_final; $i >= $ano_init; $i--) { ?>
		<option value="<?=$i;?>"><?=$i;?></option>
	<?php } ?>
	</select>

	<select required name="sexo">
		<option value="" disabled selected>Qual seu sexo?</option>
		<option value="0">Não definido</option>
		<option value="1">Masculino</option>
		<option value="2">Feminino</option>
	</select>
	<br>
	<label for="ck"><input type="checkbox" id="ck" required>Eu concordo com os <a href="#" style="color: #33b2ff" onclick="window.open('termos.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');">termos de uso</a></label>
	<br>
	<input type="submit" value="Registrar">
</form>
<style type="text/css">
		.login-box {
    	height: 500px;
	}
</style>