<?php require 'partes/header.php'; 
$id_s = $_SESSION['id'];
$sql = mysql_query("SELECT * FROM tb_users WHERE id = $id_s");
while ($cc = mysql_fetch_array($sql)) {
	$pre = $cc;
  $id_jogo = $pre['fav_game_id'];
  $s = mysql_query("SELECT fundo FROM tb_games WHERE id = $id_jogo");
  while ($gg = mysql_fetch_array($s)) {
    $fundo = $gg['fundo'];
  }
}
?>
<style type="text/css">
	body{
		background: url('imagens/preferencias/<?php echo isset($fundo) ? $fundo:"league.jpg"; ?>') no-repeat fixed center; 
	}
</style>

   <div class="row">
      <div class="col s12 m6 offset-m3 form white">
        <!-- BANNER -->
        <center>
        <h3>EDITAR PERFIL</h3>
        </center>
        <div class="card">
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#dados">Dados pessoais</a></li>
              <li class="tab"><a href="#preferencias">Preferências</a></li>
              <li class="tab"><a href="#senha">Senha</a></li>
            </ul>
          </div>
          <div id="dados">
            <form method="POST" action="config/config-pessoal.php" enctype="multipart/form-data">
              <div class="input-field col s12 m12">
                <div class="file-field input-field">
                  <div class="btn blue darken-4">
                    <span>Perfil</span>
                    <input type="file" name="foto_perfil">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" value="<?=$pre['avatar_user'];?>" name="foto_perfil" type="text" placeholder="Envie sua foto de perfil (180x180)">
                  </div>
                </div>
                
                <!-- FOTO DE PERFIL -->
                <div class="file-field input-field">
                  <div class="btn blue darken-4">
                    <span>Capa</span>
                    <input type="file" name="foto_capa">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" value="<?=$pre['banner_user'];?>" name="foto_capa" type="text" placeholder="Envie sua foto de capa (180x180)">
                  </div>
                </div>
                
                <div class="input-field col s12 m8">
                  <i class="material-icons prefix">person</i>
                  <input id="input_text" name="nome" value="<?=$pre['nm_user'];?>" type="text">
                  <label class="black-text" for="input_text">Nome</label>
                </div>
                <div class="input-field col s12 m12">
                  <i class="material-icons prefix">email</i>
                  <input id="input_text" name="email" value="<?=$pre['email_user'];?>" type="email">
                  <label class="black-text" for="input_text">Email</label>
                </div>
                <!--
                <div class="input-field col s12 m6">
                  <input id="input_text" type="text">
                  <label class="black-text" for="input_text">Twitter</label>
                </div>
                <div class="input-field col s12 m6">
                  <input id="input_text" type="text">
                  <label class="black-text" for="input_text">Facebook</label>
                </div>
                -->
                
                <button class="btn waves-effect waves-light right blue darken-4" type="submit">Salvar
                </button>
              </div>
            </form>
           <!-- dados pessoais -->
           <!-- Preferencias do USUARIO -->
            </div> 
            <div id="preferencias">
              <form method="POST" action="config/config-pre.php">
               <div class="input-field col s12 m12">              
                <div class="row">
                  <div class="col s12">
                    <div class="row">
                        <i class="material-icons prefix">person</i>
                        <input type="text" id="autocomplete-input" name="jogador" class="jogador">
                        <label for="autocomplete-input">Jogador</label> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="input-field col s12 m6">              
                <div class="row">
                  <div class="col s12">
                    <div class="row">
                        <i class="material-icons prefix">games</i>
                        <input type="text" id="autocomplete-input" name="jogo" class="jogo">
                        <label for="autocomplete-input">Jogo</label> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="input-field col s12 m6">              
                <div class="row">
                  <div class="col s12">
                    <div class="row">
                        <i class="material-icons prefix">turned_in</i>
                        <input type="text" id="autocomplete-input" name="time" class="time">
                        <label for="autocomplete-input">Time</label> 
                    </div>
                  </div>
                </div>
              </div>

                <button class="btn waves-effect waves-light right blue darken-4" type="submit" name="action">Salvar
                </button>
              </form>
              </div> <!-- preferencias -->
              
            <div id="senha">
              <form method="POST" action="config/config-senha.php">
                
                <!--
                <div class="input-field col s12 m7">
                  <input id="input_text" type="text">
                  <label class="black-text" for="input_text">Senha</label>
                </div>
                -->
                <div class="input-field col s12 m6">
                  <input id="password" name="senha" type="password">
                  <label class="black-text" for="password">Nova senha</label>
                </div>
                <div class="input-field col s12 m6">
                  <input id="confirm_password" name="confirmar_senha" type="password">
                  <label class="black-text" for="confirm_password">Confirmar nova senha</label>
                </div>
                
                <button class="btn waves-effect waves-light right blue darken-4" type="submit" name="action">Salvar
                </button>
              </form>
            </div>
 		</div>
 	</div>
 </div>
<div style="height: 350px;"></div>
<script type="text/javascript">
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

  function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Senhas diferentes!");
    } else {
      confirm_password.setCustomValidity('');
    }
  }

  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
</script>

<?php require 'partes/footer.php'; 
require 'config/conn.php';
?>
<script type="text/javascript">
    $(function () {
  $('input.jogador').autocomplete({
    data: {
    <?php $query = mysql_query("SELECT * FROM tb_proPlayers");
      while ($aa = mysql_fetch_array($query)) { ?>
        "<?=$aa['nickname'];?>":"imagens/banner_pro/<?=$aa['banner_pro'];?>",
    <?php } ?>
    }
  });
  $('input.jogo').autocomplete({
    data: {
    <?php $query = mysql_query("SELECT * FROM tb_games");
      while ($aa = mysql_fetch_array($query)) { ?>
        "<?=$aa['game'];?>":"imagens/banner_game/<?=$aa['banner_game'];?>",
    <?php } ?>
    }
  });
  $('input.time').autocomplete({
    data: {
    <?php $query = mysql_query("SELECT * FROM tb_times");
      while ($aa = mysql_fetch_array($query)) { ?>
        "<?=$aa['nome_time'];?>":"imagens/banner_time/<?=$aa['banner_time'];?>",
    <?php } ?>
    }
  });
});
</script>