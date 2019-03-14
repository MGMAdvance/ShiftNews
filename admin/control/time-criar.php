<?php require 'header.php'; ?>
<br>
<form method="POST" action="processador/time-enviar.php" enctype="multipart/form-data">
<h5>Criar time</h5>
<br>
  <div class="input-field col s12">
      <i class="material-icons prefix">turned_in</i>
      <input id="first_name2" name="nome_time" required type="text" class="validate">
      <label class="active" for="first_name2">Nome do time</label>
  </div>

  <div class="row"></div>

  <div class="file-field input-field">
      <div class="btn">
        <span>Foto</span>
        <input type="file" name="banner_time">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" placeholder="Insira uma foto (640x360)" name="banner_time" type="text">
      </div>
  </div>

  <div class="row">

    <div class="input-field col s12">
      <i class="material-icons prefix">account_circle</i>
      <input type="text" name="fundador_time" id="autocomplete-input" class="nm_user">
      <label for="autocomplete-input">Nome do fundador</label>
    </div>

  </div>

  <div class="row">
    <label for="dtNa">Quando foi fundado</label>
    <input type="text" id="dtNa" name="fundado" class="fundado">
  </div>

  <div class="row">

    <div class="input-field col s12">
      <i class="material-icons prefix">home</i>
      <input type="text" name="local_fundado" id="autocomplete-input" class="time_id">
      <label for="autocomplete-input">Local que foi fundado</label>
    </div>

  </div>

  <div class="row">

  <p class="range-field">
      <label for="num_titulos">Número de Titulos</label>
      <input type="range" id="num_titulos" name="num_titulos" min="0" max="100" />
  </p>
  </div>

	<div class="row">
        <div class="input-field col s12">
          <textarea id="descricao" name="descricao" maxlength="200" class="materialize-textarea"></textarea>
          <label for="descricao">Descrição do time</label>
        </div>
	</div>

  <br>

  <button class="btn waves-effect waves-light" type="submit">Criar
    <i class="material-icons right">send</i>
  </button>
  <button class="btn waves-effect waves-light  blue-grey lighten-3" type="reset">Limpar
    <i class="material-icons right">cached</i>
  </button>

</form>
<?php require 'footer.php';?>
<script type="text/javascript">
	$(document).ready(function(){

		   $('.fundado').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Hoje',
    clear: 'Limpar',
    close: 'Confirmar',
    closeOnSelect: false, // Close upon selecting a date,
    formatSubmit: "d/m/yyyy",
    hiddenName: true,
  });

		   $('textarea#descricao').characterCounter();

	});
</script>