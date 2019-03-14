<?php require 'check.php'; 
require '../../config/conn.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Painel administrativo - SHIFT</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>
    <style type="text/css">
    header, main, footer {
    padding-left: 300px;
    }
    @media only screen and (max-width : 992px) {
    header, main, footer {
    padding-left: 0;
    }
    }
    </style>
  </head>
  <body>
    <!-- Navbar goes here -->
    <nav>
      <div class="nav-wrapper blue darken-4">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="../../index.php">Voltar</a></li>
          <li class="black"><a href="../../logout.php"><i class="material-icons">power_settings_new</i></a></li>
        </ul>
        <ul class="side-nav fixed" id="mobile-demo">
          <li><div class="user-view">
            <div class="background">
              <img src="../../artigos/banners/jinx.jpg">
            </div>
            <a href="../../perfil.php"><img class="circle" src="../../avatar/<?=$_SESSION['avatar'];?>"></a>
            <a href="#!name"><span class="white-text name"><?=$_SESSION['nome'];?></span></a>
            <a href="#!email"><span class="white-text email"><?=$_SESSION['email'];?></span></a>
          </div></li>
          <li><a href="../../index.php"><i class="material-icons">arrow_back</i>Voltar pra SHIFT</a></li>
          <li><div class="divider"></div></li>
          <!-- index admin -->
          <li><a class="collapsible-header" href="index.php"><i class="material-icons">home</i>Home</a></li>
          <!-- fim index admin -->
          <!-- artigos -->
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header">Artigos<i class="material-icons">border_color</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="post-criar.php">Criar</a></li>
                    <li><a href="post-listar.php">Editar</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <!-- fim artigos -->
          <!-- usuarios -->
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header">Usuários<i class="material-icons">account_circle</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="user-listar.php">Editar</a></li>
                    <li><a href="pro-listar.php">Jogadores profissionais</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <!-- fim usuarios -->
          <!-- Times -->
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header">Times<i class="material-icons">bookmark</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="time-listar.php">Lista</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <!-- fim times -->
          <!-- games -->
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header">Jogos<i class="material-icons">games</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="game-listar.php">Lista</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <!-- fim games -->
          <li><div class="divider"></div></li>
          <li><a class="collapsible-header" href="#!">Logout<i class="material-icons">power_settings_new</i></a></li>
        </ul>
      </div>
    </nav>
    <!-- conteudo -->

    <div class="row">
      <div class="col s12 m8 l9 offset-m4 offset-l3">
        <!-- Note that "m8 l9" was added -->