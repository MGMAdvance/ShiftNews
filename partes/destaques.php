<div class="row">
<?php $sql = mysql_query("SELECT * FROM tb_artigos ORDER BY data_criacao DESC LIMIT 3 ");
while ($noticia = mysql_fetch_array($sql)) { ?>
      <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="<?php echo 'artigos/banners/'.$noticia['banner'];?>">
              <span class="card-title truncate"><?php echo $noticia['titulo'];?></span>
            </div>
            <div class="card-content truncate">
              <p class="minimize"><?php echo $noticia['previa']; ?></p>
            </div>
            <div class="card-action"">
              <a href="post.php?q=<?=$noticia['titulo']?>" class="blue-text text-darken-2">Leia mais</a>
            </div>
            </div>
      </div>

<!-- são 3 cards na area destaques -->
<?php } ?>
</div>