
new WOW().init();
$(document).ready(function(menuPosition){
console.log( "ready!???" );
var bloco = document.querySelector("#menu");
var profile = document.querySelector("#a");
var experiences = document.querySelector("#b");
var abilities = document.querySelector("#c");
var projects = document.querySelector("#d");
var contact = document.querySelector("#e");
var tamanhoMenu = $("#menu").width();
var menuTopPosition = $("#menu").position().top;
var experiencesPosition = $("#experiences").position().top;
var profilePosition = $("#profile").position().top;
var abilitiesPosition = $("#abilities").position().top;
var projectsPosition = $("#projects").position().top;
var contactPosition = $("#contact").position().top;
// var contactPosition = $("#contact").position().top;
console.log('Posição left do bloco verde ' + $("#menu").position().left);
console.log('Posição top do elemento bloco verde é:  ' + menuTopPosition);
console.log('o tamanho do bloco é: ' + $("#menu").width());

window.addEventListener('scroll', function (){
    if ( window.scrollY>=menuTopPosition){
        bloco.style.position="fixed";
        bloco.style.top="20";
        bloco.style.width=tamanhoMenu;
    }
        else{
            bloco.style.position="absolute";
            bloco.style.top="100%";
        }
});

window.addEventListener('scroll', function (){
    if ( window.scrollY>=profilePosition){
        profile.style.background="#466b6e";
    }
        else{
            profile.style.background="#222222";
        }
});

window.addEventListener('scroll', function (){
    if ( window.scrollY>=experiencesPosition){
        experiences.style.background="#466b6e";
        profile.style.background="#222222";
    }
        else{
            experiences.style.background="#222222";
        }
});


window.addEventListener('scroll', function (){
    if ( window.scrollY>=abilitiesPosition){
        abilities.style.background="#466b6e";
        experiences.style.background="#222222";
    }
        else{
           abilities.style.background="#222222";
        }
});

window.addEventListener('scroll', function (){
    if ( window.scrollY>=projectsPosition){
        projects.style.background="#466b6e";
       abilities.style.background="#222222";
    }
        else{
           projects.style.background="#222222";
        }
});

window.addEventListener('scroll', function (){
    if ( window.scrollY>=contactPosition-600){
        contact.style.background="#466b6e";
       projects.style.background="#222222";
    }
        else{
           contact.style.background="#222222";
        }
});

});