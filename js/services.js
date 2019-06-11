'use strict';

var form = document.forms.formServices;
console.log(form);
console.log(form.elements[1].parentNode.querySelector('label'));
var notification = document.getElementsByClassName("form-services_notification")[0];

form.onsubmit = function(e) {
  // loadServices();
  // return false;
  e.preventDefault();
}

form.addEventListener("change", function(e) {
  loadServices();
  console.log(e.target);
});

function loadServices() {
  var xhr2 = new XMLHttpRequest();

  //Создаем GET запрос
  // xhr2.open('GET', 'json/services.json', true);
  xhr2.open('GET', 'calculate.php', true);
  xhr2.send();

  xhr2.timeout = 1000;

  xhr2.ontimeout = function() {
    notification.innerHTML = 'Превышено время загрузки';
  }

  xhr2.onreadystatechange = function() {

    if (xhr2.readyState != 4) return;

    if (xhr2.status != 200) {
      console.log(xhr2.status + ' : ' + xhr2.statusText);
      notification.innerHTML = xhr2.status + ' : ' + xhr2.statusText;
    } else {
      try {
        // Парсим данные ответа в объект JS
        //В виде массива
        var services = JSON.parse(xhr2.responseText);
        showServices(services);
      } catch(e) {
        console.log("Некорректный ответ " + e.message);
        notification.innerHTML = "Некорректный ответ";
      }
    }
  }

  notification.innerHTML = 'Загружаю...';
}

function showServices(services) {
  // Создаем новый элемент ul
  var select = document.createElement('select');
  select.classList.add("form-control");
  select.id = "nameServices";
  select.name = "nameServices";

  services.forEach(function(service,i) {
    if (i == 0) {
      for (var arr in service) {
        service[arr].forEach(function(serv) {
          var option = select.appendChild(document.createElement('option'));
          option.innerHTML = serv;
        });
      }
    }
  });

  notification.innerHTML = "";
  document.getElementsByClassName("form-group")[0].appendChild(select);
}

loadServices();
