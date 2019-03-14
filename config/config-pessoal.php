<?php
require 'conn.php';
session_start();
$id_user = $_SESSION['id'];
$sql = mysql_query("SELECT * FROM tb_users WHERE id = $id_user");
while ($cc = mysql_fetch_array($sql)) {
	$conta = $cc;
}

if (empty($_FILES['foto_perfil']) or $_POST['foto_perfil'] == $conta['avatar_user']) {
	$perfil = $conta['avatar_user'];
}else{
	require 'process-perfil.php';
}

if (empty($_FILES['foto_capa']) or $_POST['foto_capa'] == $conta['banner_user']) {
	$capa = $conta['banner_user'];
}else{
	require 'process-capa.php';
}

extract($_POST);

mysql_query("UPDATE tb_users SET nm_user = '$nome', email_user = '$email', banner_user = '$capa', avatar_user = '$perfil' WHERE id = $id_user") or die(mysql_error());

$_SESSION['chaveta'] = 2;

header("Location:../conexao.php");