<?php
require 'check.php';
require '../../config/conn.php';

// Verificando se existe o GET
if(!empty($_GET)){
	if(is_numeric($_GET['id'])){
		extract($_GET);

		$sql = mysql_query("DELETE FROM tb_artigos WHERE id = '$id'");
	}
}else{
	header("X-Powered-By: Tudo bom vini?");
}

header("Location:post-listar.php");