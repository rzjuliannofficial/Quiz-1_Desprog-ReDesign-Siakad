<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siakad | Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/styleLogin.css">
    <script src="jquery-ui-1.14.1/external/jquery/jquery.js"></script>
</head>
<body>
    <div class="container-main">
        <div class="container-left">
            <h1>SIAKAD <span>POLINEMA</span></h1>
            <p>Selamat datang di Sistem Informasi <span>Akademik</span> <br>
                Mahasiswa Politeknik Negeri Malang. <br><br>
                Silahkan masukkan NIM dan Password Anda <br> 
                untuk melanjutkan akses ke layanan akademik
            </p>
        </div>
        <div class="container-right">
            <div class="head">
                <div class="head-left">
                    <h1>SIGN IN</h1>
                    <p>Akun SIAKAD Anda</p>
                </div>
                <div class="head-right">
                    <img src="img/logo.png" alt="Logo">
                </div>
            </div>

            <form id="loginForm" method="post">
                <div class="login">
                    <input type="text" name="nim" id="nim" placeholder="Nim" required><br><br>
                    <input type="password" name="password" id="password" placeholder="Password" required><br><br>
                    
                    <div class="submit" >
                        <button type="submit">
                            Login
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        <a href="Maintance.php">
                            <p>Lupa Password?</p>
                        </a>
                    </div>
                </div>
            </form>
            <div class="Copyright">
                <p>© 2025 Sistem Informasi Akademik. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</body>
<script src="script/main.js"></script>
</html>
