/*!
* Start Bootstrap - Creative v7.0.7 (https://startbootstrap.com/theme/creative)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
*/
//
// Scripts
// 
var activeMenu = ''
window.addEventListener('DOMContentLoaded', event => {
    // on load set active menu 
    const href = window.location.href
    const section = href.split('#')[1];
    if (section) {
        activeMenu = section
        document.querySelector(`.nav-${section}-icon`).src = `./assets/${section}-active-icon.svg`
    }
    // Remove active menu on scroll top
    function resetActiveNav() {
        if (window.scrollY === 0) {
            if (activeMenu) {
                document.querySelector(`.nav-${activeMenu}-icon`).src = `assets/${activeMenu}-icon.svg`
            }
            navbarCollapsible.classList.remove('navbar-shrink')
        }
    }

    document.addEventListener('scroll', resetActiveNav);

    // Change nav icon when active
    function setNavIconActiveImg(navItemId) {
        let oldActiveMenu = activeMenu
        switch(navItemId) {
            case 'home-item':
                activeMenu = 'home'
                break;
            case 'studio-item':
                activeMenu = 'studio'
                break;
            case 'reservation-item':
                activeMenu = 'reservation'
                break;
            case 'services-item':
                activeMenu = 'services'
                break;
            case 'about-item':
                activeMenu = 'about'
                break;
            default:
                // code block
        }
        oldActiveMenu && (document.querySelector(`.nav-${oldActiveMenu}-icon`).src = `assets/${oldActiveMenu}-icon.svg`)
        document.querySelector(`.nav-${activeMenu}-icon`).src = `assets/${activeMenu}-active-icon.svg`
    }

    const navItems = [].slice.call(
        document.querySelectorAll('.navbar-nav .nav-link')
    );

    navItems.map(function (navItem) {
        navItem.addEventListener('click', () => {
            setNavIconActiveImg(navItem.id)
        });
    });
});