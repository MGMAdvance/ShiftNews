<?php
session_start();

if(empty($_SESSION['admin'])){
	unset($_SESSION);
	session_destroy();
	echo"<script language='javascript' type='text/javascript'>alert('Você não esta logado como administrador!');window.location.href='../../';</script>"; // ../../ vai pra index blz?
}