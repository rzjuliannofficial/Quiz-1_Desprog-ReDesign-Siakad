// JavaScript untuk mengelola interaksi navbar 
document.addEventListener('DOMContentLoaded', () => {
    const arrow = document.querySelector('.arrow');
    const nav = document.querySelector('.right-side nav');

    // Toggle class 'active' untuk menampilkan/menyembunyikan navbar
    arrow.addEventListener('click', () => {
        nav.classList.toggle('active');
    });
});