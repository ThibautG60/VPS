let navbar = document.querySelector('header');
let logo = document.getElementById('logo');
let burger = document.getElementById('iconBurger');
let mainPos = document.querySelector('main').children;

window.addEventListener('scroll', function () {
    if (mainPos[0].getBoundingClientRect().y <= 0 && mainPos[0].getBoundingClientRect().y >= -50 || mainPos[1].getBoundingClientRect().y >= 0 && mainPos[1].getBoundingClientRect().y <= 50) {
        navbar.style.backgroundColor = 'rgb(13, 47, 129)';
        navbar.firstElementChild.style.color = 'white';
        logo.style.fill = 'rgb(255, 231, 170)';
        burger.style.fill = 'rgb(255, 231, 170)';
    }

    if (mainPos[1].getBoundingClientRect().y <= 0 && mainPos[1].getBoundingClientRect().y >= -50 || mainPos[2].getBoundingClientRect().y >= 0 && mainPos[2].getBoundingClientRect().y <= 50) {
        navbar.style.backgroundColor = 'rgb(255, 231, 170)';
        navbar.firstElementChild.style.color = 'black';
        logo.style.fill = 'rgb(13, 47, 129)';
        burger.style.fill = 'rgb(13, 47, 129)';
    }

    if (mainPos[2].getBoundingClientRect().y <= 0 && mainPos[2].getBoundingClientRect().y >= -50) {
        navbar.style.backgroundColor = 'rgb(13, 47, 129)';
        navbar.firstElementChild.style.color = 'white';
        logo.style.fill = 'rgb(255, 231, 170)';
        burger.style.fill = 'rgb(255, 231, 170)';
    }
});
