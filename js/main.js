
let ham = document.querySelector(".header__ham");
const body = document.querySelector("body");
const content = document.querySelector(".content");
  
  ham.addEventListener("click", () => {
ham.classList.toggle("active");
  body.classList.toggle("blurry");
});

content.addEventListener("click", ()=> {
    ham.classList.remove("active");
    body.classList.remove("blurry");
})




/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0";
  } else {
    document.getElementById("header").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}
