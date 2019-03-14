<!-- propaganda -->
<div class="card-tabs">
  <ul class="tabs tabs-fixed-width">
    <li class="tab"><a href="#voce"><b>Para você</b></a></li>
    <li class="tab"><a class="active" href="#todos"><b>TODOS</b></a></li>
  </ul>
</div>

<!-- TODOS OS ARTIGOS -->
<div id="todos">
<!-- inicio destaque -->
<div class="blue darken-4 dest"><p class="white-text">DESTAQUES</p></div>

<?php require 'partes/destaques.php'; ?> <!-- fim destaque -->

<div class="blue darken-4 dest"><p class="white-text">NOTÍCIAS</p></div>
<!-- Primeira linha de noticias -->
<?php require 'partes/linha-noticia.php'; ?>
</div>

<!-- APENAS PARA O USUARIO -->
<?php
    if (isset($_SESSION['id'])) {?>
<div id="voce">
    <div class="row">
    <div class="blue darken-4 dest">
            <p class="white-text">SEU TIME FAVORITO</p>
    </div>
    <?php $sql = mysql_query("SELECT DISTINCT A.banner, A.titulo, A.previa, A.titulo FROM tb_users U INNER JOIN tb_times_rel T ON T.id_time = U.fav_time_id INNER JOIN tb_artigos A ON A.id = T.id_artigo ORDER BY A.data_criacao DESC LIMIT 6");
    while ($noticia = mysql_fetch_array($sql)) { ?>
       
     <div class="col s12 m6">
        <div class="card horizontal">
          <div class="card-image">
            <img src="<?php echo 'artigos/banners/'.$noticia['banner'];?>">
            <span class="card-title"><?php echo $noticia['titulo'];?></span>
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p class=""><?php echo $noticia['previa']; ?></p>
            </div>
            <div class="card-action ">
                  <a href="post.php?q=<?=$noticia['titulo']?>" class="blue-text text-darken-2">Leia mais</a>
           </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>

    <div class="row">
    <div class="blue darken-4 dest">
            <p class="white-text">SEU JOGADOR FAVORITO</p>
    </div>
    <?php $sql = mysql_query("SELECT DISTINCT A.banner, A.titulo, A.previa, A.titulo FROM tb_users U INNER JOIN tb_pros_rel T ON T.id_pro = U.fav_pro_id INNER JOIN tb_artigos A ON A.id = T.id_artigo ORDER BY A.data_criacao DESC LIMIT 6");
    while ($noticia = mysql_fetch_array($sql)) { ?>
       
     <div class="col s12 m6">
        <div class="card horizontal">
          <div class="card-image">
            <img src="<?php echo 'artigos/banners/'.$noticia['banner'];?>">
            <span class="card-title"><?php echo $noticia['titulo'];?></span>
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p class=""><?php echo $noticia['previa']; ?></p>
            </div>
            <div class="card-action ">
                  <a href="post.php?q=<?=$noticia['titulo']?>" class="blue-text text-darken-2">Leia mais</a>
           </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>

    <div class="row">
    <div class="blue darken-4 dest">
            <p class="white-text">SEU JOGO FAVORITO</p>
    </div>
    <?php $sql = mysql_query("SELECT DISTINCT A.banner, A.titulo, A.previa, A.titulo FROM tb_users U INNER JOIN tb_games_rel T ON T.id_game = U.fav_game_id INNER JOIN tb_artigos A ON A.id = T.id_artigo ORDER BY A.data_criacao DESC LIMIT 6");
    while ($noticia = mysql_fetch_array($sql)) { ?>
       
     <div class="col s12 m6">
        <div class="card horizontal">
          <div class="card-image">
            <img src="<?php echo 'artigos/banners/'.$noticia['banner'];?>">
            <span class="card-title"><?php echo $noticia['titulo'];?></span>
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p class=""><?php echo $noticia['previa']; ?></p>
            </div>
            <div class="card-action ">
                  <a href="post.php?q=<?=$noticia['titulo']?>" class="blue-text text-darken-2">Leia mais</a>
           </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
</div>
<?php }else{ ?>
<div id="voce">
    <div class="container">
        <div class="col s12 m6">
          <div class="card blue darken-4">
            <div class="card-content white-text">
              <span class="card-title">Opa!</span>
              <p>Crie uma conta na SHIFT para obter uma ótima experiência do e-Sports</p>
            </div>
            <div class="card-action">
              <a href="login.php">Login</a>
              <a href="login.php?registro=RG">Registra-se</a>
            </div>
          </div>
        </div>
      </div>
</div>
<?php } ?>
<style type="text/css">
    .gra{
        background: linear-gradient(-90deg, rgb(64,224,208), #c8a2c8);
    }
</style>