<?php
require 'conn.php';
session_start();
$id_user = $_SESSION['id'];

extract($_POST);

// Fazendo backup das preferencias
$sql = mysql_query("SELECT fav_pro_id, fav_game_id, fav_time_id FROM tb_users WHERE id = $id_user");
while ($cc = mysql_fetch_array($sql)) {
	$backup['pro'] = $cc['fav_pro_id'];
	$backup['game'] = $cc['fav_game_id'];
	$backup['time'] = $cc['fav_time_id'];
}

// 3 Selects buscando o ID baseado nos nomes ou nicknames
if ($jogador == ""):
	$jogador = $backup['pro'];
else:
	$sql = mysql_query("SELECT id FROM tb_proPlayers WHERE nickname LIKE '%{$jogador}%'");
	$jogador = mysql_result($sql, 0);
endif;

if ($jogo == ""):
	$jogo = $backup['game'];
else:
	$sql = mysql_query("SELECT id FROM tb_games WHERE game LIKE '%{$jogo}%'");
	$jogo = mysql_result($sql, 0);
endif;

if ($time == ""):
	$time = $backup['time'];
else:
	$sql = mysql_query("SELECT id FROM tb_times WHERE nome_time LIKE '%{$time}%'");
	$time = mysql_result($sql, 0);
endif;

$sql = mysql_query("UPDATE tb_users SET fav_pro_id = $jogador, fav_game_id = $jogo, fav_time_id = $time WHERE id = $id_user") or die(mysql_error());

$_SESSION['chaveta'] = 2;

header("Location:../conexao.php");

