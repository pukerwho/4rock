// Open mobile menu
let menuClick = document.querySelector(".menu-click");
let menu = document.querySelector(".menu");
let menuClose = document.querySelector(".menu-close");
if (menuClick) {
  menuClick.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
}
if (menuClose) {
  menuClose.addEventListener("click", () => {
    menu.classList.add("hidden");
  });
}