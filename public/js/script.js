// Smooth scroll to portfolio section
document.querySelector('.btn').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#portfolio').scrollIntoView({
        behavior: 'smooth'
    });
});

const text = "Hello, I'm a Full Stack Developer";
let index = 0;

function type() {
    if (index < text.length) {
        document.getElementById('typing-text').textContent += text.charAt(index);
        index++;
        setTimeout(type, 100); // Delay in milliseconds
    }
}

type();