// Mobile Header Menu Functionality
document.addEventListener('DOMContentLoaded', function() {
    const hamburgerHolder = document.querySelector('.hamburger-holder');
    const openMenu = hamburgerHolder.querySelector('img[src*="open-menu"]');
    const closeMenu = hamburgerHolder.querySelector('img[src*="close-menu"]');
    const mobileMenu = document.querySelector('.mega-menu-mobile-holder');
    const menuItems = document.querySelectorAll('.mobile-menu-item');
    const mobileMenuListItems = document.querySelectorAll('.hamburger-menu > li');

    let isMenuOpen = false;

    // Initially hide close menu and mobile menu
    closeMenu.classList.add('hidden');
    mobileMenu.classList.add('hidden');

    // Function to open menu
    function openMobileMenu() {
        isMenuOpen = true;
        openMenu.classList.add('fade-out');
        closeMenu.classList.remove('hidden');
        closeMenu.classList.add('fade-in');
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('slide-in');

        // Animate menu items
        gsap.fromTo(menuItems, { opacity: 0, y: -10 }, { opacity: 1, y: 0, duration: 0.3, stagger: 0.1, delay: 0.2, ease: "power2.out" });
    }

    // Function to close menu
    function closeMobileMenu() {
        isMenuOpen = false;
        closeMenu.classList.add('fade-out');
        closeMenu.classList.remove('fade-in');
        openMenu.classList.remove('fade-out');
        mobileMenu.classList.add('slide-out');
        setTimeout(() => {
            closeMenu.classList.add('hidden');
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('slide-in', 'slide-out');
        }, 300);
    }

    // Toggle menu on hamburger click
    hamburgerHolder.addEventListener('click', function() {
        if (isMenuOpen) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    });

    // Handle dropdown submenus
    mobileMenuListItems.forEach(item => {
        const submenu = item.querySelector('ul');
        if (submenu) {
            const link = item.querySelector('a');
            if (link) {
                // Create a toggle button for dropdown
                const toggleBtn = document.createElement('span');
                toggleBtn.className = 'dropdown-toggle';
                toggleBtn.innerHTML = '';
                link.parentNode.insertBefore(toggleBtn, submenu);

                // Toggle submenu on click
                toggleBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    submenu.classList.toggle('show');
                    toggleBtn.classList.toggle('active');
                });

                // Prevent default link behavior when there's a submenu
                link.addEventListener('click', function(e) {
                    if (submenu) {
                        e.preventDefault();
                        submenu.classList.toggle('show');
                        toggleBtn.classList.toggle('active');
                    }
                });
            }
        }
    });

    // Close menu when clicking on direct links (not dropdowns)
    menuItems.forEach(item => {
        // Only close if it doesn't have a submenu
        if (!item.parentElement.querySelector('ul')) {
            item.addEventListener('click', function() {
                closeMobileMenu();
            });
        }
    });

    // Optional: Close menu on outside click
    document.addEventListener('click', function(e) {
        if (!hamburgerHolder.contains(e.target) && !mobileMenu.contains(e.target) && isMenuOpen) {
            closeMobileMenu();
        }
    });

    // Add some hover animations to menu items
    menuItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            gsap.to(this, { scale: 1.05, duration: 0.2, ease: "power2.out" });
        });
        item.addEventListener('mouseleave', function() {
            gsap.to(this, { scale: 1, duration: 0.2, ease: "power2.out" });
        });
    });
});