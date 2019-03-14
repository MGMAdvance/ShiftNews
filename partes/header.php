<?php require 'config/conn.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SHIFT News</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="assets/css/index.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<style type="text/css">
			/* Barra de Rolagem */
			::-webkit-scrollbar {
			width: 5px;
			}
			::-webkit-scrollbar-track {
			border-radius: 0px;
			background: rgba(0, 0, 0, 0.2);
			}
			::-webkit-scrollbar-thumb {
			-webkit-border-radius: 10px;
			border-radius: 2px;
			background: #0d47a1 ;
			}
			::-webkit-scrollbar-thumb:window-inactive {
			background: rgba(255, 51, 204, 1);
			}
			.legenda-carousel{
				position: absolute;
				right: 0;
				bottom: 0;
				left: 0;
				font-size: 3.2em;
				background-color: rgba(0,0,0, 0.5);
				text-align: center;
				color: white;
				padding-left: 0.3em;
			}
			@media screen and (max-width: 670px){
				.legenda-carousel{
					bottom: 20vh;
				}
			}
			.indicators{
				visibility: hidden;
			}
			.tabs .tab a{
				color:#0d47a1;
			}
			.tabs .tab a:hover,.tabs .tab a.active {
				background-color:transparent;
				color:#0d47a1 ;
			}
			.tabs .tab.disabled a,.tabs .tab.disabled a:hover {
				color:rgba(102,147,153,0.7);
			}
			.tabs .indicator {
				background-color:#0d47a1 ;
			}
		</style>
	</head>
	<body>

		<?php require 'partes/navbar-index.php'; ?>
		<!-- header/cabeçalho -->