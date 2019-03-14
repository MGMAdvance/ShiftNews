<?php

session_start();
if (empty($_SESSION['admin'])) {
	unset($_SESSION);
	session_destroy();
}else{
	if ($_SESSION['admin'] == true){
		header("Location:control/index.php");
	}else{

	}
}
