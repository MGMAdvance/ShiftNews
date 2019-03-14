<?php
require '../check.php';
require '../../../config/conn.php';
extract($_GET);

if($troca == 1):

$sql = mysql_query("UPDATE tb_users SET nivel_user = 0 WHERE id = $id") or die(mysql_error());

else:

$sql = mysql_query("UPDATE tb_users SET nivel_user = 1 WHERE id = $id") or die(mysql_error());

endif;

header("Location:../user-listar.php");