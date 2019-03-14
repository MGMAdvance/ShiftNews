<?php require 'header.php';?>
<br>
<a href="post-criar.php" class="waves-effect waves-light btn blue"><i class="material-icons left">add_circle</i>Criar</a>
<table class="highlight">
  <thead>
    <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Data</th>
        <th>Ação</th>
    </tr>
  </thead>
  <tbody>
<?php $sql = mysql_query("SELECT titulo, nm_user, data_criacao, tb_artigos.id as id_artigo FROM tb_artigos 
  INNER JOIN tb_users ON tb_artigos.autor_id = tb_users.id ORDER BY data_criacao DESC");
  while ($cc = mysql_fetch_array($sql)) { ?>
    <tr>
      <td><?=$cc['titulo'];?></td>
      <td><?=$cc['nm_user'];?></td>
      <td><?=$cc['data_criacao'];?></td>
      <td> 
        <div class="container">

          <a href="../../post.php?q=<?=$cc['titulo'];?>">
            <button class="btn-floating waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar" name="visualizar">
              <i class="material-icons">visibility</i>
            </button>
          </a>
          
          <a href="post-editar.php?id=<?=$cc['id_artigo'];?>">
            <button class="btn-floating waves-effect waves-light green tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" name="editar">
              <i class="material-icons">mode_edit</i>
            </button>
          </a>

          <button class="btn-floating waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Excluir" name="excluir" onclick="window.location.href = 'post-deletar.php?id=<?=$cc['id_artigo'];?>'">
            <i class="material-icons">delete</i>
          </button>

        </div>
      </td>
    </tr>
  <?php }  ?>
  </tbody>
</table>
<?php require 'footer.php';?>