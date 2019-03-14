<?php 
include "config/conn.php";
session_start();
switch ($_SESSION['chaveta']) {
  case '1':
      $login = $_SESSION['user'];
      $entrar = $_SESSION['Enviar'];
      $senha = md5($_SESSION['pass']);
    break;
  
  case '2':
      $id_user = $_SESSION['id'];
      $sql = mysql_query("SELECT * FROM tb_users WHERE id = $id_user");
      while ($cc = mysql_fetch_array($sql)) {
        $login = $cc['login_user'];
        $entrar = "";
        $senha = $cc['pass_user'];
      }
      
    break;

  default:
     $login = $_POST['user'];
     $entrar = $_POST['Enviar'];
     $senha = md5($_POST['pass']);
    break;

}
unset($_SESSION);
session_destroy();

    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM tb_users WHERE (login_user = '$login' OR email_user = '$login') AND pass_user = '$senha'") or die(mysql_error()); //Verificando

        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
          die();
        }else{
          session_start();
          while ($lg = mysql_fetch_array($verifica)) {
            $_SESSION['login']=$lg['login_user'];
            $_SESSION['nome']=$lg['nm_user'];
            $_SESSION['email']=$lg['email_user'];
            $_SESSION['avatar']=$lg['avatar_user'];
            $_SESSION['nivel']=$lg['nivel_user'];
            $_SESSION['id']=$lg['id'];
            $_SESSION['banner_user']=$lg['banner_user'];
            if ($lg['nivel_user'] == 0) {
              $_SESSION['admin'] = true;
            }
          }
          header("Location:perfil.php");
        }
    }
?>