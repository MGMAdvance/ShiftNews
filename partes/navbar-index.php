<header>
<?php session_start();
if (isset($_SESSION['login'])) : // caso estiver logado 
  switch ($_SESSION['nivel']) {
    case '0':
    // VERSÃO ADMIN
    ?>
  <nav>
    <div class="nav-wrapper blue darken-4">
      <a href="index.php" class="brand-logo"><img src="assets/imgs/logo-trans.png" class="img"></a>
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

      <ul class="right hide-on-med-and-down">
        <li><a href="admin/control">Painel</a></li>
        <!-- MENU BAR -->
        <li><a class="modal-trigger" href="#pesquisa-modal"><i class="material-icons">search</i></a></li>
        <li><a class="dropdown-button black" href="#!" data-activates="dropdown1"><?php echo $_SESSION['nome'];?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

  <!-- SIDENAV / MOBILE -->
      <ul class="side-nav" id="mobile-demo">
        <li>
          <div class="user-view">
          <div class="background">
            <img src="imagens/banner_user/<?=$_SESSION['banner_user'];?>">
          </div>
          <a href="#!user"><img class="circle" src="<?php echo 'avatar/'.$_SESSION['avatar'];?>"></a>
          <a href="#!name"><span class="white-text name"><?php echo $_SESSION['nome'];?></span></a>
          <a href="#!email"><span class="white-text email"><?php echo $_SESSION['email'];?></span></a>
          </div>
        </li>
        <li><a href="index.php">Início</a></li>
        <li><a href="perfil.php">Perfil</a></li>
        <li class="divider"></li>
        <li><a href="admin/control">Painel Administrativo</a></li>
        <li class="divider"></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>

  <!-- DROPDOWN -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="perfil.php" class="blue-text"><i class="material-icons">account_circle</i>Perfil</a></li>
    <li><a href="preferencias.php" class="blue-text"><i class="material-icons">settings</i>Preferências</a></li>
    <li class="divider"></li>
    <li><a href="logout.php" class="red-text"><i class="material-icons left">power_settings_new</i>Logout</a></li>
  </ul>
<?php break; // FIM VERSÃO ADMIN
    
    default:
    // VERSÃO USER
    ?>
  <nav>
    <div class="nav-wrapper blue darken-4">
      <a href="index.php" class="brand-logo"><img src="assets/imgs/logo-trans.png" class="img"></a>
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
       
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Quem somos</a></li>
        <li><a href="#">Contato</a></li>
        <!-- MENU BAR -->
        <li><a class="modal-trigger" href="#pesquisa-modal"><i class="material-icons">search</i></a></li>
        <li><a class="dropdown-button black" href="#!" data-activates="dropdown1"><?php echo $_SESSION['nome'];?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

  <!-- SIDENAV / MOBILE -->
      <ul class="side-nav" id="mobile-demo">
        <li>
          <div class="user-view">
          <div class="background">
            <img src="imagens/banner_user/<?=$_SESSION['banner_user'];?>">
          </div>
          <a href="#!user"><img class="circle" src="<?php echo 'avatar/'.$_SESSION['avatar'];?>"></a>
          <a href="#!name"><span class="white-text name"><?php echo $_SESSION['nome'];?></span></a>
          <a href="#!email"><span class="white-text email"><?php echo $_SESSION['email'];?></span></a>
          </div>
        </li>
        <li><a href="index.php">Início</a></li>
        <li><a href="perfil.php">Perfil</a></li>
        <li><a href="preferencias.php"><i class="material-icons">settings</i>Preferências</a></li>
        <li class="divider"></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>

  <!-- DROPDOWN -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="perfil.php" class="blue-text"><i class="material-icons">account_circle</i>Perfil</a></li>
    <li><a href="preferencias.php" class="blue-text"><i class="material-icons">settings</i>Preferências</a></li>
    <li class="divider"></li>
    <li><a href="logout.php" class="red-text"><i class="material-icons left">power_settings_new</i>Logout</a></li>
  </ul>
<?php break; // FIM VERSÃO USER
  }

  
else: // Caso não estiver logado 
session_destroy();
?>
  <nav>
    <div class="nav-wrapper blue darken-4">
      <a href="index.php" class="brand-logo"><img src="assets/imgs/logo-trans.png" class="img"></a>
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <!-- MENU BAR -->
        
        <li><a href="sass.html">Quem somos</a></li>
        <li><a href="sass.html">Contato</a></li>

        <li><a class="modal-trigger" href="#pesquisa-modal"><i class="material-icons">search</i></a></li>
        <li><a class="dropdown-button black" href="#!" data-activates="dropdown1">Login<i class="material-icons right">arrow_drop_down</i></a></li>

      </ul>

  <!-- SIDENAV / MOBILE -->
      <ul class="side-nav" id="mobile-demo">
        <li><a href="login.php">Entrar</a></li>
        <li><a href="login.php?registro=RG">Registra-se</a></li>
        <li class="divider"></li>
        <li><a href="sass.html">Contato</a></li>
        <li><a href="mobile.html">Quem somos</a></li>
      </ul>
    </div>
  </nav>

  <!-- DROPDOWN -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="login.php">Entrar</a></li>
    <li><a href="login.php?registro=RG">Registra-se</a></li>
  </ul>

<?php endif; ?>
</header>

<!-- MODAL PESQUISA -->
  <div id="pesquisa-modal" class="modal"> <!-- achei interessante a class "modal bottom-sheet" -->
    <div class="modal-content">
       <div class="input-field col s6 truncate">

          <form method="POST" id="pesquisar" onkeypress="return event.keyCode != 13" enctype="multipart/form-data">
            <i class="material-icons prefix left">search</i>
            <input name="search" id="search" class="search" placeholder="Pesquise">
            <label for="icon_search"></label>
          </form>
          <div class="divider"></div>

          <ul class="resultados">
            
          </ul>

        </div>
    </div>
  </div>
<!-- MODAL PESQUISA FINAL -->


<!-- toolbar -->
<?php
error_reporting(0);
session_start();
if (!empty($_SESSION)):
 if ($_SESSION['admin'] == true):
  $edit = explode("/", $_SERVER['SCRIPT_FILENAME']);?>
    <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large blue darken-4">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating yellow darken-1 tooltipped" data-position="top" data-delay="50" data-tooltip="Artigos" href="admin/control/post-listar.php"><i class="material-icons">inbox</i></a></li>
      <li><a class="btn-floating green tooltipped" data-position="top" data-delay="50" data-tooltip="Criar" href="admin/control/post-criar.php"><i class="material-icons">add_box</i></a></li>

      <?php if(end($edit) == "post.php"):?>
      <li><a class="btn-floating blue tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" href="admin/control/post-editar.php?id=<?=$_SESSION['post-id-edit'];?>"><i class="material-icons">mode_edit</i></a></li>
      <?php endif;?>
      
    </ul>
      
  </div>
<?php 
  else:

  endif;
endif;
error_reporting(E_ALL);
?>
<!-- toolbar final -->