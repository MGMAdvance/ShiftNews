<?php require 'partes/header.php';
date_default_timezone_set('GMT');
if (empty($_GET)) {
	$pro_nick = "BrTT";
}else{
	$pro_nick = $_GET['t_nm'];
}
// Procurando os dados do jogador
$sql = mysql_query("SELECT * FROM tb_proPlayers WHERE nickname LIKE '%{$pro_nick}%'");
while ($cc = mysql_fetch_array($sql)) {
	$pro = $cc;
	$proID = $cc['id'];
	if($cc['data_nascimento'] == '0000-00-00'){
		$nascimento = "Idade não informado";
	}else {
		$data = date_create($cc['data_nascimento']);
		$nascimento = 2017 - date_format($data, "Y");
		$nascimento .= " anos";
	}
	$id_time = $cc['time_id'];
	$id_jogo = $cc['game_id'];
	// Puxando o time referencia do jogador
	$r = mysql_query("SELECT * FROM tb_times WHERE id = $id_time");
	while ($aa = mysql_fetch_assoc($r)) {
		$time = $aa;
	}
	if (empty($time['nome_time'])) {
		$time['nome_time'] = "Não esta em nenhum time";
	}

	// Puxando o fundo do game relacionado ao jogador
	$s = mysql_query("SELECT fundo, game FROM tb_games WHERE id = $id_jogo");
	 while ($gg = mysql_fetch_array($s)) {
    	$fundo = $gg['fundo'];
    	$gaming = $gg['game'];
  	}
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
		<h3><?=$pro['nome_pro'];?></h3><br>
		</center>
		<div class="col s12 m12" >
			<div class="card horizontal">
				<div class="card-image">
					<img src="imagens/banner_pro/<?=$pro['banner_pro'];?>">
				</div>
				<div class="card-stacked">
					<div class="card-content">
						<h5 style="line-height: 90%;"><?=$pro['nickname'];?></h5>
						<p class="infos"><b>Idade:</b><span class="cont">&nbsp;&nbsp;<?=$nascimento;?></span></p>
						<p class="infos"><b>Cidade natal:</b><span class="cont">&nbsp;&nbsp;<?=$pro['cidade_pro'];?></span></p>
						<p class="infos"><b>Nacionalidade:</b><span class="cont">&nbsp;&nbsp;<?=$pro['nacionalidade'];?></span></p>
						<p class="infos"><b>Equipe: <a href="time.php?t_nm=<?=$time['nome_time'];?>"></b><span class="cont">&nbsp;&nbsp;<?=$time['nome_time'];?></span></p></a>
						<p class="infos"><b>Profissional de: <a href="game.php?t_nm=<?=$gaming;?>"></b><span class="cont">&nbsp;&nbsp;<?=$gaming;?></span></p></a>
						<p class="infos"><b>Títulos:</b><span class="cont">&nbsp;&nbsp;<?=$pro['num_titulos'];?></span></p>
					</div>
					<div class="card-action">
						<a href="favoritar.php?fav=<?=$pro['id'];?>&tipo=1" class="red-text fav"><i class="material-icons">favorite</i> FAVORITAR</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col s12 m10">
			<h3 style="color: black;">Notícias</h3>
		</div>
		<div class="row">
		<?php $sql = mysql_query("SELECT A.banner, A.titulo, A.previa FROM tb_artigos A 
			INNER JOIN tb_pros_rel P ON A.id = P.id_artigo WHERE P.id_pro = $proID") or die(mysql_error());
		while ($cc = mysql_fetch_assoc($sql)) { ?>
			<div class="col s12 m5">
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
		<?php
		}
		?>
			
			</div>
		</div>
	</div>
</div>
<?php require 'partes/footer.php'; ?>