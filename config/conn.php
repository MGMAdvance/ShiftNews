<?php
ini_set('default_charset', 'UTF-8');
// Switch caso seja uma versão hospedada na 000WebHosting
switch ('etec') {
	case 'etec':
			$conn = mysql_connect(HOST,USER,PASS);
			$db = mysql_select_db("localdb");
		break;

		case 'web':
			$conn = mysql_connect("","","");
			$db = mysql_select_db("sql10191702");
		break;

	default:
		echo "Nenhum <strong>BANCO DE DADOS</strong> conectado";
		break;
}

?>