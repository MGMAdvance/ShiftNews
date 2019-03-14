<?php
require 'config/conn.php';
$id_pro = $_GET['fav'];
$tipo = $_GET['tipo'];
session_start();

if (!empty($_SESSION)) {
	switch ($tipo) {
	case '1':
		// 1 pra favoritar pro player
		$id_user = $_SESSION['id'];
		// Favoritar o PROPLAYER
		$sql = mysql_query("UPDATE tb_users SET fav_pro_id = $id_pro WHERE id = $id_user");
		header("Location:perfil.php");
		break;
	
	case '2':
		// 2 pra favoritar um time
		$id_user = $_SESSION['id'];
		// Favoritar o TIME
		$sql = mysql_query("UPDATE tb_users SET fav_time_id = $id_pro WHERE id = $id_user");
		header("Location:perfil.php");
		break;

	case '3':
		// 3 pra favoritar um jogo
		$id_user = $_SESSION['id'];
		// Favoritar o JOGO
		$sql = mysql_query("UPDATE tb_users SET fav_game_id = $id_pro WHERE id = $id_user");
		header("Location:perfil.php");
		break;

	default:
		# code...
		break;
	}
	
}else{
	header("Location:index.php");
}