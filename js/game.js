//Находим основной контейнер
var container = document.getElementById("container");
var gift; // Подарок
var timerId; // id Таймера
var count = 2; // счетчик
var clientWidth = document.documentElement.clientWidth || document.body.clientWidth // Ширина окна
var clientHeight = Math.max(
  document.body.scrollHeight, document.documentElement.scrollHeight,
  document.body.offsetHeight, document.documentElement.offsetHeight,
  document.body.clientHeight, document.documentElement.clientHeight
); // Высота окна

//Создание контейнера - счетчика очков
var score = document.createElement("div");
score.className = "score";
score.innerHTML = "Score: ";
var scoreCount = document.createElement("span");
scoreCount.innerHTML = 0;
var health = document.createElement("span");
health.innerHTML = "<br> Health: " + count;
container.appendChild(score);
score.appendChild(scoreCount);
score.appendChild(health);


//Создание конейнера - GAME OVER
var gameOver = document.createElement("div")
gameOver.className = "game-over";
gameOver.innerHTML = "<h1>GAME OVER</h1>";
//container.appendChild(gameOver);


//Создание конейнера - PAUSE
// var pause = document.createElement("div")
// pause.className = "pause";
// pause.innerHTML = "<h1>PAUSE</h1>";
//container.appendChild(pause);


// Создание картинки-подарок
function createGift() {
  var img = document.createElement("img");
  img.src = "/img/gift.png";
  //img.alt = "gift";
  return container.appendChild(img);
}


// Функция при клике на елементе его удалит
function clickTarget(e) {
  var target = e.target;

  var elem = document.elementFromPoint(e.clientX, e.clientY);

  if (gift == elem) {
    clearInterval(timerId);
    container.removeChild(gift);
    // count++;
    scoreCount.innerHTML++;
    gift = createGift();
    moveTarget();
  }
  e.preventDefault();
}


//Движение цели
var speed = 40;
function moveTarget() {
  var giftStyle = getComputedStyle(gift);
  gift.style.top = parseInt(giftStyle.top) + "px";
  // Максим координата left подарка
  var maxLeft = clientWidth - gift.offsetWidth;
  // Максим координата top подарка
  var maxTop = clientHeight - gift.offsetHeight;

  // рандомно присваиваем значение
  gift.style.left = randomInteger(0, maxLeft) + "px";

  timerId = setInterval(function() {
    gift.style.top = parseInt(gift.style.top) + 5 + "px";

    if ( parseInt(gift.style.top) >= maxTop ) {
      clearInterval(timerId);
      container.removeChild(gift);
      count--;
      health.innerHTML = "<br> Health: " + count;
      //scoreCount.innerHTML = count;

      if (count < 1) {
        container.appendChild(gameOver);
        return;
      }

      gift = createGift();
      moveTarget();
    }
  }, speed--);

}


function isPause(e) {
  if (e.keyCode === 32) alert("PAUSE");
}


function randomInteger(min, max) {
  var rand = min + Math.random() * (max + 1 - min);
  rand = Math.floor(rand);
  return rand;
}

alert("Нажмите ОК, чтобы запустить игру \n \
      Нажмите ПРОБЕЛ для паузы \n \
      В правом верхнем углу количество сбитых подарков \n \
      Вы проиграете упустив 2 подарка");

gift = createGift();
moveTarget();

document.addEventListener("mousedown", clickTarget);
document.addEventListener("keydown", isPause);
