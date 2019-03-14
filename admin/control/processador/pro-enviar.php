<?php
require '../check.php';
require '../../../config/conn.php';
date_default_timezone_set('GMT');

print_r($_POST);

extract($_POST); // Extraindo dados do $_POST

if ($cidade_natal == "") {
	$cidade_natal = "-";
}
if ($nm_user == "") {
	$nm_user = 0;
}

if ($time_id == "") {
	$time_id = 1;
}else{
	// Pegando o ID do time baseado no nome do time
	$t_sql = mysql_query("SELECT id, nome_time FROM tb_times WHERE nome_time LIKE '%{$time_id}%'") or die(mysql_error());
	while ($cc = mysql_fetch_array($t_sql)) {
		$time_id = $cc['id'];
	}
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


$UP['pasta'] = "../../../imagens/banner_pro/"; // caminho da imagem
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
	$nome_final = "eve.jpg";
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo

if (!empty($_FILES)) {
	$nome_final = "eve.jpg";
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
	$nome_final = 'pro'.'-'.$nickname.'-'.time().'.jpg';
} else {
// Mantém o nome original do arquivo
	$nome_final = $_FILES['userfile']['name'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
	echo "Upload efetuado com sucesso!";
} else {
	$nome_final = "eve.jpg";
}
 
}

if ($game_id == "") {
	$game_id = NULL;
}
if ($tipo_pro == "") {
	$tipo_pro = NULL;
}

echo "<br>";

if (empty($nm_user) or $nm_user == NULL) {
	$sql = mysql_query("INSERT INTO tb_proPlayers 
	(nome_pro, time_id, num_titulos, data_nascimento, nacionalidade, nickname, cidade_pro, game_id , nivel_pro, banner_pro)
	VALUES
	('{$nome_pro}', '{$time_id}', '{$num_titulos}', '{$data_nascimento}', '{$nacionalidade}', '{$nickname}', '{$cidade_natal}', '{$game_id}', '{$tipo_pro}', '{$nome_final}')
	") or die(mysql_error());
}else{
// Inserindo dados pra tb_proPlayers
$sql = mysql_query("INSERT INTO tb_proPlayers 
	(nome_pro, time_id, num_titulos, data_nascimento, nacionalidade, nickname, cidade_pro, game_id , nivel_pro, banner_pro)
	VALUES
	('{$nome_pro}', {$nm_user}, '{$time_id}', '{$num_titulos}', '{$data_nascimento}', '{$nacionalidade}', '{$nickname}', '{$cidade_natal}','{$game_id}', '{$tipo_pro}', '{$nome_final}')
	") or die(mysql_error());
}
header("Location:../pro-listar.php");