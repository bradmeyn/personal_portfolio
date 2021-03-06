




let ham = document.querySelector(".hamburger");
const body = document.querySelector("body");
const content = document.querySelector(".content");

ham.addEventListener("click", () => {
  ham.classList.toggle("active");
  body.classList.toggle("blurry");
});


//

window.addEventListener("resize", () => {
  if (window.innerWidth > 760) {
    ham.classList.remove("active");
    body.classList.remove("blurry");
  }
});

content.addEventListener("click", () => {
  ham.classList.remove("active");
  body.classList.remove("blurry");
});

const links = document.querySelectorAll(".navbar__link-container");

links.forEach((link) => {
  link.addEventListener("click", () => {
    if (window.innerWidth < 768) {
      ham.classList.toggle("active");
      body.classList.toggle("blurry");
    }
  });
});

//animate on scroll
AOS.init({
  once: true,
});

//particle js
window.onload = () => {
  Particles.init({
    selector: ".particle",

    color: [
      "#accbee",
      "#feada6",
      "#bdc2e8",
      "#fdcbf1",
      "#fccb90",
      "#d57eeb",
      "#f093fb",
      "#4facfe",
      "#43e97b",
      "#6f86d6",
    ],

    speed: 0.3,

    sizeVariatiuons: 10,

    connectParticles: true,

    minDistance: 50,

    maxParticles: 200,

    responsive: [
      {
        breakpoint: 760,
        options: {
          maxParticles: 100,
        },
      },
    ],
  });
};

// /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
// let prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//   let currentScrollPos = window.pageYOffset;
//   if(window.innerWidth < 750){
//     if (prevScrollpos > currentScrollPos) {
//       document.getElementById("header").style.top = "0";
//     } else {
//       document.getElementById("header").style.top = "-100px";
//     }
//     prevScrollpos = currentScrollPos;
//   }

// }
