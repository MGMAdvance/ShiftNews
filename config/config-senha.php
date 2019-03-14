<?php
require 'conn.php';
session_start();
$id_user = $_SESSION['id'];
extract($_POST);

if ($senha == $confirmar_senha){
	// Atualizando senha
	$senha = md5($confirmar_senha);
	$sql = mysql_query("UPDATE tb_users SET pass_user = '$senha' WHERE id = $id_user") or die(mysql_error());
	header("Location:../preferencias.php");
}else{
	echo "<script>alert('Por favor, inserir ambas senhas corretamente.');window.location.href='../preferencias.php';</script>";
}

