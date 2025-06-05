$(document).ready(function(){
        $("#aval-b").hide();
        $("#rehab-b").hide();
        $("#sobre-a").hide();
        $("#conteudo-aval").hide();
        $("#conteudo-rehab").hide();
        console.log("está funfanfo até aqui");
        try{
        document.querySelector("#funcionamento").addEventListener("click",mostrarinfo);
        document.querySelector("#sobre-aval").addEventListener("click",mostrardos);
        document.querySelector("#sobre-neuro").addEventListener("click",mostrartres);
        }
        catch(err){

        }
        document.querySelector("#super-aval").addEventListener("click",mostrarunob);
        document.querySelector("#super-neuro").addEventListener("click",mostrardosb);
});
function mostrarinfo(){
    $("#conteudo-aval").hide();
    $("#conteudo-rehab").hide();
    // APARECE O SOBRE---------
    $("#sobre-a").fadeIn();
};

function mostrardos(){
    $("#conteudo-aval").fadeIn();
    $("#conteudo-rehab").hide();
    // APARECE O SOBRE---------
    $("#sobre-a").hide();

};
function mostrartres(){
    $("#conteudo-aval").hide();
    $("#sobre-a").hide();
    // APARECE O SOBRE---------
    $("#conteudo-rehab").fadeIn();
};
function mostrarunob(){
    $("#aval-b").fadeIn();
    $("#rehab-b").hide();
};
function mostrardosb(){
    $("#aval-b").hide();
    $("#rehab-b").fadeIn();
};







