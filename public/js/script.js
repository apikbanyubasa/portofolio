const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');

// SINGLE event listener, no duplicate
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('hamburger-active');

    if (mobileMenu.classList.contains('open')) {
        // Tambahkan animasi keluar
        mobileMenu.classList.add('animate-fade-up');
        setTimeout(() => {
            mobileMenu.classList.remove('open', 'animate-fade-up');
            mobileMenu.classList.add('hidden');
        }, 1200); // tunggu animasi fade-up selesai (1.2s)
    } else {
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('open', 'animate-fade-down');

        // Hapus animasi biar bisa diulang lagi
        setTimeout(() => {
            mobileMenu.classList.remove('animate-fade-down');
        }, 1200);
    }
});


// Navbar scroll effect
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    navbar.classList.toggle('navbar-scrolled', window.scrollY > 20);
});

// Fade-up effect on scroll
const fadeEls = document.querySelectorAll('.fade-up');
const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.1 });
fadeEls.forEach(el => fadeObserver.observe(el));
