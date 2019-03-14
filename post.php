<?php require 'partes/header.php';
date_default_timezone_set('GMT');
if (!empty($_GET)): // Verificando se existe a variavel

if(isset($_SESSION)):

else:
  $id_user = $_SESSION['id'];
endif;

// Pegando dos dados do artigo
$nome_post = $_GET['q'];
$sql = mysql_query("SELECT * FROM tb_artigos WHERE titulo = '$nome_post'") or die(mysql_error());
while ($cc = mysql_fetch_array($sql)) {
  $post = $cc;
  $_SESSION['post-id-edit'] = $cc['id'];
  $date = date_create($cc['data_criacao']); // Criando uma data
  $id_artigo = $cc['id'];
}

// Computando +1 visualização na postagem
if (!empty($_SESSION['post-id-edit'])):
  $id = $_SESSION['post-id-edit'];
  mysql_query("UPDATE tb_artigos SET view = view +1 WHERE id = $id") or die("<script>alert('".mysql_error()."')</script>");
endif;

  if(empty($post)): // Verificando se existe o artigo
    header("Location: index.php");
  endif;

// Pegando os dados do autor
$id = $post['autor_id'];
$sql = mysql_query("SELECT id, nm_user, login_user, avatar_user FROM tb_users WHERE id = $id");
unset($id);
while ($cc = mysql_fetch_array($sql)) {
  $post['id_user'] = $cc['id'];
  $post['nm_user'] = $cc['nm_user'];
  $post['login_user'] = $cc['login_user'];
  $post['avatar_user'] = $cc['avatar_user'];
}

else:
  header("Location: index.php");
endif;
?>
<!-- Conteudo -->
<div class="parallax-container" style="background-color: rgba(0,0,0, 0.5);">
    <div class="parallax">
      <img src="artigos/banners/<?=$post['banner'];?>">
    </div>
    <!-- VERSAO 1
    <div class="container" style="right: 0; bottom: 0; left: 0; position: absolute;">
      <h1><?=$post['titulo'];?></h1>
    </div>
    -->

    <!-- VERSAO ROCKIS
    <div class="container" style="right: 0; bottom: 0; left: 0; position: absolute;">
      <h1 class="white-text"><?=$post['titulo'];?></h1>
    </div>
    -->

    <div class="container" style="text-align: center; bottom: 40%;right: 15%;position: absolute;">
      <h1 class="white-text"><?=$post['titulo'];?></h1>
    </div>
</div>

  <div class="section white">
    <div class="row container">
      <!-- Titulo -->
      <!-- <h2 class="tit"><?=$post['titulo'];?></h2> -->
      <!-- Titulo -->
      <!-- Sub-Titulo -->
      <h6 class="subt"><!-- criar uma descrição no futuro --></h6>
      <!-- Sub-Titulo -->
      <br>

      <!-- Texto -->
      <p class="grey-text text-darken-3 lighten-3 text"><?=$post['conteudo'];?></p>
      <!-- Texto -->
    </div>
  </div>

<!-- Créditos -->
   <div class="row">
    <div class="col offset-s1">
      <h6 class="cred">
        Visualizações: <?=$post['view'];?>
      </h6> 
    </div>
    <div class="col s5 offset-s7">
      <h6 class="cred">Publicado em <?=date_format($date, 'd/m/Y á&#x73; g:i A');?> - Postagem feita por <a href="perfil.php?user=<?=$post['login_user'];?>"><div class="chip col offset-m5">
    <img src="avatar/<?=$post['avatar_user'];?>" alt="Contact Person">
    <?=$post['nm_user'];?>
  </div></a></h6>
    </div>
  </div>
<!-- Créditos -->

<!-- Comentários -->
  <div class="row">
    <div class="col s10 offset-s1">
      <h3 class="coment">Comentários</h3>
    </div>
  </div>
  <div class="row">
    <form method="POST" action="partes/comentar.php" class="col s10 offset-s1">
      <div class="row">
        <div class="input-field col s12">
          <input hidden type="text" value="<?=$id_artigo;?>" name="id_artigo">
          <input hidden type="text" value="<?=$id_user;?>" name="id_user">
          <input hidden type="text" value="<?=$_GET['q'];?>" name="nome_artigo">
          <textarea id="textarea1" name="comentario" maxlength="360" class="materialize-textarea"></textarea>
          <label for="textarea1">Escreva um comentário</label>
            <button class="btn waves-effect waves-light blue darken-4" type="submit" name="comey">Enviar
    <i class="material-icons right">send</i>
  </button>
        </div>
      </div>
    </form>
  </div>

<div class="row">
    <div class="col s10 offset-s1">
      <ul class="collection">
<?php $sql = mysql_query("SELECT C.id, C.criado, C.artigo_id, C.comentario, C.user_id, U.avatar_user, U.nm_user, U.id, U.login_user  FROM tb_comentarios C INNER JOIN tb_users U ON C.user_id = U.id WHERE C.artigo_id = $id_artigo");
while ($cc = mysql_fetch_array($sql)) { ?>
   <li class="collection-item avatar">
          <a href="perfil.php?user=<?=$cc['login_user'];?>">
            <img src="avatar/<?=$cc['avatar_user'];?>" alt="" class="circle perfil">
            <p><span class="title"><?=$cc['nm_user'];?></span><span class="horas">&nbsp;&nbsp;&nbsp; <?=$cc['login_user'];?></span></p>
          </a>
          <p><?=$cc['comentario'];?></p>
          <button class="but" onclick="Materialize.toast('Você curtiu esse comentário!', 4000)"><i class="tiny material-icons like tooltipped" data-position="top" data-delay="50"  data-tooltip="Gostei">thumb_up</i></button>
          <button class="but" onclick="Materialize.toast('Você não curtiu esse cometário!', 4000)"><i class="tiny material-icons deslike tooltipped" data-position="top" data-delay="50"  data-tooltip=" Não gostei">thumb_down</i></button>
          <button class="but" onclick="Materialize.toast('Esta mensagem foi reportada!', 4000)"><i class="tiny material-icons report tooltipped" data-position="top" data-delay="50" data-tooltip="Reportar">error_outline</i></button>
          <input type="button" id="res" name="responder" value="Responder" class="resp">
          <!-- resposta -->
          <div id="resposta" class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea"></textarea>
                  <label for="textarea1">Textarea</label>
                  <button id="res-fechar" class="fec"><i class="material-icons">close</i></button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
</div>
    <!-- Comentários -->
<!-- Conteudo -->

<?php require 'partes/footer.php'; ?>