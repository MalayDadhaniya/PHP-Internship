function showSidebar() {
  const sidebar = document.querySelector(".sidebar");
  sidebar.style.display = "flex";
}
function hideSidebar() {
  const sidebar = document.querySelector(".sidebar");
  sidebar.style.display = "none";
}

let lastScrollY = window.scrollY;

window.addEventListener('scroll', function () {
  const navbar = document.getElementById('navbar');
  const currentScrollY = window.scrollY;

  if (currentScrollY > 200) {
    if (currentScrollY > lastScrollY) {
      // Scrolling down
      navbar.classList.add('hidden-navbar');
    } else {
      // Scrolling up
      navbar.classList.remove('hidden-navbar');
      navbar.classList.add('fixed-navbar');
    }
  } else {
    navbar.classList.remove('fixed-navbar');
  }

  lastScrollY = currentScrollY;
});