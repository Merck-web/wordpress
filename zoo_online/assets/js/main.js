window.addEventListener('DOMContentLoaded', function () {
    const body = document.querySelector('body');
    //ПОЛУЧАЕМ ИЗ ЛОКАЛ СТОРАГЕ ТЕМУ
    const theme = localStorage.getItem('theme') || '';
    if (theme === 'dark_mode') body.classList.add('dark_mode');
    else body.classList.remove('dark_mode');
    //ПОЛУЧАЕМ ИЗ ЛОКАЛ СТОРАГЕ ТЕМУ
    //switch theme
    const switchButton = document.querySelector('header .theme_button input');
    const svg = document.querySelectorAll('header .image svg path');

    if (theme === 'dark_mode') switchButton.checked = true;

    switchButton.onclick = function () {
        body.classList.toggle('dark_mode');
        if (body.classList.contains('dark_mode')) localStorage.setItem('theme', 'dark_mode')
        else localStorage.setItem('theme', '')

        svg.forEach(item => {
            if (body.classList.contains('dark_mode')) item.style.fill = '#FFFFFF'
            else item.style.fill = '#333333'
        })
    }

    svg.forEach(item => {
        if (body.classList.contains('dark_mode')) item.style.fill = '#FFFFFF'
        else item.style.fill = '#333333'
    })
    //switch theme

    //open mobile menu
    const menuBurger = document.querySelector('header .menu_burger .hamburger');
    const modalWindowNav = document.querySelector('header .modal_nav_menu');
    const urlInModalMobile = document.querySelectorAll('header .modal_nav_menu li a')
    let disableButton = false;

    function changeNavMenu() {
        if (!disableButton) {
            disableButton = true;

            menuBurger.classList.toggle('is-active');

            if (menuBurger.classList.contains('is-active')) {
                modalWindowNav.classList.add('open');
                modalWindowNav.style.display = "flex";
                setTimeout(() => {
                    modalWindowNav.classList.remove('open');
                    disableButton = false;
                }, 400)
            } else if (!menuBurger.classList.contains('is-active')) {
                modalWindowNav.classList.add('close');
                setTimeout(() => {
                    modalWindowNav.classList.remove('close');
                    modalWindowNav.style.display = "none";
                    disableButton = false;
                }, 400)
            }
        }
    }

    menuBurger.addEventListener('click', changeNavMenu);

    urlInModalMobile.forEach(item => {
        item.addEventListener('click', changeNavMenu)
    })
    //open mobile menu
})
