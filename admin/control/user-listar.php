<?php require 'header.php';?>
<table class="highlight">
  <thead>
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Data de registro</th>
        <th>Nível</th>
        <th>Ação</th>
    </tr>
  </thead>
  <tbody>
<?php $sql = mysql_query("SELECT * FROM tb_users ORDER BY data_registro_user DESC");
  while ($cc = mysql_fetch_array($sql)) { ?>
    <tr>

      <td>
        <div class="row valign-wrapper">
        <div class="col s2">
          <img src="../../avatar/<?=$cc['avatar_user'];?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
        </div>
        <div class="col s10">
          <span class="black-text">
            <?=$cc['nm_user'];?>
          </span>
        </div>
      </td>

      <td><?=$cc['email_user'];?></td>
      <td><?=$cc['data_registro_user'];?></td>
      <td><?php echo ($cc['nivel_user'] == 0) ? "Administrador" : "Usuário"; ?><div class="switch">
    <label>
      Off
      <input <?php echo ($cc['nivel_user'] == 0) ? "checked" : ""; ?> onclick="window.location.href='processador/user-admin.php?troca=<?=$cc['nivel_user'];?>&id=<?=$cc['id'];?>';" type="checkbox">
      <span class="lever"></span>
      On
    </label>
  </div></td>
      <td> 
          <a href="../../perfil.php?user=<?=$cc['login_user'];?>">
            <button class="btn-floating btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar">
              <i class="material-icons">visibility</i>
            </button>
          </a>

          <button class="btn-floating btn waves-effect waves-light green tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" onclick="swal('Oops','Parece que não ta pronto ein amigão!','error');">
            <i class="material-icons">mode_edit</i>
          </button>

          <button class="btn-floating btn waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Excluir" onclick="swal('Oops','Parece que não ta pronto ein amigão!','error');">
            <i class="material-icons">delete</i>
          </button>

      </td>
    </tr>
  <?php }  ?>
  </tbody>
</table>


<?php require 'footer.php';?>