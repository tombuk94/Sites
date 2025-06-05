<?php

$conexao = mysqli_connect ("cerebroinstitu.mysql.dbaas.com.br","cerebroinstitu","institutoativo","cerebroinstitu");
//INICIAR SESSÃO


// Criar uma váriável de sessão



if (isset($_GET['name'])){
	$newname = $_GET['name'];
	if (isset($_GET['email'])){
		$newusername=  $_GET['email'];
		}

		if ($_GET['pass'] = $_GET['pass2']){
		$newpass= $_GET['pass'];
		}


}




// VALIDAÇÕES


// adicionar cadastro



if (isset($newpass,$newusername,$newname)){

$sqli = "INSERT INTO users (`nome`, `email`, `senha`) VALUES ('$newname','$newusername','$newpass')";
if (mysqli_query($conexao, $sqli)) {
	header("location:login.php");
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);
}

include "header.php";
?>
<head>
<style>

#particles-js {
    width: 100%;
    height: 1200px;
    background-color: #57bdA2!important;
    background-image: url(style.css);
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
}
</style>
</head>

<body>
	<head>
		<style>
		body, html {
		height: 100%;
		background: #57BDA2;
					}
</style>
	</head>

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
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter" id="particles.js">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="cadastro.php">
					<span class="login100-form-title p-b-53">
						CADASTRO
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
							Nome
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">

						<input class="input100" type="text" name="name" >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							CPF
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">

						<input class="input100" type="text" name="cpf" id="cpf">
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							RG
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">

						<input class="input100" type="text" name="RG" id="RG">
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							CEP
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">

						<input class="input100" type="text" name="cep" id="cep">
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Endereço
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">

						<input class="input100" type="text" name="ende" id="ende">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							E-mail
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">

						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Telefone/Celular
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">

						<input class="input100" type="text" name="name" >
						<span class="focus-input100"></span>
					</div><br>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Senha
						</span>


					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
                    </div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Repita sua senha
						</span>


					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass2" >
						<span class="focus-input100"></span>
					</div>
					<div class="formu" data-validate = "Username is required">
					<input type="radio" id="male" name="gender" value="male">
					<label for="male">Estudante</label><br>
					<input type="radio" id="female" name="gender" value="female">
					<label for="female">Profissional</label><br>
					<input type="radio" id="other" name="gender" value="other">
					<label for="other">Outros</label></div>

					<input type="submit" class="login100-form-btn" value="Cadastrar">

					</form>


			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

</div>


</body>
<!-- scripts -->
<script src="../particles.js"></script>
<script src="js/app.js"></script>