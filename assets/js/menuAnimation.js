const menu = document.getElementById("main-menu");
const btnMenu = document.querySelector(".burger__link");

btnMenu.addEventListener("click", openMenuHandler);
function openMenuHandler() {
  if (menu.classList.contains("menuOpen")) {
    menu.classList.toggle("menuOpen");
    menu.style.height = 10 + "px";
  } else {
    menu.classList.toggle("menuOpen");
    menu.style.height = menu.childElementCount * 50 + 100 + "px";
  }
}
