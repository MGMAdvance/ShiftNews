<form method="POST" action="conexao.php">
	<input type="text" name="user" placeholder="Usuário"><br>
	<input type="password" name="pass" placeholder="Senha"><br>
	<input type="submit" name="Enviar" value="Login">
	<input type="reset" name="Voltar" value="Voltar" onclick="window.history.back(1);">
	<br>
	<span class="span-login"><p>Não tem uma conta? <b style="color: #33b2ff"><a href="?registro=RG">Registra-se aqui!</a></b></p></span>
</form>
<style type="text/css">
		.login-box {
    	height: 300px;
	}
	.login-box > form {
    padding-top: 4vh;
}
</style>