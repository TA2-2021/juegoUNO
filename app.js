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


/*var ball = document.getElementByTagName(img);
let currentDroppable = null;


    ball.onmousedown = function(event) {

    let shiftX = event.clientX - ball.getBoundingClientRect().left;
    let shiftY = event.clientY - ball.getBoundingClientRect().top;

    ball.style.cssText = 'width: 10%; height: 28%; border-radius: 5%; position: absolute; z-index=1000;';

    document.body.append(ball);

    moveAt(event.pageX, event.pageY);

    function moveAt(pageX, pageY) {
        ball.style.left = pageX - shiftX + 'px';
        ball.style.top = pageY - shiftY + 'px';
    }

    function onMouseMove(event) {
        moveAt(event.pageX, event.pageY);

        ball.hidden = true;
        let elemBelow = document.elementFromPoint(event.clientX, event.clientY);
        ball.hidden = false;

        if (!elemBelow) return;

        let droppableBelow = elemBelow.closest('.mazoD');
        if (currentDroppable != droppableBelow) {
          if (currentDroppable) { // null when we were not over a droppable before this event
            leaveDroppable(currentDroppable);
        }
        currentDroppable = droppableBelow;
          if (currentDroppable) { // null if we're not coming over a droppable now
            // (maybe just left the droppable)
            enterDroppable(currentDroppable);
        }
        }
    }

    document.addEventListener('mousemove', onMouseMove);

    ball.onmouseup = function() {
        document.removeEventListener('mousemove', onMouseMove);
        ball.onmouseup = null;
        };

    };

    function enterDroppable(elem) {
        elem.style.background = 'pink';
    }

    function leaveDroppable(elem) {
        elem.style.background = '';
    }

    ball.ondragstart = function() {
        return false;
    };*/