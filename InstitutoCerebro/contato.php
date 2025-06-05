<?php include "header.php";
    if (isset($_POST["submit"]) && ($_POST['name']!="") && ($_POST['mail']!="") && ($_POST['phone']!="") && ($_POST['message']!="")) {
        include_once "php/index.php";
    }
    else{
        if (isset($_POST["submit"])){
            echo "<script>alert('Erro no envio da mensagem! Preencha todos os campos corretamente');</script>";
        }

    }
// Verifica se o POST tem algum valor






?>
<head><link rel="stylesheet" media="screen" href="css/home.css">

<style>
#particles-js {
    width: 100%;
	height: 120%;
    background-color: #57bdA2!important;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
}
.wrap-login100 {
    z-index: 9;
}
.particles-js-canvas-el {
    width: 100%;
    height: 85%!important;
    position: absolute;
    top: 228px;
}
</style>

</head>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>particles.js</title>

</head>
<body>

<!-- count particles -->

<!-- particles.js container -->
<div id="particles-js">
<div class="limiter" id="particles.js">
		<div class="container-login100">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="contato.php" method="post">
					<span class="login100-form-title p-b-53">
						Entre em Contato
						<hr class="subtitle">
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

						<input class="input100" type="text" name="name" id="name" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							E-mail
						</span>

					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="email" name="mail" id="mail" >
						<span class="focus-input100"></span>
                    </div>
                    <div class="p-t-13 p-b-9">
						<span class="txt1">
							Telefone
						</span>

					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="phone" id="phone" >
						<span class="focus-input100"></span>
                    </div>
                    <div class="p-t-13 p-b-9">
						<span class="txt1">
							Mensagem
						</span>

					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="message" id="message" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<input type="submit" class="login100-form-btn" value="Enviar" id="enviar" name="submit">



					</div>
					</form>

				</form>
			</div>
		</div>
	</div>


</div>
<div id="dropDownSelect1"></div>


<!-- scripts -->
<script src="../particles.js"></script>
<script src="js/app.js"></script>
<?php include "footer.php"; ?>
</body>
</html>