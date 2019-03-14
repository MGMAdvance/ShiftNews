<?php require 'header.php';
extract($_GET);
$ka = mysql_query("SELECT * FROM tb_proPlayers WHERE id = $id");
$sql = mysql_query("SELECT * FROM tb_users");
$aa = mysql_query("SELECT * FROM tb_times");
$ff = mysql_query("SELECT * FROM tb_games");
while ($pro = mysql_fetch_array($ka)) {
  $edit = $pro;
  $tt_id = $pro['time_id'];
  $tt = mysql_query("SELECT * FROM tb_times WHERE id = $tt_id");
  while ($cc = mysql_fetch_array($tt)) {
    $time = $cc['nome_time'];
  }
}

?>
<br>
<form method="POST" action="processador/pro-editar-p.php" enctype="multipart/form-data">

  <div class="input-field col s12">
      <i class="material-icons prefix">person</i>
      <input id="first_name2" name="nome_pro" value="<?=$edit['nome_pro'];?>" required type="text" class="validate">
      <label class="active" for="first_name2">Nome do jogador</label>
  </div>

  <div class="row"></div>

  <div class="file-field input-field">
      <div class="btn blue darken-4">
        <span>Foto</span>
        <input type="file" value="<?=$edit['banner_pro'];?>" name="userfile">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" value="<?=$edit['banner_pro'];?>" placeholder="Insira uma foto (640x360)" name="userfile" type="text">
      </div>
  </div>

  <div class="row">

    <div class="input-field col s12">
      <i class="material-icons prefix">account_circle</i>
      <input type="text" name="nm_user" value="<?=$edit['nm_user'];?>" id="autocomplete-input" class="nm_user">
      <label for="autocomplete-input">Nome de usuário (Caso tiver conta na SHIFT)</label>
    </div>

  </div>

  <div class="row">

    <div class="input-field col s12">
      <i class="material-icons prefix">turned_in</i>
      <input type="text" name="time_id" value="<?=$time;?>" autocomplete="off" id="autocomplete-input" class="time_id">
      <label for="autocomplete-input">Time</label>
    </div>

  </div>

  <div class="row">

  <p class="range-field">
      <label for="num_titulos">Número de Titulos</label>
      <input type="range" value="<?=$edit['num_titulos'];?>" id="num_titulos" name="num_titulos" min="0" max="100" />
  </p>
  </div>

  <div class="row">
    <label for="dtNa">Data de nascimento</label>
    <input type="text" value="<?=$edit['data_nascimento'];?>" id="dtNa" name="data_nascimento" class="data_nascimento">
  </div>

  <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">explore</i>
      <input id="nacio" value="<?=$edit['nacionalidade'];?>" type="text" name="nacionalidade">
      <label for="nacio">Nacionalidade</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">home</i>
      <input id="input_text" value="<?=$edit['cidade_pro'];?>" type="text" name="cidade_natal">
      <label for="input_text">Cidade natal</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">contacts</i>
      <input id="input_text" value="<?=$edit['nickname'];?>" type="text" required name="nickname" maxlength="75" data-length="75">
      <label for="input_text">Nickname</label>
    </div>
  </div>

  <div class="row">  
    <div class="input-field col s12">
      <select required name="game_id">
        <option value="" disabled selected>Qual jogo ele é profissional?</option>
<?php while ($cc = mysql_fetch_array($ff)) { ?>
        <option value="<?=$cc['id'];?>" data-icon="../../imagens/banner_game/<?=$cc['banner_game'];?>" class="circle"><?=$cc['game'];?></option>
<?php } ?>        
      </select>
      <label>Selecione o jogo</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <select name="tipo_pro">
        <option value="" disabled selected>Ele é o que?</option>
        <option value="2">Técnico</option>
        <option value="0">Titular</option>
        <option value="1">Reserva</option>
      </select>
      <label>No time</label>
    </div>
  </div>
  <br>
  
  <input type="text" hidden value="<?=$_GET['id'];?>" name="id_jogador">

  <button class="btn waves-effect waves-light blue darken-4" type="submit">Criar
    <i class="material-icons right">send</i>
  </button>
  <button class="btn waves-effect waves-light  blue-grey lighten-3" type="reset">Limpar
    <i class="material-icons right">cached</i>
  </button>

</form>
<?php require 'footer.php';?>
<script type="text/javascript" src="js/pt_BR.js"></script>
<script type="text/javascript">
$(document).ready(function(){

   // Conta relacionada
   $('input.nm_user').autocomplete({
    data: {
<?php while ($cc = mysql_fetch_array($sql)) { ?>
      "<?=$cc['login_user'];?>": "../../avatar/<?=$cc['avatar_user'];?>",
<?php } ?> // Puxando contas relacionadas ao pro player
    }
  });

   // Time Relacionado
   $('input.time_id').autocomplete({
    data: {
<?php while ($cc = mysql_fetch_array($aa)) { ?>
      "<?=$cc['nome_time'];?>": "../../imagens/banner_time/<?=$cc['banner_time'];?>",
<?php } ?> // Puxando contas relacionadas ao pro player
    }
  });

   $('.data_nascimento').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Hoje',
    clear: 'Limpar',
    close: 'Confirmar',
    closeOnSelect: false, // Close upon selecting a date,
    formatSubmit: "d/m/yyyy",
    hiddenName: true,
  });

      // Game Relacionado
   $('input.game_id').autocomplete({
    data: {
<?php while ($cc = mysql_fetch_array($ff)) { ?>
      "<?=$cc['game'];?>": "../../imagens/banner_game/<?=$cc['banner_game'];?>",
<?php } ?> // Puxando contas relacionadas ao pro player
    }
  });

   $('select').material_select();
});
</script>