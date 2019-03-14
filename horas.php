<?php

require 'config/conn.php';
date_default_timezone_set('UTC');
$sql = mysql_query("SELECT * FROM tb_users");

while ($cc = mysql_fetch_assoc($sql)) {
	echo date_format($cc['data_registro_user'],"Y")."<br>";
}

mysql_close();