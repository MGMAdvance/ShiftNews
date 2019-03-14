<?php require 'partes/header.php'; 
if (empty($_GET)):
  $username = $_SESSION['login'];
  // Se não tiver algum username digitado
  $sql = mysql_query("SELECT * FROM tb_users WHERE login_user = '$username' ");
else:
  // Se tiver algum username digitado
  $username = $_GET['user'];
  $sql = mysql_query("SELECT * FROM tb_users WHERE login_user = '$username' ");
endif;
while ($cc = mysql_fetch_array($sql)) {
  $perfil = $cc;
  $id_time = $cc['fav_time_id'];
  $id_game = $cc['fav_game_id'];
  $id_pro = $cc['fav_pro_id'];
  // SELECTs para pegar as infos da tb_times, games e proPlayers
   
  if (empty($id_time)):
    $time['game'] = "nada";
  else:
    $query = mysql_query("SELECT * FROM tb_times WHERE id = $id_time") or die(mysql_error());
    while ($aa = mysql_fetch_array($query) ) {
      $time = $aa;
    }
  endif;

  if (empty($id_pro)):
    $pro['game'] = "nada";
  else:
    $query = mysql_query("SELECT * FROM tb_proPlayers WHERE id = $id_pro") or die(mysql_error());
    while ($aa = mysql_fetch_array($query) ) {
      $pro = $aa;
    }
  endif;

  if (empty($id_game)):
    $game['game'] = "nada";
  else:
    $query = mysql_query("SELECT * FROM tb_games WHERE id = $id_game") or die(mysql_error());
    while ($aa = mysql_fetch_array($query) ) {
      $game = $aa;
    }
  endif;
}
?>

<style type="text/css">
.tabs .tab a{
    color:#0d47a1;
  }
  .tabs .tab a:hover,.tabs .tab a.active {
    background-color:transparent;
    color:#0d47a1 ;
  }
  .tabs .tab.disabled a,.tabs .tab.disabled a:hover {
    color:rgba(102,147,153,0.7);
  }
  .tabs .indicator {
    background-color:#0d47a1 ;
  }
  .cinzado{
    background-color: rgb(182, 182, 182);
  }
</style>

<div class="parallax-container" style="height: 23em;">
    <div class="parallax">
      <img src="imagens/banner_user/<?=$perfil['banner_user'];?>">
    </div>
</div>

  <div class="section white">
    <div class="container">
      <div class="col s12 m6">
         <img src="avatar/<?=$perfil['avatar_user'];?>" class="ftperfil">
        <h4 class="header name" style="margin-top: -130px;"><?=$perfil['nm_user'];?></h4>
        <p class="usuario" style="margin-top:-20px;font-size: 23px;" ><?=$perfil['login_user'];?></p>
      </div>
    </div>
<br><br>
    <div class="row ">
      <div class="col s12 m4">
        <span style="vertical-align: center;
  font-family: 'Oswald', sans-serif; 
  font-size: 20px;">Time favorito</span>
        <div class="card hoverable">
          <a href="time.php?t_nm=<?=$time['nome_time'];?>">
            <div class="card-image">
              <img src="imagens/banner_time/<?=$time['banner_time'];?>">
              <span class="card-title"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col s12 m4">
        <span style="vertical-align: center;
  font-family: 'Oswald', sans-serif; 
  font-size: 20px;">Jogador favorito</span>
        <div class="card hoverable">
          <a href="pro.php?t_nm=<?=$pro['nickname'];?>">
            <div class="card-image">
              <img src="imagens/banner_pro/<?=$pro['banner_pro'];?>">
              <span class="card-title"><?=$pro['nickname'];?></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col s12 m4">
        <span style="vertical-align: center;
  font-family: 'Oswald', sans-serif; 
  font-size: 20px;">Jogo favorito</span>
        <div class="card hoverable">
          <a href="game.php?t_nm=<?=$game['game'];?>">
            <div class="card-image">
              <img src="imagens/banner_game/<?=$game['banner_game'];?>">
              <span class="card-title"></span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
        <div class="card">
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a href="#test4">Atividades</a></li>
              <li class="tab"><a class="active" href="#test5">Artigos</a></li>
            </ul>
          </div>
          <div class="card-content grey lighten-4">
            <div id="test4">
             
              <div class="col s12 m9">

              <p>Não há registros</p>
              <!--
              <a class="twitter-timeline" href="https://twitter.com/MatheusGT4?ref_src=twsrc%5Etfw">Tweets by MatheusGT4</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              -->
              </div>
              <div class="col s12 m3">
                <!-- Facebook -->
              </div>
            </div>
            <div id="test5">
<?php $autor = $perfil['id'];
$sql = mysql_query("SELECT * FROM tb_artigos WHERE autor_id = $autor") or die(mysql_error());?>
               <ul class="collection">
               <?php 
               if (!mysql_num_rows($sql) <= 0):
               while ($cc = mysql_fetch_array($sql)) {?>
                 <li class="collection-item avatar">
                  <a href="post.php?q=<?php echo urlencode($cc['titulo'])?>">
                    <img src="artigos/banners/<?=$cc['banner']?>" alt="miniatura" class="circle">
                  </a>
                  <a href="post.php?q=<?php echo urlencode($cc['titulo'])?>">
                    <span class="title"><?=$cc['titulo']?></span>
                  </a>
                  <p class="truncate"><?=$cc['previa']?>
                  </p>
                  <a href="post.php?q=<?php echo urlencode($cc['titulo'])?>" class="secondary-content tooltipped" data-position="top" data-delay="50" data-tooltip="Ler mais"><i class="material-icons">blur_on</i></a>
                </li><?php
               }
               else:?>
                <li class="collection-item avatar">
                  <img src="avatar/1.jpg" alt="" class="circle">
                  <span class="title">Esse usuário não publicou nada ainda</span>
                </li><?php
               endif;
               ?>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php require 'partes/footer.php'; ?>