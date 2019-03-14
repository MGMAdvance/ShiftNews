<?php
header("Content-type:application/json");
require '../config/conn.php';


$sql = mysql_query("SELECT * FROM tb_artigos");

$artigo = array("artigos" => []); // Estrutura artigo
$postagem = array(); // Estrutura da postagem

while ($listando = mysql_fetch_array($sql)) {
	$loop = array(
		"titulo" => $listando['titulo'],
		"banner" => $listando['banner'],
		"conteudo" => trim(strip_tags($listando['conteudo'])),
		"autor" => $listando['autor_id']
		);

	array_push($postagem, $loop); // Colocando o novo valor na ARRAY


}

$artigo['artigos'] = array_map(null, $postagem); // Colocando dentro de artigos

print_r(json_encode($artigo)); // Apresentando o JSON

mysql_close();