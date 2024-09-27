document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".navbar-nav .nav-item .nav-link");
  
    // Dapatkan nilai parameter 'page' dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const currentPage = urlParams.get('page') || 'beranda'; // Default ke 'beranda' jika parameter 'page' tidak ada
  
    navLinks.forEach((link) => {
      // Dapatkan nilai parameter 'page' dari href link
      const linkPage = new URLSearchParams(link.getAttribute('href').split('?')[1]).get('page') || 'beranda';
  
      if (linkPage === currentPage) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  });
  