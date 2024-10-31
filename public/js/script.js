// Smooth scroll to portfolio section
document.querySelector('.btn').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#portfolio').scrollIntoView({
        behavior: 'smooth'
    });
});

document.addEventListener("DOMContentLoaded", function () {
  let locale = document.documentElement.lang;
  let text;

  if(locale == 'en') {
    text = "Hello, I'm a Full Stack Developer";
  } else if (locale == 'id') {
      text = 'Halo, Saya Seorang Pengembang Full Stack';
  } else {
      text = 'Language not supported';
  }

  let index = 0;

  function type() {
      if (index < text.length) {
          document.getElementById('typing-text').textContent += text.charAt(index);
          index++;
          setTimeout(type, 100); // Delay in milliseconds
      }
  }

  type();
});

window.addEventListener('scroll', function () {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
      navbar.classList.remove('bg-transparent');
      navbar.classList.add('bg-black');
    } else {
      navbar.classList.remove('bg-black');
      navbar.classList.add('bg-transparent');
    }
  });