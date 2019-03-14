<meta charset="utf-8">
<?php
date_default_timezone_set('GMT');
	/* 
		Gerar um cadastro
		Sendo que automaticamente o cadastrado vire 'user'
	*/

	require 'conn.php'; //Conexão com o DB



	//Pegando dados do registro.php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$username = $_POST['username'];
	$data = $_POST['data'];
	$sexo = $_POST['sexo'];
	$datinha = date_create("{$_POST['nascimento']}-{$_POST['de']}-{$_POST['data']}");
	$datinha = date_format($datinha, "Y-m-d");


	// Verificando dados
	 
	$nick = mysql_query("SELECT login_user FROM tb_users WHERE login_user LIKE '%$username%'") or die(mysql_error());
	$email_ver = mysql_query("SELECT email_user FROM tb_users WHERE email_user LIKE '%$email%'") or die(mysql_error());

	if (mysql_num_rows($nick) <= 0){
		if(mysql_num_rows($email_ver) <= 0){
			//Inserindo na tabela - tb_users
			mysql_query("INSERT INTO tb_users 
				(nm_user, email_user, pass_user, login_user, data_registro_user, data_nascimento_user, sexo_user) VALUES
				('$nome', '$email',	'$senha', '$username', now(), '$datinha', $sexo);") or die(mysql_error());

			session_start();
			$_SESSION['chaveta'] = 1;
			$_SESSION['user'] = $_POST['username'];
			$_SESSION['pass'] = $_POST['senha'];
			$_SESSION['Enviar'] = "Nada";
			header("Location:../conexao.php");
		}else{
			echo "<script language='javascript' type='text/javascript'>alert('Email já existente');window.location.href='../login.php?registro=RG';</script>";
		}
	}else{
		echo "<script language='javascript' type='text/javascript'>alert('Nome de usuário já existente');window.location.href='../login.php?registro=RG';</script>";
	}



?>