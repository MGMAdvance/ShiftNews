<?php require 'partes/header.php';
date_default_timezone_set('GMT');
if (empty($_GET)) {
	$game_nome = "League of Legends";
}else{
	$game_nome = $_GET['t_nm'];
}
$sql = mysql_query("SELECT * FROM tb_games WHERE game LIKE '%{$game_nome}%'");
while ($cc = mysql_fetch_array($sql)) {
	$game = $cc;
	$game_id = $cc['id'];
	$fundado = date_format(date_create($cc['data_lancamento']), "d/m/Y");
	$fundo = $cc['fundo'];
}

?>
<style type="text/css">
	body{
		background: url(imagens/preferencias/<?=$fundo;?>) no-repeat fixed center;
	}
</style>
<div class="row">
	<div class="col s12 m10 offset-m1 form white">
		<center>
		<h3><?=$game['game'];?></h3><br>
		</center>
		<div class="col s12 m12" >
			<div class="card horizontal">
				<div class="card-image">
					<img src="imagens/banner_game/<?=$game['banner_game'];?>">
				</div>
				<div class="card-stacked">
					<div class="card-content">
						<p class="infos"><b>Desenvolvedora:</b><span class="cont">&nbsp;&nbsp;<?=$game['desenvolvedora'];?></span></p>
						<p class="infos"><b>Genero:</b><span class="cont">&nbsp;&nbsp;<?=$game['genero'];?></span></p>
						<p class="infos"><b>Data de Lançamento:</b><span class="cont">&nbsp;&nbsp;<?=$fundado;?></span></p>
						<p class="infos"><b>Descrição:</b><span class="cont">&nbsp;&nbsp;<?=$game['descricao'];?></span></p>
					</div>
					<div class="card-action">
						<a href="favoritar.php?fav=<?=$game['id'];?>&tipo=3" class="red-text fav"><i class="material-icons">favorite</i> FAVORITAR</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- MENU -->
			<div class="col s12 m12">
				<ul class="tabs">
					<li class="tab col s4 m4">
						<a class="active" href="#news">Notícias</a>
					</li>
					<li class="tab col s4 m4">
						<a href="#times">Times</a>
					</li>
					<li class="tab col s4 m4">
						<a href="#proPlayers">Jogadores</a>
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
		$sql = mysql_query("SELECT DISTINCT A.id, A.titulo, A.previa, A.banner FROM tb_artigos A INNER JOIN tb_games_rel G ON G.id_artigo = A.id ") or die(mysql_error()); ?>
	
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
	
	<!-- jogadores de tal jogo -->

	<div id="proPlayers">
	<?php $sql = mysql_query("SELECT * FROM tb_proPlayers WHERE game_id = $game_id"); ?>
		<div class="row">
		<?php while ($cc = mysql_fetch_array($sql)) { ?>
			<a href="pro.php?t_nm=<?=$cc['nickname'];?>">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<img src="imagens/banner_pro/<?=$cc['banner_pro'];?>">
						<span class="card-title"><?=$cc['nome_pro'];?></span>
					</div>
				</div>
			</div>
			</a>
		<?php } ?>
			
		</div>
	</div>

	<!-- times -->
	<div id="times">

	<!-- times relacionado ao jogo -->
		<div class="row">
<?php
$ka = mysql_query("SELECT DISTINCT tb_times.id, tb_times.nome_time, tb_times.banner_time FROM tb_times INNER JOIN tb_proPlayers ON tb_proPlayers.time_id = tb_times.id WHERE tb_proPlayers.game_id = $game_id") or die(mysql_error());
while ($gg = mysql_fetch_array($ka)) { 
$gaming = $gg['id'];
?>
		<a href="time.php?t_nm=<?=$gg['nome_time'];?>">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<img src="imagens/banner_time/<?=$gg['banner_time'];?>">
						<span class="card-title"><?=$gg['nome_time'];?></span>
					</div>
				</div>
			</div>
		</a>
	<?php } ?>
		</div>
	</div>
</div>
</div>

<?php require 'partes/footer.php'; ?>