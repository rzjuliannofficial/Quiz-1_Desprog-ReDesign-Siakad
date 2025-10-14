const VALID_NIM = '2341720255';
const VALID_PASSWORD = '123';

// JavaScript untuk mengelola interaksi navbar 
document.addEventListener('DOMContentLoaded', () => {

    const loginForm = document.getElementById('loginForm');
    
    if (loginForm) {
        // Dengarkan event 'submit' pada form
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah pengiriman form standar
            
            // Ambil nilai dari input form
            // ambil elemen input by id
            const nimInput = document.getElementById('nim');
            const passwordInput = document.getElementById('password');

            //ambil isinya
            const nim = nimInput.value;
            const password = passwordInput.value;
            
            // Logika Validasi login
            if (nim === VALID_NIM && password === VALID_PASSWORD) {
                
                window.location.href = 'Beranda.php';
            } else {
                // Jika validasi GAGAL, tampilkan alert error
                const errorMessage = 'NIM atau Password salah. Silahkan coba lagi.';
                alert(errorMessage);
                
                //hapus inputan 
                passwordInput.value = '';
            }
        });
    }

    const arrow = document.querySelector('.arrow');
    const nav = document.querySelector('.right-side nav');
    // Toggle class 'active' untuk menampilkan/menyembunyikan navbar
    if (arrow && nav) { //jadi menggunakan if karena event 'click' umum dipake. agar mengurangi error
        arrow.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
    }
});



