document.addEventListener(
  "click",
  function (e) {
    // NAV
    if (e.target.closest(".s-nav-toggle")) {
      e.target.classList.toggle("active");
      document.querySelector(".s-nav").classList.toggle("active");
      document.body.classList.toggle("s-nav-active");
    }
    // EXPAND
    if (e.target.closest(".s-expand-toggle")) {
      document.querySelector(".s-expand-toggle").classList.toggle("active");
      document.querySelector(".s-expand-content").classList.toggle("active");
    }
  },
  false
);
