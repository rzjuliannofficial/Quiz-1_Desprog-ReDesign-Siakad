<?php

// --- KONFIGURASI KONEKSI POSTGRESQL ---
$host   = 'localhost';
$port   = '5432';
$dbname = 'PhpDatabase';
$user   = 'postgres';
$pass   = '123';

// Membuat koneksi
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

if (!$conn) {
    die('Koneksi gagal: ' . pg_last_error());
}

pg_set_client_encoding($conn, 'UTF8');

// --- QUERY JADWAL PERKULIAHAN ---
$sql = "SELECT 
    \"No\"          AS \"No\",
    \"Hari\"        AS \"Hari\",
    \"Jam\"         AS \"Jam\",
    \"Kode_MK\"     AS \"KodeMK\",
    \"Mata_Kuliah\" AS \"MataKuliah\",
    \"Dosen\"       AS \"Dosen\"
FROM \"TB_Jadwal\"
ORDER BY CASE \"Hari\"
    WHEN 'Senin' THEN 1
    WHEN 'Selasa' THEN 2
    WHEN 'Rabu' THEN 3
    WHEN 'Kamis' THEN 4
    WHEN 'Jumat' THEN 5
    ELSE 6
END, \"Jam\""; 

$result = pg_query($conn, $sql);

if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}

// Data untuk header tabel
$header_data = [
    "No" => "NO",
    "Hari" => "HARI",
    "Jam" => "JAM",
    "KodeMK" => "KODE MK",
    "MataKuliah" => "MATA KULIAH",
    "Dosen" => "DOSEN"
];

// Asumsi data nama dan role dari sesi atau autentikasi untuk header
$user_name = "Nabhan Rizqi Julian S.";
$user_role = "Student";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siakad | Jadwal Perkuliahan</title>
    <link rel="stylesheet" href="style/styleBeranda.css">
    <link rel="stylesheet" href="style/styleJadwalKuliah.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="jquery-ui-1.14.1/external/jquery/jquery.js"></script>
    
</head>
<body>
    <div class="header">
        <div class="header-left">
            <h2>SIAKAD <span>POLINEMA</span></h2>
        </div>
        <div class="header-right">
            <img src="img/profile.png" alt="">
            <div class="left-side">
                <div class="name">
                    <p><?php echo htmlspecialchars($user_name); ?></p>
                </div>
                <div class="role">
                    <p><?php echo htmlspecialchars($user_role); ?></p>
                </div>
            </div>
            <div class="right-side">
                <div class="arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
                <nav>
                    <ul>
                        <li><a href="404.php">Settings</a></li>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        
        <div class="sidebar">   
            <div class="navbar">
                <ul>
                    <li><a href="Beranda.php">Beranda</a></li>
                    <li><a href="404.php">Message</a></li>
                    <li><a href="404.php">General</a></li>
                    <li class="akademik">
                        <a href="#">Akademik <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-akademik">
                            <li><a href="#">Jadwal Kuliah</a></li>
                            <li><a href="404.php">Kartu Hasil Studi</a></li>
                            <li><a href="404.php">Transkrip Nilai</a></li>
                        </ul>
                    </li>
                    <li class="ukt">
                        <a href="#">UKT <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-ukt">
                            <li><a href="404.php">Status Pembayaran</a></li>
                            <li><a href="404.php">Riwayat Tagihan</a></li>
                        </ul>
                    </li>
                    <li><a href="404.php">Surat & Kuesioner</a></li>
                    <li><a href="404.php">Tingkat Terakhir</a></li>
                </ul>
            </div>
        </div>
        
        <div class="main">
            <div class="schedule-table-container">
                <h1>Jadwal Perkuliahan</h1>
                <h3>Tahun Akademik : 2025/2026 Ganjil</h3>
                <h3>Kelas : 2F</h3>
                
                <table>
                    <thead>
                        <tr>
                            <?php foreach ($header_data as $key => $label): ?>
                                <th><?php echo htmlspecialchars($label); ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php while ($row = pg_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($i++); ?></td>
                            <td><?php echo htmlspecialchars($row["Hari"]); ?></td>
                            <td><?php echo htmlspecialchars($row["Jam"]); ?></td>
                            <td><?php echo htmlspecialchars($row["KodeMK"]); ?></td>
                            <td><?php echo htmlspecialchars($row["MataKuliah"]); ?></td>
                            <td><?php echo htmlspecialchars($row["Dosen"]); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  

    <?php
    // Bebaskan hasil query dari memori
    pg_free_result($result);
    // Tutup koneksi ke database
    pg_close($conn);
    ?>

</body>
<script src="script/main.js"></script>
</html>