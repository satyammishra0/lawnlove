// ---------------------
// Header Transformation
// ---------------------

const mobileNav = document.querySelector(".mobile-navbar-btn");

const header = document.querySelector(".header");

function toggleMobileNav() {
  header.classList.toggle("active");
}

mobileNav.addEventListener("click", () => toggleMobileNav());
