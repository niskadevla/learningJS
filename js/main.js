"use strict";

// Фоновый рисунок по умолчанию
var imgs = [
  '../img/african_elephants_mother_and_adorable_babies.jpg',
  '../img/desktop_aquarium.jpg',
  '../img/persian_leopard_winter.jpg'
];

var form = document.forms[0];
var radios = form.elements.select_background__image;

for (var i = 0; i < radios.length; i++) {
  radios[i].onchange = selectBackground;
  if (radios[i].checked) {
    document.body.style.cssText = "background-image: url(" + imgs[i] + ")";
  }
}

/* Переключение фонового рисунка bachground */
function selectBackground() {
  var imgPath;

  /* Присваиваем переменной значение value от input[type='radio'] */
  var elChecked = document.querySelector(".select-background input:checked").value;

  switch (elChecked) {
    case "elephant": imgPath = imgs[0]; break;
    case "aquarium": imgPath = imgs[1]; break;
    case "leopard": imgPath = imgs[2]; break;
  }

  document.body.style.cssText = "background-image: url(" + imgPath + ")";
}




function dropDown(e) {
  var dropElem = e.target;

  while(dropElem !== this) {
    if (dropElem.classList.contains("dropdown")) break;
    dropElem = dropElem.parentNode;
  }

  if (dropElem !== dropDown._currentDropElem && dropDown._currentDropElem) {
    dropDown._currentDropElem.classList.remove("show");
  }

  if (dropElem === this) return;

  dropDown._currentDropElem = dropElem;

  dropElem.classList.toggle("show");
}

document.addEventListener("click", dropDown);
// document.addEventListener("mouseover", dropDown);
