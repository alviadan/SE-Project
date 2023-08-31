
// Untuk bagian bawah nav-item yg garisnya.
const navItems = document.querySelectorAll('.nav-item');

navItems.forEach(navItem => {
    const strip = navItem.querySelector('.strip');
    const navLink = navItem.querySelector('.nav-link');

    if (navLink.classList.contains('active')) {
        strip.classList.remove('d-none');
        strip.classList.add('d-block');
    }
    else {
        strip.classList.remove('d-block');
        strip.classList.add('d-none');
    }
});


