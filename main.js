var portfolioNav = document.querySelector(".portfolio-click");
function footerAnimation() {
  var e = document.querySelector("footer");
  e.getBoundingClientRect().top < window.innerHeight / 1.2 &&
    !e.classList.contains("animated") &&
    (e.classList.add("animated"),
    anime
      .timeline({ easing: "easeOutExpo", duration: 1e3 })
      .add({
        targets: "footer .divider h1",
        opacity: [0, 1],
        translateX: [-100, 0],
      })
      .add({ targets: "footer .divider .line", scaleX: [0, 1] }, "-=800")
      .add(
        {
          targets: "footer .navigation p",
          translateY: [50, 0],
          opacity: [0, 1],
          delay: anime.stagger(200),
        },
        "-=500"
      ));
}
portfolioNav &&
  portfolioNav.addEventListener("click", () => {
    localStorage.setItem("introAnimationToggle", 1);
  }),
  document
    .querySelector("footer")
    .querySelector(".navigation")
    .querySelectorAll("p")
    .forEach((e) => {
      e.classList.add("clear");
    }),
  window.addEventListener("scroll", footerAnimation);
var navElement = document.querySelector("nav"),
  navList = navElement.querySelector("ul"),
  hamburgerIcon = navElement.querySelector(".hamburger"),
  crossIcon = navElement.querySelector(".cross");
let animating = !1;
function outroHamburger() {
  crossIcon.querySelectorAll("div").forEach((e) => {
    e.style.transform = "rotate(0deg)";
  }),
    (animating = !0),
    anime({
      targets: "nav ul li",
      duration: 800,
      easing: "easeInExpo",
      opacity: [1, 0],
      translateX: [0, -100],
      delay: anime.stagger(100),
      complete: () => {
        (animating = !1),
          crossIcon.querySelectorAll("div").forEach((e) => {
            e.removeAttribute("style");
          }),
          navList.querySelectorAll("li").forEach((e) => {
            e.removeAttribute("style");
          }),
          hamburgerIcon.querySelector(".line").removeAttribute("style"),
          navElement.removeAttribute("style"),
          navList.removeAttribute("style"),
          document.querySelector("body").removeAttribute("style"),
          hamburgerIcon.classList.toggle("open");
      },
    });
}
hamburgerIcon.addEventListener("click", () => {
  hamburgerIcon.classList.contains("open") || animating
    ? hamburgerIcon.classList.contains("open") && !animating && outroHamburger()
    : ((animating = !0),
      (document.querySelector("body").style.overflowY = "hidden"),
      (navElement.style.backgroundColor = "#ffffff"),
      (navList.style.display = "flex"),
      (hamburgerIcon.querySelector(".line").style.width = "0%"),
      crossIcon.querySelectorAll("div").forEach((e) => {
        (e.style.width = "100%"), (e.style.transform = "rotate(0deg)");
      }),
      anime({
        targets: "nav ul li",
        duration: 800,
        easing: "easeOutExpo",
        opacity: [0, 1],
        translateX: [-100, 0],
        delay: anime.stagger(100),
        complete: () => {
          (animating = !1),
            hamburgerIcon.classList.toggle("open"),
            crossIcon.querySelectorAll("div").forEach((e) => {
              e.removeAttribute("style"), (e.style.width = "100%");
            });
        },
      }));
}),
  window.addEventListener("resize", () => {
    hamburgerIcon.classList.contains("open") &&
      window.innerWidth > 1e3 &&
      (crossIcon.querySelectorAll("div").forEach((e) => {
        e.removeAttribute("style");
      }),
      navList.querySelectorAll("li").forEach((e) => {
        e.removeAttribute("style");
      }),
      hamburgerIcon.querySelector(".line").removeAttribute("style"),
      navElement.removeAttribute("style"),
      navList.removeAttribute("style"),
      document.querySelector("body").removeAttribute("style"),
      hamburgerIcon.classList.toggle("open"));
  }),
  document
    .querySelector(".navigation")
    .querySelectorAll("a")
    .forEach((e) => {
      e.target = "_blank";
    }),
  (document.querySelector(".navigation").querySelectorAll("a")[0].href =
    "https://wa.me/628118121011?text=Halo%20href.id%21%20Mau%20tanya-tanya%20dong%20soal%20website."),
  (document.querySelector(".navigation").querySelectorAll("a")[1].href =
    "mailto:href.indonesia@gmail.com"),
  (document.querySelector(".navigation").querySelectorAll("a")[2].href =
    "https://www.instagram.com/href.id/"),
  (document.querySelector(".navigation").querySelectorAll("a")[3].href =
    "https://www.linkedin.com/company/href-id/");
