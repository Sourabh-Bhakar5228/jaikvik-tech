// Product Swiper
var swiper = new Swiper(".techslider", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  speed: 1000,
  autoplay: true,
  autoplay: {
    delay: 2500,

    // disableOnInteraction: false, // Set to true if you want autoplay to stop on interaction
    // waitForTransition: false, // Set to true if you want autoplay to wait for transition completion
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    clickable: true,
  },
  breakpoints: {
    340: {
      slidesPerView: 1.2,
    },
    640: {
      slidesPerView: 2.5,
    },
    768: {
      slidesPerView: 3.5,
    },
    1024: {
      slidesPerView: 4.5,
    },
  },
});

// Handle each video in the slider
document.querySelectorAll(".swiper-container video").forEach((video) => {
  // When the user hovers over a video
  video.addEventListener("mouseenter", () => {
    swiper.autoplay.stop(); // Stop Swiper autoplay
    swiper.allowTouchMove = false; // Disable manual slider movement
    video.play(); // Start video playback
  });

  // When the user's cursor leaves the video
  video.addEventListener("mouseleave", () => {
    // Only resume the slider if the video is NOT playing
    if (video.paused || video.ended) {
      swiper.autoplay.start(); // Resume Swiper autoplay
      swiper.allowTouchMove = true; // Enable manual slider movement
    }
  });

  // When the video finishes playing
  video.addEventListener("ended", () => {
    swiper.autoplay.start(); // Resume Swiper autoplay
    swiper.allowTouchMove = true; // Enable manual slider movement
  });
});

// Services Swiper One
var swiper = new Swiper(".serOneSwiper", {
  slidesPerView: 1,
  loop: true,
  autoplay: true,
  autoplay: {
    delay: 3000,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    clickable: true,
  },
  breakpoints: {
    340: {
      slidesPerView: 1.2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3.5,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 4.5,
      spaceBetween: 15,
    },
  },
});

var swiper = new Swiper(".serOneSwiper1", {
  slidesPerView: 1,
  loop: true,
  rtl: true,
  autoplay: true,
  autoplay: {
    delay: 3000,
    reverseDirection: true,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    clickable: true,
  },
  breakpoints: {
    340: {
      slidesPerView: 1.2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3.5,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 4.5,
      spaceBetween: 15,
    },
  },
});

// Services Swiper Two
var swiper = new Swiper(".serTwoSwiper", {
  slidesPerView: 1,
  loop: true,
  reverseDirection: false,
  autoplay: true,
  autoplay: {
    delay: 7000,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    clickable: true,
  },
  breakpoints: {
    340: {
      slidesPerView: 1.2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3.5,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 4.3,
      spaceBetween: 5,
    },
  },
});

var swiper = new Swiper(".techSwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  speed: 3000,
  autoplay: true,
  autoplay: {
    delay: 0,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    clickable: true,
  },
  breakpoints: {
    340: {
      slidesPerView: 1.2,
    },
    640: {
      slidesPerView: 2.5,
    },
    768: {
      slidesPerView: 3.5,
    },
    1024: {
      slidesPerView: 4.5,
    },
  },
});

var swiper = new Swiper(".serOneSwiper", {
  slidesPerView: 1,
  loop: true,
  autoplay: true,
  autoplay: {
    delay: 3000,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    clickable: true,
  },
  breakpoints: {
    340: {
      slidesPerView: 1.2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3.5,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 4.5,
      spaceBetween: 15,
    },
  },
});

// Blog First Start
var swiper = new Swiper(".blogLeftSwiper", {
  loop: true,
  autoplay: true,
  rtl: false,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    340: {
      slidesPerView: 1.2,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2.5,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },
});
// Blog First End

// Blog Second Start
var swiper = new Swiper(".blogRightSwiper", {
  loop: true,
  // effect: "fade",
  autoplay: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 1.2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
  },
});
// Blog Second End

// Post Slider Start
var swiper = new Swiper(".postSwiper", {
  loop: true,
  // effect: "fade",
  autoplay: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    340: {
      slidesPerView: 1.2,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    660: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4.7,
      spaceBetween: 10,
    },
  },
});
// Post Slider End

// Reel Slider Start
// Swiper initialization
// Initialize Swiper
var videoSlider = new Swiper(".reelSwiper", {
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    340: {
      slidesPerView: 1.3,
      spaceBetween: 5,
    },
    640: {
      slidesPerView: 2.3,
      spaceBetween: 20,
    },
    660: {
      slidesPerView: 3.3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4.3,
      spaceBetween: 10,
    },
  },
});

// Add event listeners to video elements
document.querySelectorAll(".reelSwiper .swiper-video").forEach((video) => {
  video.addEventListener("mouseenter", () => {
    video.muted = false; // Unmute the video
    video.volume = 1.0; // Set volume to full
    video.play(); // Play the video
    videoSlider.autoplay.stop(); // Stop slider autoplay
  });

  video.addEventListener("mouseleave", () => {
    video.pause(); // Pause the video
    video.currentTime = 0; // Reset to start
    video.muted = true; // Mute the video
    videoSlider.autoplay.start(); // Resume slider autoplay
  });

  video.addEventListener("play", () => {
    videoSlider.autoplay.stop(); // Stop autoplay when video plays
  });

  video.addEventListener("pause", () => {
    videoSlider.autoplay.start(); // Resume autoplay when video pauses
  });

  video.addEventListener("ended", () => {
    // Since `loop` is enabled, this may not be necessary, but included for safety
    videoSlider.autoplay.start(); // Resume autoplay when video ends
  });
});
// Reel Slider End

// Website Slider Start
var swiper = new Swiper(".websiteSwiper", {
  loop: true,
  // effect: "fade",
  autoplay: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    340: {
      slidesPerView: 1.2,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 1.5,
      spaceBetween: 20,
    },
    660: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 2.7,
      spaceBetween: 10,
    },
  },
});
// Website Slider End

// Review Swiper
var swiper = new Swiper(".reviewSwiper", {
  loop: true,
  speed: 1000,
  effect: "slide",
  easing: "liner",
  autoplay: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    clickable: true,
  },
  breakpoints: {
    340: {
      slidesPerView: 1.1,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 2.2,
      spaceBetween: 20,
    },
    660: {
      slidesPerView: 3.2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3.5,
      spaceBetween: 10,
    },
  },
});

// Client Section Scroll
const scrollers = document.querySelectorAll(".scroller");

scrollers.forEach((scroller) => {
  const scrollerInner = scroller.querySelector(".scroller__inner");
  const items = Array.from(scrollerInner.children);

  items.forEach((item) => {
    const clone = item.cloneNode(true);
    clone.setAttribute("aria-hidden", true);
    scrollerInner.appendChild(clone);
  });
});

// Bottom To Top
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      $(".topBtn").fadeIn(250);
    } else {
      $(".topBtn").fadeOut(250);
    }
  });
  $(".topBtn").click(function () {
    $("html,body").animate({ scrollTop: 0 }, 400);
  });
});

// Review Modal Pop
const reviewModal = document.querySelector(".reviewModal");
const openReviewModalBtns = document.querySelectorAll(".openReviewModalBtn");
const closeReviewModalBtn = document.querySelector(".reviewModal-close-btn");

openReviewModalBtns.forEach((button) => {
  button.addEventListener("click", () => {
    reviewModal.classList.add("show");
  });
});

closeReviewModalBtn.addEventListener("click", () => {
  reviewModal.classList.remove("show");
});

window.addEventListener("click", (e) => {
  if (e.target === reviewModal) {
    reviewModal.classList.remove("show");
  }
});

// banner slider
