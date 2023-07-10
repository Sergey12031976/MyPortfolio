
var start = document.getElementById("startGame");
start.addEventListener("click", startGame);
function startGame()
{
  var canvas = document.getElementById("prize");
  var context = canvas.getContext("2d");

  //создаем новый объект
  var bird = new Image();
  var backGround = new Image();
  var forvardGround = new Image();
  var pipeUp = new Image();
  var pipeBottom = new Image();

  bird.src = "images/bird.png";
  backGround.src = "images/bg.png";
  forvardGround.src = "images/fg.png";
  pipeUp.src = "images/pipeUp.png";
  pipeBottom.src = "images/pipeBottom.png";

    //звуки:

    var fly = new Audio();
    var score_audio = new Audio();
    var crash = new Audio();

    fly.src = "audio/crash.mp3";
    score_audio.src = "audio/score.mp3";
    crash.src = "audio/crash.mp3";

  //управление птичкой
  document.addEventListener("keydown", moveUp);

  function moveUp (){
      yPos -= 25;
      fly.play();
  }

  //создание блоков
  var pipe = [];
  pipe [0] = {
    x : canvas.width,
    y : 0
  }

  var score = 0;
  //позиция птички
  var gap = 150;
  var xPos = 10;
  var yPos = 250;
  var grav = 0.8;
  

  function draw(){
    context.drawImage(backGround, 0, 0);

    for (var i = 0; i<pipe.length; i++){
      context.drawImage(pipeUp, pipe[i].x, pipe[i].y);
      context.drawImage(pipeBottom, pipe[i].x, pipe[i].y + pipeUp.height + gap);

      pipe[i].x--;

      if (pipe[i].x == 50)
      {
      pipe.push({
        x : canvas.width,
        y : Math.floor(Math.random() * pipeUp.height) - pipeUp.height
      });
      }

      //проверка на столкновение
        if (xPos + bird.width >= pipe[i].x && xPos <= pipe[i].x + pipeUp.width
            && (yPos <= pipe[i].y + pipeUp.height || yPos + bird.height >= pipe[i].y + pipeUp.height + gap) || yPos +
            bird.height >= canvas.height - forvardGround.height) {
            crash.play();
        
        location.reload();
        };

        if (pipe[i].x == 5) {
            score++;
            score_audio.play();
        }
    }

    context.drawImage(forvardGround, 0, canvas.height - forvardGround.height);
    context.drawImage(bird, xPos, yPos);

    yPos += grav;

      context.fillStyle = "#000";
      context.font = "25px Verdana";
      context.fillText("Счет: " + score, 10, canvas.height - 20);

    requestAnimationFrame(draw);
  }

  pipeBottom.onload = draw;
}
