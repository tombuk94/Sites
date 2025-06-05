<?php
$conexao = mysqli_connect ("cerebroinstitu.mysql.dbaas.com.br","cerebroinstitu","institutoativo","cerebroinstitu");
// Criar uma váriável de sessão
if (isset ( $_GET['username'])){
	if (isset($_GET['pass'])){
		if($_GET['username'] == "" || $_GET['username'] == null){
			echo"<script language='javascript' type='text/javascript'>
			alert('O campo login deve ser preenchido');window.location.href='
			cadastro.html';</script>";
		}

$username = $_GET['username'];
$senha =  $_GET['pass'];
		$login = "SELECT * ";
$login .= "FROM users ";
$login .= "WHERE email='{$username}' and senha = '{$senha}' ";
$acesso= mysqli_query($conexao,$login);
if (!$acesso){
	die("Falha na consulta do banco");
}
$Informacao= mysqli_fetch_assoc($acesso);
	if (empty($Informacao)){
		$mensagem = "Usuário ou senha incorreta";
		echo "<script>alert('".$mensagem."');</script>";
	}
	else{
		//INICIAR SESSÃO
		session_start();
		$_SESSION["usuario"] = "$username";
		Header("Location:index.php");
		$logado ="sim";
	}
	}
}
require_once "header.php";
?>
<head>
<style>

#particles-js {
    width: 100%;
    height: 100%;
    background-color: #57bdA2!important;
    background-image: url(style.css);
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
}
</style>
</head>

<body>
<div id="particles-js"></div>
    <!-- <section id="users">
        <div class="container">
            <div class="row">
                <form action="login.php" method="post" class="col-12 form-login" >
                    <h2 >Faça seu Login</h2>
                    <input type="text" name="usuario" placeholder="Nome de usuário *" class="col-md-5"><br><br>
                    <input type="password" name="senha" placeholder="Senha *" class="col-md-5">
                    <input type="submit" value="login" class="col-1">
                </form>

                <form action="login.php" method="post"class="col-12 form-login">
                    <h2>Criar uma nova conta</h2>
                    <input type="text" name="newnome" placeholder="Seu Nome *" class="col-md-6"><br><br>
                    <input type="text" name="newusuario" placeholder="Nome de usuário *" class="col-md-6"><br><br>
                    <input type="password" name="newsenha" placeholder="Senha *" class="col-md-6"><br><br>
                    <input type="submit" value="Cadastrar">

                </form>
            </div>
        </div>
    </section> -->
    <!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<
</head>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<body>

	<div class="limiter" id="particles.js">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						LOGIN
					</span>

					<!-- <a href="#" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a> -->

					<!-- <a href="#" class="btn-google m-b-20">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a> -->

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							E-mail
						</span>
					</div>
					<form action="header.php" method="get">
					<div class="wrap-input100 validate-input" data-validate = "Username is required">

						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Senha
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							esqueceu?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<input type="submit" class="login100-form-btn" value="Entrar">



					</div>
					</form>
					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Não tem cadastro?
						</span>

						<a href="cadastro.php" class="txt2 bo1">
							Registre-se agora!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

</div>


</body>
<!-- scripts -->
<script src="../particles.js"></script>
<script src="js/app.js"></script>