<?php
require '../check.php';
require '../../../config/conn.php';

$id = $_GET['id'];

$sql = mysql_query("DELETE FROM tb_proPlayers WHERE id = $id") or die(mysql_error());
header("Location:../pro-listar.php");