new WOW().init();



$(document).ready(function(menuPosition){

console.log( "ready!???" );
var bloco = document.querySelector("#bloco-verde");
var tamanhoMenu = $("#bloco-verde").width();
var menuTopPosition = $("#bloco-verde").position().top;
console.log('Posição left do bloco verde ' + $("#bloco-verde").position().left);
console.log('Posição top do elemento bloco verde é:  ' + menuTopPosition);
console.log('o tamanho do bloco é: ' + $("#bloco-verde").width());

window.addEventListener('scroll', function (){
    if ( window.scrollY>=menuTopPosition){
        bloco.style.position="fixed";
        bloco.style.top="0";
        bloco.style.width=tamanhoMenu;
        bloco.style.background="#304a78e8";
    }
        else{
            bloco.style.position="relative";
            bloco.style.top="36px";
            bloco.style.background="#304A78";
        }
});

$(".botao-perfil").hide();
$( "#marcela").mouseover(mostrarElemento(1));
$( "#marcela").mouseout(esconderElemento(1));
function mostrarElemento(e){
$(".botao-perfil").show(500);
}
function esconderElemento(e){
$(".botao-perfil").hide(500);
}

});



// var windowWidth = window.innerWidth;
// if (windowWidth < 1200){
//     alert("Versão para telas menores que 1200 em desenvolvimento. Desculpe-nos")
// }


function iniciar(){
    try{
    document.querySelector(".mercadopago-button").html("Comprar");
    }
    catch(e){}
    try{
    document.querySelector("#clinic-menu-1").addEventListener("click",mostrarConteudo1);
    document.querySelector("#clinic-menu-2").addEventListener("click",mostrarConteudo2);
    document.querySelector("#clinic-menu-3").addEventListener("click",mostrarConteudo3);
    document.querySelector("#clinic-menu-4").addEventListener("click",mostrarConteudo4);
    document.querySelector("#clinic-menu-5").addEventListener("click",mostrarConteudo5);
    document.querySelector("#clinic-menu-6").addEventListener("click",mostrarConteudo6);

    $("#info2").hide();
    $("#info3").hide();
    $("#info4").hide();
    $("#info5").hide();
    $("#info6").hide();
    $("#info1").show();
    }
    catch(e){
        console.log("não está na página de clínica");
    }
}


// FUNÇÃO DO MAPA LOCAL//----------#
function iniciar2(){
    $("#spsp").click(function() {
        $("#spsp").css("color","#DCB13C");
        $("#cucu").css("color","white");
        $("#unidade-b").hide();
        $("#info-b").hide();
        $("#unidade-a").show();
        $("#info-a").show();

      });

      $("#cucu").click(function() {
        $("#cucu").css("color","#DCB13C");
        $("#spsp").css("color","white");
        $("#unidade-a").hide();
        $("#info-a").hide();
        $("#unidade-b").show();
        $("#info-b").show();
      });
    }

