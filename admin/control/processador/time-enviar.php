<?php
require '../check.php';
require '../../../config/conn.php';
date_default_timezone_set('GMT');

print_r($_POST);
extract($_POST);

if ($fundado == "" or $fundado == NULL) {
	// Caso esteja vazio irá apresentar uma data random
	$bb = "03/11/1998";
	$aa = date_create(str_replace("/", "-", $bb));
	$ss = date_format($aa, 'Y/m/d');
	$fundado = str_replace("/", "-", $ss);
}else{	
	// Se tiver algo irar normalizar a data pro banco
	$data_1 = date_create($fundado);
	$fundado = date_format($data_1, 'Y/m/d');
	$fundado = str_replace("/", "-", $fundado);
}

require 't-file.php';

$sql = mysql_query("INSERT INTO tb_times (nome_time, banner_time, criado_time, criador_time, bio_time, local_time, titulos_time) 
	VALUES
	('$nome_time', '$nome_final', '$fundado', '$fundador_time', '$descricao', '$local_fundado', $num_titulos)") or die(mysql_error());

header("Location:../time-listar.php");