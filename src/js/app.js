const header = document.querySelector('.site-header-container');
const hamburgerButton = document.getElementById('hamburger-button');
const menu = document.getElementById('menu');

hamburgerButton.addEventListener('click', function() {
    this.classList.toggle('is-active');
    menu.classList.toggle('is-active');
    header.classList.toggle('menu-active');
});