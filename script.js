document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const targetID = this.getAttribute('href');
    document.querySelector(targetID).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

