// Animate performance bars when in view
document.addEventListener("DOMContentLoaded", () => {
  const performanceSection = document.getElementById("performance");
  const progressBars = document.querySelectorAll("#performance .progress-bar");

  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5, // Trigger when 50% of the section is visible
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        progressBars.forEach((bar) => {
          const progress = bar.dataset.progress;
          bar.style.width = progress + "%";
          bar.setAttribute("aria-valuenow", progress);
        });
        observer.unobserve(entry.target); // Stop observing once animated
      }
    });
  }, observerOptions);

  if (performanceSection) {
    observer.observe(performanceSection);
  }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      window.scrollTo({
        top: target.offsetTop - 80,
        behavior: "smooth",
      });
    }
  });
});

// Initialize Glightbox
const lightbox = GLightbox({
  touchNavigation: true,
  loop: true,
  autoplayVideos: true,
});
