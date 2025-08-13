document.addEventListener('DOMContentLoaded', () => {
  const navbar1 = document.getElementById('navbar');
  console.log(navbar1)
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar1.classList.add('scrolled');
    } else {
      navbar1.classList.remove('scrolled');
    }
  });
});

function updateCharCount() {
    const textarea = document.getElementById("user_message");
    const counter = document.getElementById("charCount");
    const length = textarea.value.length;
    counter.textContent = `${length} / 300`;
  }


function adjustPadding() {
    const aboutMeDesc = document.getElementById('about-me-desc');
    const divSect = document.getElementById("div-sect");
    const aboutMeParagraph = document.getElementsByClassName("about-me-pargph")[0];

    if (window.innerWidth <= 768) {
        aboutMeDesc.classList.remove('pe-4');
        aboutMeDesc.classList.add('pe-1');
        aboutMeParagraph.classList.remove('p-5');
        divSect.style.height = '150px';
    }
    else {
        aboutMeDesc.classList.remove('pe-1');
        aboutMeDesc.classList.add('pe-4');
        aboutMeParagraph.classList.add('p-5'); // Re-add p-5 on large screens
    }
}

window.addEventListener('resize', adjustPadding);
window.addEventListener('load', adjustPadding);

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("div[id]");
  const navLinks = document.querySelectorAll(".nav-link");

  // Set default active link to Home
  const homeLink = document.querySelector('.nav-link[href="#home"]');
  if (homeLink) homeLink.classList.add("active");

  // Smooth scroll behavior
  navLinks.forEach(link => {
    link.addEventListener("click", e => {
      e.preventDefault();
      const targetId = link.getAttribute("href").substring(1);
      const targetSection = document.getElementById(targetId);

      if (targetSection) {
        targetSection.scrollIntoView({
          behavior: "smooth",
          block: "start"
        });

        // Immediate feedback (optional)
        navLinks.forEach(l => l.classList.remove("active"));
        link.classList.add("active");
      }
    });
  });

  // Intersection Observer to update active state
  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const id = entry.target.getAttribute("id");
          const activeLink = document.querySelector(`.nav-link[href="#${id}"]`);
          if (activeLink) {
            navLinks.forEach(link => link.classList.remove("active"));
            activeLink.classList.add("active");
          }
        }
      });
    },
    {
      threshold: 0.6, // Stable detection
      rootMargin: "0px 0px -40% 0px" // Trigger before fully scrolled in
    }
  );

  // Observe all sections
  sections.forEach(section => observer.observe(section));

  // Ensure Home stays active when at very top
  window.addEventListener("scroll", () => {
    if (window.scrollY === 0 && homeLink) {
      navLinks.forEach(link => link.classList.remove("active"));
      homeLink.classList.add("active");
    }
  });
});



