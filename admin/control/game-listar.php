<?php require 'header.php';
$sql = mysql_query("SELECT * FROM tb_games");
date_default_timezone_set('GMT');
?>
<br>
<a href="game-criar.php" class="waves-effect waves-light btn blue"><i class="material-icons left">add_circle</i>Criar</a>
<table class="highlight">
  <thead>
    <tr>
        <th>Nome</th>
        <th>Desenvolvedora</th>
        <th>Genero</th>
        <th>Data de lançamento</th>
    </tr>
  </thead>
  <tbody>
<?php while ($game = mysql_fetch_array($sql)) { 
$lancamento = date_format(date_create($game['data_lancamento']), "d/m/Y");
?>
    <tr>
      <td>
        <span class="black-text">
          <?=$game['game'];?>
        </span>
      </td>

      <td>
        <span>
          <?=$game['desenvolvedora'];?>
        </span>
      </td>
      
      <td>
        <span>
          <?=$game['genero'];?>
        </span>
      </td>

      <td>
        <span>
          <?=$lancamento;?>
        </span>
      </td>

            <td> 
          <a href="../../game.php?t_nm=<?=$game['game'];?>">
            <button class="btn-floating btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar">
              <i class="material-icons">visibility</i>
            </button>
          </a>

          <button class="btn-floating btn waves-effect waves-light green tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" onclick="swal('Oops','Parece que não ta pronto ein amigão!','error');">
            <i class="material-icons">mode_edit</i>
          </button>

          <button class="btn-floating btn waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Excluir" onclick="window.location.href = 'processador/game-deletar.php?id=<?=$game['id'];?>'">
            <i class="material-icons">delete</i>
          </button>

      </td>
    </tr>
<?php } ?>
  </tbody>
</table>
<?php require 'footer.php';?>