let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').addEventListener('click', function() {
    loginForm.classList.add('active');
});

document.querySelector('#close-login-form').addEventListener('click', function() {
    loginForm.classList.remove('active');
});

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');

menu.addEventListener('click', function() {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

window.addEventListener('scroll', function() {
    loginForm.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if (window.scrollY > 0) {
        document.querySelector('.header').classList.add('active');
    } else {
        document.querySelector('.header').classList.remove('active');
    }
});

/* bannner */

document.querySelector(".banner__close").addEventListener("click", function () {
    this.closest(".banner").style.display = "none";
  });
  