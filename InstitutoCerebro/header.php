<?php header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); ?>

<head><meta http-equiv="Cache-Control" content="no-store"/>
<meta http-equiv='refresh' content='1000;url=index.php'>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="Content-Language" content="pt-br">
</head>
<!-- JavaScript lib/raries -->



        <script src="lib/wow/wow.min.js"></script>
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!-- scripts -->

<!--===============================================================================================-->
        <!-- Template Main Javascript File -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <!-- CARROSSEL FRUFRU -->
        <script src="js/flickity-docs.min.js"></script>
        <script src="js/flickity.pkgd.js"></script>
        <link href="css/flickity.css" rel="stylesheet">


        <script>

            $(document).ready(function(){
            // LOGADO1 RECEBE O NOME DE USUÁRIO
            var logado1 ="<?php
            session_start();
            if (isset($_SESSION['usuario'])){
              echo $_SESSION['usuario'];}
              else{
                  echo "naologado";
              }
              ?>";
            if (logado1 != "naologado"){
                console.log("Está logado");
                var teste = document.querySelector("#login");
                teste.innerHTML= logado1 ;
                teste.style.border="none";
                teste.addEventListener('click', function(event){event.preventDefault();});
                document.querySelector('#logout').style.display="block";
                document.querySelector('#logout').addEventListener('click', function(event){  });
            }
            else{

                if (typeof text !== 'undefined') {
                teste.innerHTML= "login";

                }

            }
        });
        </script>
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
		<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon" />

        		<!-- Main Stylesheet File -->
		<link href="css/home1.css" rel="stylesheet">
<a class="back-to-top  animate__animated animate__backInDown" href="https://api.whatsapp.com/send?1=pt_BR&phone=5511942883800&text=Olá,%20Gostaria%20de%20mais%20informações%20sobre%20a%20o%20Instituto%20do%20Cérebro?"  target="_blank" class="instagram"><i class="fa fa-whatsapp"></i></a>
        <div class="header">
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a href="index.php">Home</i></a></li>
                <li><a href="instituto.php">Instituto </a></li>
                <li><a href="clinica.php">Clínica </a></li>
                <li><a href="ensino.php">Ensino </a></li>
                <!-- <li><a href="produtos.php">Produtos </a></li> -->
                <li><a href="store" target="_blank">Loja</a></li>
                <li><a href="contato.php">Contato</a></li>

            </ul>
        </div>
        <div class="branco">
            <div class="container">
                <div class="row pdtop20">
                    <div class="col-md-3">
                    <a  href="index.php"><img src="imagens/logo-azul.png" width="100%" id="logo"></a>
                    </div>
                    <div class="col-md-8 offset-md-1 etiqueta d-none d-xl-block ">
                        <div class="row">
                            <i class="fa fa-map-marker" id= "map-maker" aria-hidden="true"></i>
                            <div class="traco">
                                <h1>Unidades</h1>
                                <div class="inline"></div>
                                <a href="index.php#local" class="local-link"><h2>São Paulo - SP</h2></a>
                                <a href="index.php#local" class="local-link"><h2>Curitiba - PR</h2></a>
                            </div>
                                <i class="fa fa-envelope" id= "envelope" aria-hidden="true"></i>
                            <div class="traco">
                                <h1>E-mail</h1>
                                <h2>contato@cerebroinstituto.com.br</h2>
                            </div>
                            <div>
                                <i class="fa fa-phone" id= "phone1" aria-hidden="true"></i>
                            </div>
                            <div >
                                <h1>Telefone</h1>
                                <h2>(11) 94288-3800</h2>
                            </div>
                        </div>
                    </div>
                 </div>
           </div>
        </div>
        <div id="header">
                <div class="container">
                    <div class="row piscina" id="bloco-verde">
                        <div class="col-md-8">
                            <ul id="menu-desk">
                                <li><a href="index.php">Home</i></a></li>
                                <li class="dropdown"><a href="instituto.php">Instituto <i class="fa fa-caret-down" aria-hidden="true"></i></a><ul class="sub-i dropdown-content wow animated fadiInDown"><li><a href="instituto.php#sobre-nos">Sobre nós</li></a><hr><a href="instituto.php#our-team"><li>Corpo Clínico</li></a></ul></li>
                                <li><a href="clinica.php">Clínica </a></li>
                                <li><a href="ensino.php">Ensino </a></li>
                                <!-- <li><a href="produtos.php">Produtos </a></li> -->
                                <li><a href="contato.php">Contato</a></li>
                            </ul>
                        </div>
                        <div id="submenu" class="col-md-2">
                            <a href="https://www.youtube.com/channel/UCxa06guIxpbkOrYPlWkWmhg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/company/institutocerebro/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/institutocerebro/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.facebook.com/institutocerebromb" target="_blank"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="col-md-2"style="overflow: hidden;">
                            <a href="store" id="login" target="_blank"><h3>Loja</h3></a> <a id="logout" href="logout.php">Sair</a>
                        </div>
                    </div>
                </div>


        </div>
