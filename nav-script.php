<script type="text/javascript">
    // var activeMenu = "";
    var templateURL = "<?php  bloginfo('template_url'); ?>";
    window.addEventListener('DOMContentLoaded', event => {
        // on load set active menu 
        const href = window.location.href
        const section = href.split('#')[1];
        // if (section) {
        //     const activeMenuItem = document.querySelector(`.nav-${section}-icon`)
        //     activeMenu = section
        //     activeMenuItem.classList.add('black')
        //     activeMenuItem.classList.remove('white')
        // }

        // Remove active menu on scroll top
        const stickyElem = document.querySelector("#navMain");
        const currStickyPos = stickyElem.getBoundingClientRect().top + window.pageYOffset;

        // function navScrollAnimation() {
        //     const homeNavItems = [].slice.call(
        //         document.querySelectorAll('.nav .home-nav-item')
        //     );

        //     if (window.pageYOffset > currStickyPos) {
        //         homeNavItems.map(function (navItem) {
        //             const navItemId = (navItem.id).replace('-item', '')
        //             const icon = document.querySelector(`.nav-${navItemId}-icon`);
        //             icon.style.height = "20.67px"
        //             navItem.style.padding = "var(--bs-nav-link-padding-y) 20px"
        //         });
        //     } else {
        //         homeNavItems.map(function (navItem) {
        //             const navItemId = (navItem.id).replace('-item', '')
        //             const icon = document.querySelector(`.nav-${navItemId}-icon`);
        //             icon.style.height = "30.67px"
        //             navItem.style.padding = "var(--bs-nav-link-padding-y) 40px"
        //         });
        //     }
        // }

        function scrollFunction(e) {
            const dropdownMenu = document.querySelector('.mobile-nav-menu')
            const navMenu = document.querySelector("#navMain");
            // const menuTitle = document.querySelector('.menu-title-cont')
            // const nav = document.querySelector('.nav')
            // const bookNowBtn = document.querySelector('.nav-book-now-btn')
            if (window.scrollY === 0) {
                // if (activeMenu) {
                //     const activeMenuItem = document.querySelector(`.nav-${section}-icon`)
                //     activeMenu = section
                //     activeMenuItem.classList.remove('black')
                //     activeMenuItem.classList.add('white')
                // }
                dropdownMenu.classList.remove('drop-down-menu-bg')
                navMenu.classList.remove('menu-bg')
                // menuTitle.classList.remove('hidden')
                // nav.style.padding = '52px 0px 10px 0px'
                // bookNowBtn.style.top = '35%'
            } else {
                dropdownMenu.classList.add('drop-down-menu-bg')
                navMenu.classList.add('menu-bg')
                // menuTitle.classList.add('hidden')
                // nav.style.padding = '10px 0px'
                // bookNowBtn.style.top = '22%'
            }

            // Fixed nav when hit the top of the page
            // if(window.pageYOffset > currStickyPos) {
            //     stickyElem.classList.contains('homepage-nav') && stickyElem.classList.remove('homepage-nav')
            //     !stickyElem.classList.contains('fixed-top') && stickyElem.classList.add('fixed-top')
            // } else {
            //     !stickyElem.classList.contains('homepage-nav') && stickyElem.classList.add('homepage-nav')
            //     stickyElem.classList.contains('fixed-top') && stickyElem.classList.remove('fixed-top')
            // }

            // nav bar animation
            // navScrollAnimation()
        }

        document.addEventListener('scroll', scrollFunction);

        // Change nav icon when active
        // function setNavIconActiveImg(navItemId) {
        //     let oldActiveMenu = activeMenu
        //     switch(navItemId) {
        //         case 'home-item':
        //             activeMenu = 'home'
        //             break;
        //         case 'studio-item':
        //             activeMenu = 'studio'
        //             break;
        //         case 'reservation-item':
        //             activeMenu = 'reservation'
        //             break;
        //         case 'services-item':
        //             activeMenu = 'services'
        //             break;
        //         case 'about-item':
        //             activeMenu = 'about'
        //             break;
        //         default:
        //             // code block
        //     }
        //     if (oldActiveMenu === activeMenu) return
        //     if (oldActiveMenu) {
        //         const oldActiveItem = document.querySelector(`.nav-${oldActiveMenu}-icon`)
        //         oldActiveItem.classList.remove('black')
        //         oldActiveItem.classList.add('white')
        //     }
        //     const newActiveMenu = document.querySelector(`.nav-${activeMenu}-icon`)
        //     newActiveMenu.classList.remove('white')
        //     newActiveMenu.classList.add('black')
        // }

        // const navItems = [].slice.call(
        //     document.querySelectorAll('.nav .home-nav-item')
        // );

        // navItems.map(function (navItem) {
        //     navItem.addEventListener('click', () => {
        //         setNavIconActiveImg(navItem.classList[1])
        //     });
        // });

        // Mobile dropdown Menu
        document.querySelector('.nav-menu-button').addEventListener('click', function () {
            document.querySelector('.animated-icon').classList.toggle('open');
        });

        const dropdownItems = [].slice.call(
            document.querySelectorAll('.dropdown-menu .dropdown-item')
        );

        dropdownItems.map(function (navItem) {
            navItem.addEventListener('click', () => {
                document.querySelector('.animated-icon').classList.toggle('open');
            });

        });

    });
</script>