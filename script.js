const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => entry.target.classList.toggle('show', entry.isIntersecting));
  }, { threshold: 0.2 });
  
  document.querySelectorAll('.about-content, .job, .details, .project, .contact').forEach(element => observer.observe(element));
  
  document.querySelectorAll('h2').forEach(title => observer.observe(title));
  
  observer.observe(document.querySelector('#contact'));
  observer.observe(document.querySelector('#knowledge'));
  