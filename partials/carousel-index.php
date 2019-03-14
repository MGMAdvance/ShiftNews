<link rel="stylesheet" type="text/css" href="partials/cc.css">
<div id="captioned-gallery">
	<figure class="slider">
	<?php 
	$sql = mysql_query("SELECT * FROM tb_artigos ORDER BY data DESC LIMIT 3");

	while($cc = mysql_fetch_object($sql)){ ?>
		<figure>
			<img src="<?php echo $cc->banner; ?>" alt="<?php echo $cc->titulo; ?>">
			<figcaption><?php echo $cc->titulo; ?></figcaption>
		</figure>
	<?php } ?>
	</figure>
</div>
