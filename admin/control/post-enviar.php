<?php
require 'check.php';
require '../../config/conn.php';
$id = $_SESSION['id'];

require 'processador/p-enviar-pross.php';

// Criando array jogador
$cok = $_COOKIE['jogador_cookie'];
$cok = str_replace('[', '', $cok);
$cok = str_replace('{', '', $cok);
$cok = str_replace(']', '', $cok);
$cok = str_replace('}', '', $cok);
$cok = str_replace('"', '', $cok);
$cok = str_replace(',', '', $cok);
$cok = str_replace('tag', '', $cok);
$array_jogador = explode(':', $cok);
unset($array_jogador[0]);
foreach($array_jogador as $jogador) {    
	echo $jogador."<br>"; 
}

// Criando array time
$cok = $_COOKIE['time_cookie'];
$cok = str_replace('[', '', $cok);
$cok = str_replace('{', '', $cok);
$cok = str_replace(']', '', $cok);
$cok = str_replace('}', '', $cok);
$cok = str_replace('"', '', $cok);
$cok = str_replace(',', '', $cok);
$cok = str_replace('tag', '', $cok);
$array_time = explode(':', $cok);
unset($array_time[0]);
foreach($array_time as $time) {    
	echo $time."<br>"; 
}


// Criando array game
$cok = $_COOKIE['game_cookie'];
$cok = str_replace('[', '', $cok);
$cok = str_replace('{', '', $cok);
$cok = str_replace(']', '', $cok);
$cok = str_replace('}', '', $cok);
$cok = str_replace('"', '', $cok);
$cok = str_replace(',', '', $cok);
$cok = str_replace('tag', '', $cok);
$array_game = explode(':', $cok);
unset($array_game[0]);
foreach($array_game as $game) {    
	echo $game."<br>"; 
}

// Colocar no banco
if (!empty($_POST)){

	if(!empty($_FILE)){

	}else{
		$banner;
	}



	extract($_POST);

	$sql = mysql_query("INSERT INTO tb_artigos (autor_id, titulo, previa, banner,conteudo, data_criacao)
		VALUES ('$id',
				'$titulo',
				'$previa',
				'$nome_final',
				'$conteudo',
				now())") or die(mysql_error());

	// Inserindo na tb_partida
	// Pegando o id do artigo
	$sql = mysql_query("SELECT id FROM tb_artigos WHERE previa LIKE '%$previa%'") or die(mysql_error());
	while ($cc = mysql_fetch_array($sql)) {
		$id_artigo = $cc['id'];
	}


// PARTIU METER O LOKO
	foreach($array_jogador as $jogador) {

		// Pegando o id do JOGADOR
		$nick_jogador = mysql_query("SELECT id FROM tb_proPlayers WHERE nickname LIKE '%{$jogador}%'") or die(mysql_error());
		while ($cc = mysql_fetch_array($nick_jogador)) {
		 	$id_pro = $cc['id'];
		 } 

		 $nick_jogador = mysql_query("INSERT INTO tb_pros_rel (id_artigo, id_pro) VALUES
		 	($id_artigo, $id_pro)");

		 /*
		$sql = mysql_query("INSERT INTO tb_partida (id_proPlayer, id_artigo, id_time)
			VALUES ()") or die(mysql_error());
		*/
	}

	foreach($array_time as $time) {

		// Pegando o id do TIME
		$nick_time = mysql_query("SELECT id FROM tb_times WHERE nome_time LIKE '%{$time}%'") or die(mysql_error());
		while ($cc = mysql_fetch_array($nick_time)) {
		 	$id_time = $cc['id'];
		 } 

		 $nick_jogador = mysql_query("INSERT INTO tb_times_rel (id_artigo, id_time) VALUES
		 	($id_artigo, $id_time)");

	}

	foreach($array_game as $game) {

		// Pegando o id do GAME
		$nick_game = mysql_query("SELECT id FROM tb_games WHERE game LIKE '%{$game}%'") or die(mysql_error());
		while ($cc = mysql_fetch_array($nick_game)) {
		 	$id_game = $cc['id'];
		 } 

		 $nick_jogador = mysql_query("INSERT INTO tb_games_rel (id_artigo, id_game) VALUES
		 	($id_artigo, $id_game)");

	}


}

header("Location:../../post.php?q=".$titulo);