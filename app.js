var btnAbrirpopup = document.getElementsByClassName('lol2');
var overlay = document.getElementById('overlay');
var popup = document.getElementById('popup');
var btnCerrarpopup = document.getElementById('btn-cerrar');


for (var i=0; i < btnAbrirpopup.length; i++) {
    btnAbrirpopup[i].onclick = function(){
        swal({
            title: '¿Iniciar partida?',
            buttons: ["No", "Si"],
            }).then(function(){
            window.location = "partida.php";
        });
    }
};