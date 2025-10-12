// JavaScript untuk mengelola interaksi navbar burger
document.addEventListener('DOMContentLoaded', () => {
    const arrow = document.querySelector('.role button');
    const nav = document.querySelector('.right-side nav');
    console.log(arrow);

    // Toggle class 'active' untuk menampilkan/menyembunyikan navbar
    arrow.addEventListener('click', () => {
        nav.classList.toggle('active');
    });
});