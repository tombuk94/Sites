<?php include "header.php"; ?>
<head>
<style>
#particles-js {
    width: 100%;
    background-color: #57bdA2!important;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
}
.particles-js-canvas-el {
    width: 100%;
    position: absolute;
    top: 228px;
}
</style>
<script>
$("#youtube-video").pPlayer({
    youtubeVideoId: "YE7VzlLtp-4",
    autoplay: 0,
    origin: "http://yoursite.com"
});
</script>

</head>
<body>
<div id="particles-js">
<div class="limiter" id="particles.js">
</div></div>
<section id="ensino">
    <h1>Ensino</h1>
    <hr class="subtitle">
    <div class="container">
        <div class="row">
            <div class="col-md-4"><a href="grupo-estudos.php"><div class="caixas-ensino branco"><img src="imagens/estudos.png"width="100%"><h1>Grupo de Estudos</h1><h2>Online</h2><br><div class="know-more">Saiba mais</div>
                </script></div></a></div>
                <div class="col-md-4"><a href="grupo-supervisao.php"><div class="caixas-ensino branco"><img src="imagens/supervisao.png"width="100%"><h1>Grupo de Supervisão</h1><h2>Online</h2><br><div class="know-more">Saiba mais</div></div></a></div>
                <div class="col-md-4"><a href="supervisao-individual.php"><div class="caixas-ensino branco"><img src="imagens/individual.png"width="100%"><h1>Supervisão Individual</h1><h2>Presencial e Online</h2><br><div class="know-more">Saiba mais</div></div></a></div>

        </div>
    </div>
</section>
        <section id="ensino-video">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-12">
                        <h1>Aberta as Inscrições!</h1>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jc-elC9Harg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>

                </div>
            </div>
        </section>

        <section id="cadastre-se" class="wow animated fadeInLeft" data-wow-delay="1s">
    <div class="container">
        <div class="row">
            <div class="col-md-8 wow animated fadeIn">
                <h1>Receba novidades do Instituto</h1>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3" id="botao-agende"><a href="cadastro.php" class="yellow-box">cadastre-se</a></div>

        </div>
        </div>
    </section>

    </div>
</body>
<?php include "footer.php"; ?>

<script src="../particles.js"></script>
<script src="js/app.js"></script>