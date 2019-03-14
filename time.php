<?php require 'partes/header.php';
date_default_timezone_set('GMT');
if (empty($_GET)) {
	$time_nome = "Pain";
}else{
	$time_nome = $_GET['t_nm'];
}
$sql = mysql_query("SELECT * FROM tb_times WHERE nome_time LIKE '%{$time_nome}%'");
while ($cc = mysql_fetch_array($sql)) {
	$time = $cc;
	$time_id = $cc['id'];
	$fundado = date_format(date_create($cc['criado_time']), "Y");
}
?>
<style type="text/css">
	body{
		background-color: black;
	}
</style>
<div class="row">
	<div class="col s12 m10 offset-m1 form white">
		<center>
		<h3><?=$time['nome_time'];?></h3><br>
		</center>
		<div class="col s12 m12" >
			<div class="card horizontal">
				<div class="card-image">
					<img src="imagens/banner_time/<?=$time['banner_time'];?>">
				</div>
				<div class="card-stacked">
					<div class="card-content">
						<p class="infos"><b>Fundado:</b><span class="cont">&nbsp;&nbsp;<?=$fundado;?></span></p>
						<p class="infos"><b>Fundador:</b><span class="cont">&nbsp;&nbsp;<?=$time['criador_time'];?></span></p>
						<p class="infos"><b>Nacionalidade:</b><span class="cont">&nbsp;&nbsp;<?=$time['local_time'];?></span></p>
						<p class="infos"><b>Títulos:</b><span class="cont">&nbsp;&nbsp;<?=$time['titulos_time'];?></span></p>
						<p class="infos"><b>Descrição:</b><span class="cont">&nbsp;&nbsp;<?=$time['bio_time'];?></span></p>
					</div>
					<div class="card-action">
						<a href="favoritar.php?fav=<?=$time['id'];?>&tipo=2" class="red-text fav"><i class="material-icons">favorite</i> FAVORITAR</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- MENU -->
			<div class="col s12 m12">
				<ul class="tabs">
					<li class="tab col s6 m6">
						<a class="active" href="#news">Notícias</a>
					</li>
					<li class="tab col s6 m6">
						<a href="#lineup">Lineup</a>
					</li>
				</ul>
			</div>
		</div>
		
		<!-- CORTE league tab -->
		<!-- tab league -->


	<!-- news league -->
	<div id="news">
		
		<div class="blue darken-4 dest">
			<p class="white-text">NOTÍCIAS</p>
		</div>
		<?php 
		// Só deus sabe
		$sql = mysql_query("SELECT A.banner, A.titulo, A.previa FROM tb_artigos A 
			INNER JOIN tb_times_rel P ON A.id = P.id_artigo WHERE P.id_time = $time_id") or die(mysql_error()); ?>
	
		<div class="row">
		<?php while ($cc = mysql_fetch_array($sql)) { ?>
			<a href="post.php?q=<?=$cc['titulo'];?>">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<img src="artigos/banners/<?=$cc['banner'];?>">
						<span class="card-title"><?=$cc['titulo'];?></span>
					</div>
					<div class="card-content">
						<p><?=$cc['previa'];?></p>
					</div>
				</div>
			</div>
			</a>
		<?php } ?>
			
		</div>
	</div>
	


	<!-- lineup league -->
	<div id="lineup">

	<div class="col s12">
		<div class="col s12 m12">
			<ul class="tabs">
			<?php $sql = mysql_query("SELECT DISTINCT tb_games.id, tb_games.game FROM tb_games INNER JOIN tb_proPlayers ON tb_games.id = tb_proPlayers.game_id INNER JOIN tb_times WHERE tb_proPlayers.game_id = tb_games.id AND tb_proPlayers.time_id = $time_id") or die(mysql_error()); 
				while ($cc=mysql_fetch_array($sql)){ ?>
				<li class="tab col s3">
					<a href="#tab-<?=$cc['id'];?>"><?=$cc['game'];?></a>
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>

	<!-- conteudo das TABS LINEUP -->
<?php
$ka = mysql_query("SELECT DISTINCT tb_games.id, tb_games.game FROM tb_games INNER JOIN tb_proPlayers ON tb_games.id = tb_proPlayers.game_id INNER JOIN tb_times WHERE tb_proPlayers.game_id = tb_games.id AND tb_proPlayers.time_id = $time_id") or die(mysql_error());
while ($gg = mysql_fetch_array($ka)) { 
$gaming = $gg['id'];
?>
		<div id="tab-<?=$gg['id'];?>">
		<div class="row">
			<div class="col s12 m12">
				<div class="blue darken-4 dest"><p class="white-text">TITULARES</p></div>
	<?php $aa = mysql_query("SELECT * FROM tb_proPlayers WHERE time_id = $time_id AND nivel_pro = 0 AND game_id = $gaming") or die(mysql_error());
		while ($pro = mysql_fetch_array($aa)) { ?>
			<a href="pro.php?t_nm=<?=$pro['nickname'];?>">
				<div class="col s12 m3">
					<div class="card">
						<div class="card-image tooltipped" data-position="top" data-delay="50" data-tooltip="<?=$pro['nome_pro'];?>">
							<img src="imagens/banner_pro/<?=$pro['banner_pro'];?>">
						</div>
					</div>
				</div>
			</a>
		<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12">
				<div class="blue darken-4 dest"><p class="white-text">RESERVAS</p></div>
	<?php $aa = mysql_query("SELECT * FROM tb_proPlayers WHERE time_id = $time_id AND nivel_pro = 1 AND game_id = $gaming") or die(mysql_error());
		while ($pro = mysql_fetch_array($aa)) { ?>
			<a href="pro.php?t_nm=<?=$pro['nickname'];?>">
				<div class="col s12 m3">
					<div class="card">
						<div class="card-image tooltipped" data-position="top" data-delay="50" data-tooltip="<?=$pro['nome_pro'];?>">
							<img src="imagens/banner_pro/<?=$pro['banner_pro'];?>">
						</div>
					</div>
				</div>
			</a>
		<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12">
				<div class="blue darken-4 dest"><p class="white-text">TÉCNICO</p></div>
	<?php $aa = mysql_query("SELECT * FROM tb_proPlayers WHERE time_id = $time_id AND nivel_pro = 2 AND game_id = $gaming") or die(mysql_error());
		while ($pro = mysql_fetch_array($aa)) { ?>
			<a href="pro.php?t_nm=<?=$pro['nickname'];?>">
				<div class="col s12 m3">
					<div class="card">
						<div class="card-image tooltipped" data-position="top" data-delay="50" data-tooltip="<?=$pro['nome_pro'];?>">
							<img src="imagens/banner_pro/<?=$pro['banner_pro'];?>">
						</div>
					</div>
				</div>
			</a>
		<?php } ?>
			</div>
		</div>
		</div>
	<?php } ?>
	</div>
</div>
</div>
</div>
</div>
</div>
<?php require 'partes/footer.php'; ?>