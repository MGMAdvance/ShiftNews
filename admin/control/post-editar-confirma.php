<?php
require 'check.php';
require '../../config/conn.php';

if (!$_FILES['userfile']['name'] == ""){
	$UP['pasta'] = "../../artigos/banners/"; // caminho da imagem
	$UP['tamanho'] = 1024 * 1024 * 4; // 4mbs (em bytes)
	$UP['extensoes'] = array('jpg', 'png', 'gif'); // Extensões permitidas (em arrays)
	$UP['renomeia'] = true; // Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
	$UP['erros'][0] = 'Não houve erro';
	$UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
	$UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
	$UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
	$UP['erros'][4] = 'Não foi feito o upload do arquivo';
	// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
	if ($_FILES['userfile']['error'] != 0) {
		$nome_final = "jinx.jpg";
	}
	 
	// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
	 
	// Faz a verificação da extensão do arquivo

	if (!empty($_FILES)) {
		$nome_final = "jinx.jpg";
	}else{
		$extensao = strtolower(end(explode('.', $_FILES['userfile']['name'])));
		if(array_search($extensao, $UP['extensoes']) === false) {
		echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
		}
	} 
	 
	// Faz a verificação do tamanho do arquivo
	if ($UP['tamanho'] < $_FILES['userfile']['size']) {
		echo "O arquivo enviado é muito grande, envie arquivos de até 4MB.";
	}
	 
	// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
	else {
	// Primeiro verifica se deve trocar o nome do arquivo
	if ($UP['renomeia'] == true) {
	// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
		$nome_final = $id.'-'.time().'.jpg';
	} else {
	// Mantém o nome original do arquivo
		$nome_final = $_FILES['userfile']['name'];
	}
	 
	// Depois verifica se é possível mover o arquivo para a pasta escolhida
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $UP['pasta'] . $nome_final)) {
	// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
		echo "Upload efetuado com sucesso!";
	} else {
		$nome_final = "jinx.jpg";
	}
	 
	}

	// Se atualizar o banner
	if (!empty($_POST)){
	extract($_POST);

	$sql = mysql_query("UPDATE tb_artigos SET titulo = '$titulo',
											  banner = '$nome_final',
											  conteudo = '$conteudo' 
						WHERE id = $id") or die(mysql_error());
	}
}else{
	//  Se não atualizar o banner
	if (!empty($_POST)){
		extract($_POST);

		$sql = mysql_query("UPDATE tb_artigos SET titulo = '$titulo',
												  conteudo = '$conteudo' 
							WHERE id = $id") or die(mysql_error());
	}
}


header("Location:../../post.php?q=".urlencode($titulo));
