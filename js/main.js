// Фиксация header при скролле
$(window).scroll(function () {
  let fixedHeader = $(".header-container");
  let scroll = $(window).scrollTop();
  let headerBottomDel = $(".header-b");

  if (scroll >= 120) {
    fixedHeader.addClass("fixed");
    headerBottomDel.hide();
  } else {
    fixedHeader.removeClass("fixed");
    headerBottomDel.show();
  }
});

// Калькулятор

let expenses = document.getElementById("expenses");
let distance = document.getElementById("distance");
let price = document.getElementById("price");
let resultFuel = document.getElementById("result-fuel");
let result = document.getElementById("result");
let resultDistance = document.getElementById("result-distance");

function calc() {
  if ((expenses.value, distance.value, price.value > 0)) {
    // Расход топлива
    resultFuel.value = `${(expenses.value * distance.value) / 100} л`;
    // Стоимость топлива
    result.value = `${
      (expenses.value * distance.value * price.value) / 100
    } руб`;
    // Кол-во км
    resultDistance.innerHTML = `за ${distance.value} км`;
  } else {
    result.value = "Заполните все поля!";
  }
}

// Функция добавления цены по клику на карточку
function calcVal(price_fuel) {
  if (0 == 0) {
    price.value = price_fuel;
  }
}
