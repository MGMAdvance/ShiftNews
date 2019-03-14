<div class="carousel carousel-slider center " data-indicators="false">

<?php $sql = mysql_query("SELECT * FROM tb_artigos ORDER BY data_criacao DESC LIMIT 3"); 
while ($banner = mysql_fetch_array($sql)) {?>
    	<a href="post.php?q=<?=$banner['titulo'];?>">
    	<div class="carousel-item red" href="#">
    		<figcaption class="legenda-carousel"><?php echo $banner['titulo'];?></figcaption>
     		<img src="<?php echo 'artigos/banners/'.$banner['banner'];?>">
    	</div>
    	</a>
<?php } ?>
</div>
