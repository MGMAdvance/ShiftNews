<?php
header("Content-type:application/json");
require '../config/conn.php';

$sql = mysql_query("SELECT * FROM tb_users");

$artigo = array("users" => []); // Estrutura artigo
$usuarios = array(); // Estrutura da usuarios

while ($listando = mysql_fetch_array($sql)) {
	$loop = array(
		"id" => $listando['id'],
		"nome" => $listando['nm_user'],
		"nick" => $listando['login_user'],
		"email" => $listando['email_user']
		);

	array_push($usuarios, $loop); // Colocando o novo valor na ARRAY
}


$artigo['users'] = array_map(null, $usuarios); // Colocando dentro de artigo

print_r(json_encode($artigo)); // Apresentando o JSON

mysql_close();