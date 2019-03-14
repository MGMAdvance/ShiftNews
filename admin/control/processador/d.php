<?php

var_dump($_POST);
echo "<br>";
var_dump($_COOKIE);


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