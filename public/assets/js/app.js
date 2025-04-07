"use strict";

const categoryContainer = document.querySelector("#categoryContainer");

const categoryTitle = document.querySelector("#categoryTitle");

const categoryList = document.querySelector("#categoryList");

const categoryListItems = document.querySelectorAll("#categoryList>li");
console.log(categoryTitle);
categoryContainer.addEventListener("click", function (e) {
  categoryList.classList.toggle("category__list");
  categoryTitle.classList.toggle("category__title");
});
