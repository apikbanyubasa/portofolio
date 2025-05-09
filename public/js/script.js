 // Hamburger
 const hamburger = document.getElementById('hamburger');
 const mobileMenu = document.getElementById('mobile-menu');
 hamburger.addEventListener('click', () => {
     hamburger.classList.toggle('is-active');
     mobileMenu.classList.toggle('open');
 });

 // Navbar scroll effect
 const navbar = document.getElementById('navbar');
 window.addEventListener('scroll', () => {
     if (window.scrollY > 20) {
         navbar.classList.add('navbar-scrolled');
     } else {
         navbar.classList.remove('navbar-scrolled');
     }
 });

 // Fade-up effect on scroll
 const fadeEls = document.querySelectorAll('.fade-up');
 const fadeObserver = new IntersectionObserver((entries) => {
     entries.forEach(entry => {
         if (entry.isIntersecting) {
             entry.target.classList.add('visible');
         }
     });
 }, {
     threshold: 0.1
 });

 fadeEls.forEach(el => fadeObserver.observe(el));

 document.addEventListener('DOMContentLoaded', function() {
     const hamburger = document.getElementById('hamburger');
     const mobileMenu = document.getElementById('mobile-menu');

     hamburger.addEventListener('click', () => {
         mobileMenu.classList.toggle('hidden');
     });
 });
