<?php 
	$sql = mysql_query("SELECT * FROM tb_artigos ORDER BY data DESC ");

	while ($cc = mysql_fetch_object($sql)){ ?>
		<h1><b><?php echo $cc->titulo; ?></b></h1><br>
		<p><?php echo $cc->conteudo;?></p><hr>
<?php } ?>