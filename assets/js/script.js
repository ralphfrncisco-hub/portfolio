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

// function updateCharCount() {
//     const textarea = document.getElementById("user_message");
//     const counter = document.getElementById("charCount");
//     const length = textarea.value.length;
//     counter.textContent = `${length} / 300`;
//   }


// function adjustPadding() {
//     const aboutMeDesc = document.getElementById('about-me-desc');
//     const divSect = document.getElementById("div-sect");
//     const aboutMeParagraph = document.getElementsByClassName("about-me-pargph")[0];

//     if (window.innerWidth <= 768) {
//         aboutMeDesc.classList.remove('pe-4');
//         aboutMeDesc.classList.add('pe-1');
//         aboutMeParagraph.classList.remove('p-5');
//         divSect.style.height = '150px';
//     }
//     else {
//         aboutMeDesc.classList.remove('pe-1');
//         aboutMeDesc.classList.add('pe-4');
//         aboutMeParagraph.classList.add('p-5'); // Re-add p-5 on large screens
//     }
// }

// window.addEventListener('resize', adjustPadding);
// window.addEventListener('load', adjustPadding);

document.addEventListener("DOMContentLoaded", () => {
  // Get all sections with IDs and nav links
  const sections = document.querySelectorAll("div[id]");
  const navLinks = document.querySelectorAll(".nav-link");

  // Set initial active state to home
  const homeLink = document.querySelector('#home-link');
  if (homeLink) {
    homeLink.classList.add("active");
  }

  // Smooth scrolling for nav links
  navLinks.forEach(link => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      
      const targetId = link.getAttribute("href").substring(1);
      const targetSection = document.getElementById(targetId);
      
      if (targetSection) {
        // Smooth scroll to section
        targetSection.scrollIntoView({
          behavior: "smooth",
          block: "start"
        });
        
        // Update active state immediately
        updateActiveNavLink(targetId);
      }
    });
  });

  // Function to update active nav link
  function updateActiveNavLink(sectionId) {
    // Remove active class from all nav links
    navLinks.forEach(link => link.classList.remove("active"));
    
    // Add active class to corresponding nav link
    const activeLink = document.querySelector(`[href="#${sectionId}"]`);
    if (activeLink) {
      activeLink.classList.add("active");
    }
  }

  // Intersection Observer to detect which section is currently visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const sectionId = entry.target.getAttribute("id");
        updateActiveNavLink(sectionId);
      }
    });
  }, {
    threshold: 0.5, // Trigger when 50% of section is visible
    rootMargin: "-10% 0px -10% 0px" // Adjust trigger point
  });

  // Observe all sections
  sections.forEach(section => {
    observer.observe(section);
  });

  // Handle scroll to top (home section)
  window.addEventListener("scroll", () => {
    if (window.scrollY === 0) {
      updateActiveNavLink("home");
    }
  });

  // Add the image changing function here
  function changeImageOnMobile() {
    const image = document.getElementById('profile-image');
    if (image) { // Add this check to make sure the element exists
      const mobileImage = 'assets/images/IMG_08335_mobile.png';
      const desktopImage = 'assets/images/IMG_08335.png';
      
      if (window.innerWidth <= 450) {
        image.src = mobileImage;
      } else {
        image.src = desktopImage;
      }
    }
  }

  // Run on page load
  changeImageOnMobile();

  // Run when window is resized
  window.addEventListener('resize', changeImageOnMobile);
});