<div class="row">
<?php $sql = mysql_query("SELECT * FROM tb_artigos ORDER BY data_criacao DESC LIMIT 6 ");
while ($noticia = mysql_fetch_array($sql)) { ?>
   
 <div class="col s12 m6">
    <div class="card horizontal">
      <div class="card-image">
        <img src="<?php echo 'artigos/banners/'.$noticia['banner'];?>">
        <span class="card-title"><?php echo $noticia['titulo'];?></span>
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p class=""><?php echo $noticia['previa']; ?></p>
        </div>
        <div class="card-action ">
              <a href="post.php?q=<?=$noticia['titulo']?>" class="blue-text text-darken-2">Leia mais</a>
       </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>