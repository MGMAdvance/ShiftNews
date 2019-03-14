<?php
require '../config/conn.php';
  if (!$_POST['comey']) {
    extract($_POST);
    $com = mysql_query("INSERT INTO tb_comentarios (artigo_id, user_id, comentario) VALUES ($id_artigo, $id_user, '$comentario')") or die(mysql_error());
    header("Location:../post.php?q=$nome_artigo");
  }else{

  }