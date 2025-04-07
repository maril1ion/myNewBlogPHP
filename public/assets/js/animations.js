"use strict";

gsap.registerPlugin(ScrollTrigger);
// nav animation
function scroll() {
  ScrollTrigger.create({
    start: "top -100",
    end: 99999,
    toggleClass: {
      className: "nav--scrolled",
      targets: ".nav",
    },
  });
}
scroll();
const nav = document.querySelector(".nav");

nav.addEventListener("mouseover", function (e) {
  nav.classList.toggle("opactiy-nav");
});

nav.addEventListener("mouseout", function (e) {
  nav.classList.toggle("opactiy-nav");
});

let tl = gsap.timeline({ repeat: -1 });
// rgba(245, 229, 196, 1)
// avatar img animation
tl.to(".avatar__animation-shadow img", {
  boxShadow: "0px 0px 40px 20px rgba(255, 255, 255, 1)",
  duration: 1,
});
tl.to(".avatar__animation-shadow img", {
  boxShadow: "0px 0px 40px 30px rgba(255, 255, 255, 1)",
  duration: 1,
});
tl.to(".avatar__animation-shadow img", {
  boxShadow: "0px 0px 40px 20px rgba(255, 255, 255, 1)",
  duration: 1,
});
tl.to(".about_me-title", {
  backgroundColor: "rgb(18, 7, 15)",
  backgroundClip: "content-box",
});
tl.to(".about_me-title", {
  color: "#f5e5c4",
  boxShadow: "0px 0px 80px 2px rgba(245, 229, 196, 1) inset",
  border: "5px solid rgba(245, 229, 196, 1)",
});

tl.to(".about_me-title", {
  color: "#12070f",
  boxShadow: "0px 0px 80px 300px rgb(245, 229, 196) inset",
  backgroundColor: "rgba(245, 229, 196, 1)",
  backgroundClip: "content-box",
  border: "5px solid rgba(245, 229, 196, 1)",
  duration: 1,
});

tl.to(".about_me-title", {
  color: "#f5e5c4",
  backgroundColor: "rgb(18, 7, 15)",
  backgroundClip: "content-box",
  boxShadow: "0px 0px 80px 2px rgba(245, 229, 196, 1) inset",
  border: "5px solid rgba(245, 229, 196, 1)",
});

let tl_arrow = gsap.timeline({ repeat: -1 });
tl_arrow.to(".arrow_down", {
  y: -40,
  delay: 1,
  duration: 1,
});

tl_arrow.to(".arrow_down", {
  y: 100,
});

tl_arrow.restart(false);
