var btnAbrirpopup = document.getElementById('btn-abrir');
var overlay = document.getElementById('overlay');
var popup = document.getElementById('popup');
var btnCerrarpopup = document.getElementById('btn-cerrar');

btnAbrirpopup.addEventListener('click', function(e){
    e.preventDefault();
    overlay.style.visibility = "visible";
});

btnCerrarpopup.addEventListener("click", function(){
    overlay.style.visibility = "hidden";
});