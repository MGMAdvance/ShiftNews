<?php require 'header.php';
date_default_timezone_set('GMT');
$sql = mysql_query("SELECT count(id) as quantos FROM tb_artigos");
$sql2 = mysql_query("SELECT titulo, data_criacao, autor_id, nm_user, view FROM tb_artigos
  INNER JOIN tb_users ON tb_artigos.autor_id = tb_users.id 
  ORDER BY data_criacao DESC");
?>
<div class="valign-wrapper">
  <h3 class="orange-text">Painel</h3>
</div>
<div class="col s12 m6">
  <div class="card">
    <div class="card-content">
      <span class="card-title orange-text">Artigos</span>
      <?php // O TOTAL DE ARTIGOS NO BANCO
        while ($cc = mysql_fetch_array($sql)) {?>
          <p>Total de artigos: <span class="blue-text"><?=$cc['quantos']?></span></p>
          <div class="divider"></div>
      <?php }
        while ($cc = mysql_fetch_array($sql2)) { 
          $date = date_create($cc['data_criacao']); ?>
          <p>Último artigo: <span class="blue-text"><?=$cc['titulo']?></span> ás <span class="blue-text"><?=date_format($date, 'g:i A | d/m/Y');?></span></p>
          <p>Postado por: <span class="blue-text"><?=$cc['nm_user']?></span></p>
          <p>Visualizações: <span class="blue-text"><?=$cc['view']?></span></p>
      <?php break;}?>
    </div>
  </div>
</div>

<?php require 'footer.php';?>