const navLinks = document.querySelectorAll('.nav-item a');

navLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    // Remove active class from all links
    navLinks.forEach(link => link.classList.remove('active'));

    // Add active class to clicked link
    event.target.classList.add('active');
  });
});