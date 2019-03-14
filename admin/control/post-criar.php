<?php require 'header.php';
$ff = mysql_query("SELECT * FROM tb_games");
$sql_pro = mysql_query("SELECT * FROM tb_proPlayers");
$sql_time = mysql_query("SELECT * FROM tb_times");
$sql_game = mysql_query("SELECT * FROM tb_games");
?>
<script type="text/javascript" src="tinymce.min.js"></script>

<form method="POST" id="formula" action="post-enviar.php" enctype="multipart/form-data">
<!-- action="post-enviar.php" -->
<h5>Criar artigo</h5>
<br>
  <div class="input-field col s12">
      <input id="first_name2" name="titulo" required type="text" class="validate">
      <label class="active" for="first_name2">Nome do artigo</label>
  </div>

  <div class="row"></div>

  <div class="file-field input-field">
      <div class="btn blue darken-4">
        <span>CAPA</span>
        <input type="file" name="userfile">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" name="userfile" type="text">
      </div>
      
  </div>
  <div class="row"></div>

  <div class="row">
    <div class="input-field col s12">
      <input id="input_text" type="text" name="previa" maxlength="100" data-length="100">
      <label for="input_text">Prévia</label>
    </div>
  </div>

  <textarea name="conteudo" required>Vamo lá!</textarea>
  <br>

<h5>Gerenciador de partidas</h5>
<fieldset>

  <p>Jogadores relacionados</p>
  <div id="divjogadores" class="chips jogadores"></div>

  <p>Times relacionados</p>
  <div id="divtimes" nome="times" class="chips times"></div>

  <p>Jogos relacionados</p>
  <div id="divjogos" nome="jogos" class="chips jogos"></div>
<!--
   <div class="row">
    <div class="input-field col s12">
      <select required name="game_id">
        <option value="" disabled selected>Qual jogo está relacionado?</option>
<?php while ($cc = mysql_fetch_array($ff)) { ?>
        <option value="<?=$cc['id'];?>" data-icon="../../imagens/banner_game/<?=$cc['banner_game'];?>" class="circle"><?=$cc['game'];?></option>
<?php } ?>        
      </select>
      <label>Selecione o jogo</label>
    </div>
  </div>
-->
</fieldset>
<br>

  <button class="btn waves-effect waves-light blue darken-4" id="enviar" type="submit">Criar
    <i class="material-icons right">send</i>
  </button>
  <button class="btn waves-effect waves-light  blue-grey lighten-3" type="reset">Limpar
    <i class="material-icons right">cached</i>
  </button>

</form>

<script type="text/javascript" src="js/editor.js"></script>

<?php require 'footer.php';?>
<script type="text/javascript" src="js/cookie.js"></script>
<script type="text/javascript">
$(document).ready(function() {
<?php require '../../config/conn.php'; ?>
    $('select').material_select();

      $('.chips').material_chip();
     $('.jogadores').material_chip({

      autocompleteOptions: {
        data: {
<?php while ($pro = mysql_fetch_array($sql_pro)) { ?>
          '<?=$pro['nickname'];?>': null,
<?php } ?>
        },
        limit: 5,
        minLength: 1
      }
    });

     $('.times').material_chip({
      autocompleteOptions: {
        data: {
<?php while ($pro = mysql_fetch_array($sql_time)) { ?>
          '<?=$pro['nome_time'];?>': null,
<?php } ?>
        },
        limit: 5,
        minLength: 1
      }
    });

     $('.jogos').material_chip({
      autocompleteOptions: {
        data: {
<?php while ($pro = mysql_fetch_array($sql_game)) { ?>
          '<?=$pro['game'];?>': null,
<?php } ?>
        },
        limit: Infinity,
        minLength: 1
      }
    });

  var jogadores = $('.jogadores').material_chip('data');
  var times = $('.times').material_chip('data');


// enviando cookies
  $("#enviar").click(function(event){

    // PRO PLAYERS
    var data= $('#divjogadores').material_chip('data');
      
    createCookie('jogador_cookie',JSON.stringify(data));


    // TIMES
    var data= $('#divtimes').material_chip('data');
      
    createCookie('time_cookie',JSON.stringify(data));

    // GAMES
    var data= $('#divjogos').material_chip('data');
      
    createCookie('game_cookie',JSON.stringify(data));
  });

});



</script>