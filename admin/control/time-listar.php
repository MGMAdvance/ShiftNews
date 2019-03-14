<?php require 'header.php';
$sql = mysql_query("SELECT * FROM tb_times");
date_default_timezone_set('GMT');
?>
<br>
<a href="time-criar.php" class="waves-effect waves-light btn blue"><i class="material-icons left">add_circle</i>Criar</a>
<table class="highlight">
  <thead>
    <tr>
        <th>Nome</th>
        <th>Criado</th>
        <th>Fundador</th>
    </tr>
  </thead>
  <tbody>
<?php while ($time = mysql_fetch_array($sql)) { 
$quando = date_format(date_create($time['criado_time']), "d/m/Y")
?>
    <tr>
      <td>
        <span class="black-text">
          <?=$time['nome_time'];?>
        </span>
      </td>

      <td>
        <span>
          <?=$quando;?>
        </span>
      </td>
      
      <td>
        <span>
          <?=$time['criador_time'];?>
        </span>
      </td>

            <td> 
          <a href="../../time.php?t_nm=<?=$time['nome_time'];?>">
            <button class="btn-floating btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar">
              <i class="material-icons">visibility</i>
            </button>
          </a>

          <button class="btn-floating btn waves-effect waves-light green tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" onclick="swal('Oops','Parece que não ta pronto ein amigão!','error');">
            <i class="material-icons">mode_edit</i>
          </button>

          <button class="btn-floating btn waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Excluir" onclick="window.location.href = 'processador/time-deletar.php?id=<?=$time['id'];?>'">
            <i class="material-icons">delete</i>
          </button>

      </td>
    </tr>
<?php } ?>
  </tbody>
</table>
<?php require 'footer.php';?>