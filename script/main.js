const VALID_NIM = '2341720255';
const VALID_PASSWORD = '123';

document.addEventListener('DOMContentLoaded', () => {

    const loginForm = document.getElementById('loginForm');
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(e){
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

    if (arrow && nav) { //jadi menggunakan if karena event 'click' swering dipake. agar mengurangi error juga
        arrow.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
    }
});

//file beranda
$(document).ready(function(){
    $(".akademik").click(function(){
        $(".sub-akademik").slideToggle("slow"); // SlideToggle
    });

    $(".ukt").click(function(){
        $(".sub-ukt").slideToggle("slow"); // SlideToggle
    });
});




