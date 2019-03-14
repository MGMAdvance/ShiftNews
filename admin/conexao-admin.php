<meta charset="utf-8">
<?php 
 include "../config/conn.php"; //Conectando com o DB

$login = $_POST['admin'];
$entrar = $_POST['Enviar'];
$senha = $_POST['pass'];
  
    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM tb_users WHERE (login_user = '$login' OR email_user = '$login') AND pass_user = '$senha' AND nivel_user = 0") or die(mysql_error()); //Verificando

        if (mysql_num_rows($verifica)<=0){
          // Erro no login
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos, ou verifique se esta acessando a uma conta de administrador');window.location.href='index.php';</script>";
          die();
        }else{
          session_start();
          
          // Colocando ID na SESSION
          while ($reg = mysql_fetch_assoc($verifica)){
            $_SESSION['id'] = $reg['id'];
            $_SESSION['nome'] = $reg['nm_user'];
            $_SESSION['email'] = $reg['email_user'];
            $_SESSION['avatar'] = $reg['avatar_user'];
          }
          $_SESSION['login'] = $login;
          $_SESSION['admin'] = true;
          header("Location:control/index.php");
        }
    }
?>