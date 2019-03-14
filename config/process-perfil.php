<?php

$UP['pasta'] = "../avatar/"; // caminho da imagem
$UP['tamanho'] = 1024 * 1024 * 4; // 4mbs (em bytes)
$UP['extensoes'] = array('jpg', 'png', 'gif'); // Extensões permitidas (em arrays)
$UP['renomeia'] = true; // Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$UP['erros'][0] = 'Não houve erro';
$UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$UP['erros'][4] = 'Não foi feito o upload do arquivo';
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['foto_perfil']['error'] != 0) {
	$perfil = "1.jpg";
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo

if (!empty($_FILES)) {
	$perfil = "jinx.jpg";
}else{
	$extensao = strtolower(end(explode('.', $_FILES['foto_perfil']['name'])));
	if(array_search($extensao, $UP['extensoes']) === false) {
	echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
	}
} 
 
// Faz a verificação do tamanho do arquivo
if ($UP['tamanho'] < $_FILES['foto_perfil']['size']) {
	echo "O arquivo enviado é muito grande, envie arquivos de até 4MB.";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
	$perfil = 'perfil'.'-'.$_SESSION['id'].'-'.time().'.jpg';
} else {
// Mantém o nome original do arquivo
	$perfil = $_FILES['foto_perfil']['name'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $UP['pasta'] . $perfil)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
	echo "Upload efetuado com sucesso!";
} else {
	$perfil = "1.jpg";
}
 
}