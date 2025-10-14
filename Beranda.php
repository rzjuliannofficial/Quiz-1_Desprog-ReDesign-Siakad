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
        
        <!-- Main -->
        <div class="main">
            <!-- bagian kepala main -->
            <div class="head">
                <div class="head-1">
                    <div class="welcome">
                        <h1>Hi, Nabhan Rizqi Julian Saputro</h1>
                        <p>Selesaikan apa yang kamu mulai!</p>
                    </div>
                </div>
                <div class="head-2">
                    <div class="tanggal">
                        <h1>Rabu</h1>
                        <p>15 Oktober 2025</p>
                    </div>
                    <div class="pekan-kuliah">
                        <p>Pekan Perkuliahan <br>Ke -8</p>
                    </div>
                </div>
            </div>
            <!-- Bagian body main -->
            <div class="body">
                <div class="dasboard-1">
                    <div class="card ipk">
                      <h3>Indeks Prestasi Kumulatif</h3>
                      <div class="value">
                          <p class="nilai">3.9</p>
                          <p class="keterangan">Bagus! Ada <br>Peningkatan</p>
                      </div>
                    </div>
                
                    <!-- SKS -->
                    <div class="card sks">
                      <h3>SKS Semester 3</h3>
                      <div class="value">
                          <p class="nilai">20</p>
                          <p class="keterangan">Kamu butuh <br>5 Semester lagi <br>untuk lulus</p>
                      </div>
                    </div>
                
                    <!-- Presensi -->
                    <div class="card progress">
                      <h3>Week Progress</h3>
                      <p>On this semester</p>
                      <img src="img/progress.png" alt="progress">
                    </div>
    
                    <!-- Tagihan -->
                    <div class="card billing">
                        <h3>Tagihan</h3>
                        <p class="nominal">Rp 5.000.000</p>
                        <p>Status: <span>Lunas</span></p>
                    </div>
                </div>
                <!-- sub-body -->
                <div class="sub-body">
                    <div class="dasboard-2">
                        <div class="card ipsGrafik">
                            <h3>Grafik IPS</h3>
                            <img src="img/ipsGrafik.png" alt="">
                        </div>
                        <div class="card masa-studi">
                            <h3>Masa Studi</h3>
                            <div class="konten">
                                <img src="img/masaStudi.png" alt="">
                                <p class="keterangan">2 Semester telah ditempuh</p>
                                <div class="warna">
                                    <div class="masa-studi">
                                        <p>Masa studi</p>
                                    </div>
                                    <div class="studi-ditempuh">
                                        <p>Studi yang ditempuh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dasboard-3">
                        <div class="card presensi">
                            <h3>Presensi Mahasiswa</h3>
                            <img src="img/presensi.png" alt="">
                        </div>
                        <div class="card pengumuman">
                            <h3>pengumuman</h3>
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
<script src="script/main.js"></script>
</html>