function mostrarConteudo1(){
    // SOME O TITULO ANTERIOR
    $("#clinic-title").fadeOut(1);

    // TROCA CONTEUDO DO TITULO
    $("#clinic-title").text("Avaliação Neuropsicológica",10000);
    $("#clinic-title").delay(500);
    // APARECE TITULLO NOVO
    $("#clinic-title").slideDown(1000);

    // SOME OS CONTEUDOS ANTERIORES
    $("#info2").hide();
    $("#info3").hide();
    $("#info4").hide();
    $("#info5").hide();
    $("#info6").hide();
    $("#info1").show();
    $("#neuropsi-img").css("background-image","url(imagens/avalneuro.png)");

}
function mostrarConteudo2(){
    // SOME O TITULO ANTERIOR
    $("#clinic-title").fadeOut(1);
    $("#neuropsi-img").hide();

    // TROCA CONTEUDO DO TITULO
    $("#clinic-title").text("Reabilitação Neuropsicológica",10000);
    $("#clinic-title").delay(500);
    // APARECE TITULLO NOVO
    $("#clinic-title").fadeIn(100);
    $("#neuropsi-img").show();

    // SOME OS CONTEUDOS ANTERIORES
    $("#info1").hide();
    $("#info3").hide();
    $("#info4").hide();
    $("#info5").hide();
    $("#info6").hide();
    $("#info2").show();
    $("#neuropsi-img").css("background","url(imagens/1349.png)");
    $("#neuropsi-img").css("background-size","cover");




}
function mostrarConteudo3(){
    // SOME O TITULO ANTERIOR
    $("#clinic-title").fadeOut(1);

    // TROCA CONTEUDO DO TITULO
    $("#clinic-title").text("Estimulação Cognitiva",10000);
    $("#clinic-title").delay(500);
    // APARECE TITULLO NOVO
    $("#clinic-title").slideDown(1000);

    // SOME OS CONTEUDOS ANTERIORES
    $("#info3").show();
    $("#info1").hide();
    $("#info2").hide();
    $("#info6").hide();
    $("#info4").hide();
    $("#info5").hide();
    $("#neuropsi-img").css("background-image","url(imagens/679.png)");
    $("#neuropsi-img").css("background-size","cover");
}
function mostrarConteudo4(){
    // SOME O TITULO ANTERIOR
    $("#clinic-title").fadeOut(1);

    // TROCA CONTEUDO DO TITULO
    $("#clinic-title").text("Psicoterapia",10000);
    $("#clinic-title").delay(500);
    // APARECE TITULLO NOVO
    $("#clinic-title").slideDown(1000);

    // SOME OS CONTEUDOS ANTERIORES
    $("#info4").show();
    $("#info1").hide();
    $("#info2").hide();
    $("#info3").hide();
    $("#info5").hide();
    $("#info6").hide();
    $("#neuropsi-img").hide();
    $("#neuropsi-img").show();
    $("#neuropsi-img").css("background-image","url(imagens/psicoterapia1.png)");
    $("#neuropsi-img").css("background-size","cover");
}
function mostrarConteudo5(){
    // SOME O TITULO ANTERIOR
    $("#clinic-title").fadeOut(1);

    // TROCA CONTEUDO DO TITULO
    $("#clinic-title").text("Psicologia Jurídica",10000);
    $("#clinic-title").delay(500);
    // APARECE TITULLO NOVO
    $("#clinic-title").slideDown(1000);

    // SOME OS CONTEUDOS ANTERIORES
    $("#info5").show();
    $("#info1").hide();
    $("#info2").hide();
    $("#info3").hide();
    $("#info4").hide();
    $("#info6").hide();
    $("#neuropsi-img").css("background-image","url(imagens/juridica.png)");
    $("#neuropsi-img").css("background-size","cover");

}
function mostrarConteudo6(){
    // SOME O TITULO ANTERIOR
    $("#clinic-title").fadeOut(1);

    // TROCA CONTEUDO DO TITULO
    $("#clinic-title").text("Neurofeedback",10000);
    $("#clinic-title").delay(500);
    // APARECE TITULLO NOVO
    $("#clinic-title").slideDown(1000);

    // SOME OS CONTEUDOS ANTERIORES
    $("#info6").show();
    $("#info1").hide();
    $("#info2").hide();
    $("#info3").hide();
    $("#info4").hide();
    $("#info5").hide();
    $("#neuropsi-img").css("background-image","url(imagens/7396.png)");
    $("#neuropsi-img").css("background-size","cover");



}

// -----------------------------------------------------------------------

window.onload = iniciar;
$(window).resize(function() {
    try{
    window.onload = iniciar;
    }
    catch(e){
        console.log( "Erro ao carregar funcos para clínica");
    }

    }
);








// $(document).ready(function() {



//     //('#terno').fadeIn(2500);
//     // $('#don').animate({top:-100},0);
//     // $('#don').delay(1500)
//     // $('#don').animate({top:'4.5%'},1000);
//     // $('main nav').animate({top:-100},0);
//     // $('main nav').delay(1500);
//     // $('main nav').animate({top:'4.5%'},1000);
//     // $('main h1').slideUp(1);
//     // $('main h1').delay(1500);
//     // $('main h1').slideDown(1000); $('#terno').fadeOut(1);










// });
