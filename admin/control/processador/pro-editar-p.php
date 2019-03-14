<?php
require '../check.php';
require '../../../config/conn.php';
date_default_timezone_set('GMT');

print_r($_POST);

extract($_POST);

	$t_sql = mysql_query("SELECT id, nome_time FROM tb_times WHERE nome_time LIKE '%{$time_id}%'") or die(mysql_error());
	while ($cc = mysql_fetch_array($t_sql)) {
		$time_id = $cc['id'];
	}
if ($data_nascimento == "" or $data_nascimento == NULL) {
	// Caso esteja vazio irá apresentar uma data random
	$bb = "03/11/1998";
	$aa = date_create(str_replace("/", "-", $bb));
	$ss = date_format($aa, 'Y/m/d');
	$data_nascimento = str_replace("/", "-", $ss);
}else{	
	// Se tiver algo irar normalizar a data pro banco
	$data_1 = date_create($data_nascimento);
	$data_1 = date_format($data_1, 'Y/m/d');
	$data_nascimento = str_replace("/", "-", $data_1);
}


$sql = mysql_query("UPDATE tb_proPlayers SET nome_pro = '$nome_pro',
											time_id = $time_id,
											num_titulos = $num_titulos,
											nacionalidade = '$nacionalidade',
											cidade_pro = '$cidade_natal',
											data_nascimento = '$data_nascimento',
											nickname = '$nickname' WHERE id = $id_jogador") or die(mysql_error());
header("Location:../pro-listar.php");								