document.addEventListener("DOMContentLoaded", function () {
  const nav = document.querySelector("nav");
  const mobileNav = document.querySelector("nav.mobile-nav");
  const menuIcon = document.querySelector(".menu-icon");
  const closeIcon = document.querySelector(".mobile-menu-container.close-icon");
  const mobileMenuContainer = document.querySelector(".mobile-menu-container");
  
  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 60) {
      nav.classList.add("scrolled");
      mobileNav.classList.add("scrolled");
    } else {
      nav.classList.remove("scrolled");
      mobileNav.classList.remove("scrolled");
    }
  });
  
  menuIcon.addEventListener("click", () => {
    mobileMenuContainer.classList.add("active");
  });
  
  closeIcon.addEventListener("click", () => {
    mobileMenuContainer.classList.remove("active");
  });
});

  // Initialize Swiper
var swiper = new Swiper("swiper-container", {
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    // Enable full auto pagination
    autoPagination: true,
  },
  // Add navigation buttons
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});