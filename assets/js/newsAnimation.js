const body = document.querySelector("body");
body.addEventListener("scroll", scrollEfectHandler);
let id = setInterval(scrollEfectHandler, 15);
function scrollEfectHandler() {
  const blog = document.querySelector(".blog");
  const before = document.querySelector(".blog__before");
  const after = document.querySelector(".blog__after");

  let shiftX = blog.getBoundingClientRect().top;
  if (shiftX < 700) {
    if (shiftX > 0) {
      //responsive
      if (window.innerWidth < 1000 && window.innerWidth > 700) {
        before.style.left = 1000 - shiftX * 0.35 + "px";
        after.style.right = 150 - shiftX * 0.3 + "px";

        return;
      }
      if (window.innerWidth < 700 && window.innerWidth > 576) {
        before.style.left = 900 - shiftX * 0.35 + "px";
        after.style.right = 40 - shiftX * 0.3 + "px";

        return;
      }
      if (window.innerWidth <= 576) {
        before.style.left = 700 - shiftX / 0.9 + "px";

        before.style.transform = "rotate(125deg) translate(-293px, 102%)";
        before.style.height = "370%";
        return;
      }

      //main
      before.style.left = 600 - shiftX * 0.55 + "px";
      after.style.right = 150 - shiftX * 0.3 + "px";
    }
  }
}
