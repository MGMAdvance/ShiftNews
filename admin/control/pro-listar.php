<?php require 'header.php';?>
<br>
<a href="pro-criar.php" class="waves-effect waves-light btn blue"><i class="material-icons left">add_circle</i>Criar</a>
<table class="highlight">
  <thead>
    <tr>
        <th>Nome</th>
        <th>Nick</th>
        <th>Time</th>
        <th>Função</th>
        <th>Game</th>
    </tr>
  </thead>
  <tbody>
<?php $sql = mysql_query("SELECT * FROM tb_proplayers");
  while ($cc = mysql_fetch_array($sql)) {
    // Niveis de proPlayers
    // 0 = Titular
    // 1 = Reserva
    // 2 = Técnico
    if($cc['nivel_pro'] == 0){
      $cc['nivel_pro'] = "Titular";
    }elseif ($cc['nivel_pro'] == 1) {
      $cc['nivel_pro'] = "Reserva";
    }elseif ($cc['nivel_pro'] == 2){
      $cc['nivel_pro'] = "Técnico";
    }
   ?>
    <tr>

      <td>
        <div class="row valign-wrapper">
        <div class="col s10">
          <span class="black-text">
            <?=$cc['nome_pro'];?>
          </span>
        </div>
      </td>

      <td><?=$cc['nickname'];?></td>
      <?php 
      	$time = $cc['time_id'];
      	$aa = mysql_query("SELECT * FROM tb_times WHERE id = $time");
      	while ($q = mysql_fetch_array($aa)) { 
          if (empty($q['nome_time'])) { ?>
            <td>Sem time</td>
         <?php }else{
          ?>
      		<td><?=$q['nome_time'];?></td>
      <?php
          }
      	}
?>
        <td><?=$cc['nivel_pro'];?></td>

<?php
      	$game = $cc['game_id'];
      	$aa = mysql_query("SELECT * FROM tb_games WHERE id = $game");
      	while ($q = mysql_fetch_array($aa)) { 
          if(empty($q['game'])){
            $q['game'] = "Sem jogo";
          }else{
          ?>
      		<td><?=$q['game'];?></td>
      <?php
          }
      	}
      ?>
      <td> 
          <a href="../../pro.php?t_nm=<?=$cc['nickname'];?>">
            <button class="btn-floating btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar">
              <i class="material-icons">visibility</i>
            </button>
          </a>

          <button class="btn-floating btn waves-effect waves-light green tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" onclick="window.location.href = 'pro-editar.php?id=<?=$cc['id'];?>';">
            <i class="material-icons">mode_edit</i>
          </button>

          <button class="btn-floating btn waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Excluir" onclick="window.location.href = 'processador/pro-deletar.php?id=<?=$cc['id'];?>'">
            <i class="material-icons">delete</i>
          </button>

      </td>
    </tr>
  <?php }  ?>
  </tbody>
</table>
<?php require 'footer.php';?>