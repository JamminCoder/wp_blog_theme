const collapse = document.querySelector('.collapse-btn');
const navContent = document.querySelector('.nav__content');
const nav = document.querySelector('.nav');

collapse.onclick = () => {
    navContent.classList.toggle('nav-expanded');
}

window.onresize = () => {
    resetNavbar(navContent);
}


function resetNavbar(nav) {
    nav.classList.remove('nav-expanded');
    nav.classList.add('nav-collapsed');
}