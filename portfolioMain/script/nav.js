"use strict";

const button = document.querySelector("#button-mobile");

button.addEventListener("click", buttonMobile);

function buttonMobile(e) {
	e.target.classList.toggle("button--active-menu");
}
