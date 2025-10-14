<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siakad | Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="style/styleBeranda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <!-- header -->
    <div class="header">
        <div class="header-left">
            <h2>SIAKAD <span>POLINEMA</span></h2>
        </div>
        <div class="header-right">
            <img src="img/profile.png" alt="">
            <div class="left-side">
                <div class="name">
                    <p>Nabhan Rizqi Julian S.</p>
                </div>
                <div class="role">
                    <p>Student</p>
                </div>
            </div>
            <div class="right-side">
                <div class="arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="Maintance.php">
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="index.php">
                                Logout
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- CONTAINER-->
    <div class="container">
        
        <div class="sidebar">

            <!-- card-student -->
            <div class="card-student">
                <div class="info-utama">
                    <img src="img/profile.png" alt="">
                    <div class="profile">
                        <div class="name">
                            <p>Nabhan Rizqi J.S.</p>
                        </div>
                        <div class="nim">
                            <p>2341720255</p>
                            <i class="fas fa-copy"></i>
                        </div>
                    </div>
                </div>
                <div class="info-tambahan">
                    <div class="jurusan">
                        Jurusan
                        <p>TI</p>
                    </div>
                    <div class="semester">
                        Semester
                        <p>2025/2026 <br>Ganjil</p>
                    </div>
                    <div class="angkatan">
                        Angkatan
                        <p>2024</p>
                    </div>
                </div>  
            </div>
                    
            <!-- SIDEBAR/NAVBAR -->
            <div class="navbar">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="Maintance.php">Message</a></li>
                    <li><a href="Maintance.php">General</a></li>
                    <li><a href="Maintance.php">Akademik</a></li>
                    <li><a href="Maintance.php">UKT</a></li>
                    <li><a href="Maintance.php">Surat & Kuesioner</a></li>
                    <li><a href="Maintance.php">Tingkat Terakhir</a></li>
                </ul>
            </div>
        </div>
    </div>  
</body>
<script src="script/main.js"></script>
</html>