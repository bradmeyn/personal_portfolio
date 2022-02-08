



const nav = document.querySelector('.nav');
const ham = document.querySelector(".hamburger");
const body = document.querySelector("body");
const content = document.querySelector(".content");
const links = document.querySelectorAll(".nav__item");

nav.style.transition = "none";

//remove transition property from navigation during window resizing
let resizeTimer;
window.addEventListener("resize", () => {
  nav.style.transition = "none";
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(() => {
    nav.style.transition = "all 0.4s ease-in-out";
  }, 400);
});

//click on hamburger opens navbar, adds blur to content & locks screen
ham.addEventListener("click", () => {
  nav.style.transition = "all 0.4s ease-in-out";
  ham.classList.toggle("active");
  body.classList.toggle("blurry");
  body.classList.toggle('scroll-lock');
});

//close navbar, remove blur & unlock scroll on resize
window.addEventListener("resize", () => {
  if (window.innerWidth > 760) {
    ham.classList.remove("active");
    body.classList.remove("blurry");
    body.classList.remove('scroll-lock')
  }
});

//close navbar, remove blur & unlock scroll when content is clicked
content.addEventListener("click", () => {
  ham.classList.remove("active");
  body.classList.remove("blurry");
  body.classList.remove('scroll-lock');
});

links.forEach((link) => {
  link.addEventListener("click", () => {
    if (window.innerWidth < 768) {
      body.classList.toggle('scroll-lock');
      ham.classList.toggle("active");
      body.classList.toggle("blurry");
      
    }
  });
});

//animate on scroll
AOS.init({
  once: true,
});

