<?php
require_once '../config/conn.php';

$pesquisa = $_POST['palavra']; 

// JOGADORES
$query = mysql_query("SELECT * FROM tb_proPlayers WHERE nickname LIKE '%{$pesquisa}%' OR nome_pro LIKE '%{$pesquisa}%'") or die("Deu problema na pesquisa...");

if (mysql_num_rows($query) <= 0) { ?>

<?php }else{ ?>
	<div class="blue darken-4 dest"><p class="white-text">JOGADORES</p></div>
<?php
	if(mysql_num_rows($query) <= 0){
		echo "Não encontramos nenhum jogador...";
	}else{
		while ($res = mysql_fetch_assoc($query)) {?>
			<li>
				<div class="col s12 m7">
				    <div class="card horizontal">
				      <div class="card-image">
				        <img src="imagens/banner_pro/<?=$res['banner_pro'];?>">
				      </div>
				      <div class="card-stacked">
				        <div class="card-content">
				        <span class="card-title"><?=$res['nickname'];?> - <?=$res['nome_pro'];?></span>
				          
				        </div>
				        <div class="card-action">
				          <a href="pro.php?t_nm=<?=urlencode($res['nickname']);?>">Ver perfil</a>
				        </div>
				      </div>
				    </div>
			  	</div>
			</li>
		<?php
		}
	}
}


// TIMES
$query = mysql_query("SELECT * FROM tb_times WHERE nome_time LIKE '%{$pesquisa}%'") or die("Deu problema na pesquisa...");
if (mysql_num_rows($query) <= 0) { 
	
 } else{ ?>
	<div class="blue darken-4 dest"><p class="white-text">TIMES</p></div>
<?php
// TIMES
	if(mysql_num_rows($query) <= 0){
		echo "Não encontramos nenhum time...";
	}else{
		while ($res = mysql_fetch_assoc($query)) {?>
			<li>
				<div class="col s12 m7">
				    <div class="card horizontal">
				      <div class="card-image">
				        <img src="imagens/banner_time/<?=$res['banner_time'];?>">
				      </div>
				      <div class="card-stacked">
				        <div class="card-content">
				        <span class="card-title"><?=$res['nome_time'];?></span>
				          
				        </div>
				        <div class="card-action">
				          <a href="time.php?t_nm=<?=urlencode($res['nome_time']);?>">Ver página do time</a>
				        </div>
				      </div>
				    </div>
			  	</div>
			</li>
		<?php
		}
	}
}

// JOGOS
$query = mysql_query("SELECT * FROM tb_games WHERE game LIKE '%{$pesquisa}%'") or die("Deu problema na pesquisa...");

if (mysql_num_rows($query) <= 0) { ?>

<?php }else{ ?>
	<div class="blue darken-4 dest"><p class="white-text">JOGOS</p></div>
<?php
	if(mysql_num_rows($query) <= 0){
		echo "Não encontramos nenhum jogo...";
	}else{
		while ($res = mysql_fetch_assoc($query)) {?>
			<li>
				<div class="col s12 m7">
				    <div class="card horizontal">
				      <div class="card-image">
				        <img src="imagens/banner_game/<?=$res['banner_game'];?>">
				      </div>
				      <div class="card-stacked">
				        <div class="card-content">
				        <span class="card-title"><?=$res['game'];?></span>
				          
				        </div>
				        <div class="card-action">
				          <a href="game.php?t_nm=<?=urlencode($res['game']);?>">Ver jogo</a>
				        </div>
				      </div>
				    </div>
			  	</div>
			</li>
		<?php
		}
	}
}

// PERFIS
$query = mysql_query("SELECT * FROM tb_users WHERE nm_user LIKE '%{$pesquisa}%' OR login_user LIKE '%{$pesquisa}%'") or die("Deu problema na pesquisa...");

if (mysql_num_rows($query) <= 0) { ?>

<?php }else{ ?>
	<div class="blue darken-4 dest"><p class="white-text">PERFIS</p></div>
<?php
	if(mysql_num_rows($query) <= 0){
		echo "Não encontramos nenhum jogador...";
	}else{
		while ($res = mysql_fetch_assoc($query)) {?>
			<li>
				<div class="col s12 m7">
				    <div class="card horizontal">
				      <div class="card-image">
				        <img src="avatar/<?=$res['avatar_user'];?>">
				      </div>
				      <div class="card-stacked">
				        <div class="card-content">
				        <span class="card-title"><?=$res['nm_user'];?></span>
				          <p><?=$res['login_user'];?></p>
				        </div>
				        <div class="card-action">
				          <a href="perfil.php?user=<?=urlencode($res['login_user']);?>">Ver perfil</a>
				        </div>
				      </div>
				    </div>
			  	</div>
			</li>
		<?php
		}
	}
}


// Artigos
$query = mysql_query("SELECT * FROM tb_artigos WHERE titulo LIKE '%{$pesquisa}%'") or die("Deu problema na pesquisa...");
if(mysql_num_rows($query) <= 0){

}else{ ?>
 <div class="blue darken-4 dest"><p class="white-text">NOTÍCIAS</p></div>
<?php
	if(mysql_num_rows($query) <= 0){
		echo "Não encontramos nenhum artigo...";
	}else{
		while ($res = mysql_fetch_assoc($query)) {?>
			<li>
				<div class="col s12 m7">
				    <div class="card horizontal">
				      <div class="card-image">
				        <img src="artigos/banners/<?=$res['banner'];?>">
				      </div>
				      <div class="card-stacked">
				        <div class="card-content">
				        <span class="card-title"><?=$res['titulo'];?></span>
				          <p><?=$res['conteudo'];?></p>
				        </div>
				        <div class="card-action">
				          <a href="post.php?q=<?=urlencode($res['titulo']);?>">Leia mais</a>
				        </div>
				      </div>
				    </div>
			  	</div>
			</li>
		<?php
		}
	}
}