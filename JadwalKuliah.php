<?php
// --- Menggunakan koneksi.php yang baru ---
require './koneksi.php'; // WAJIB GANTI

// Data untuk header tabel (ditambahkan kolom AKSI)
$header_data = [
    "No" => "NO",
    "Hari" => "HARI",
    "Jam" => "JAM",
    "KodeMK" => "KODE MK",
    "MataKuliah" => "MATA KULIAH",
    "Dosen" => "DOSEN",
    "Aksi" => "AKSI" // Tambahkan kolom Aksi
];

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

try {
    $result = q($sql); // Menggunakan fungsi q()
    $user_name = "Nabhan Rizqi Julian S.";
    $user_role = "Student";
} catch (Throwable $e) {
    die('Error saat mengambil data jadwal: ' . htmlspecialchars($e->getMessage()));
}
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
            <div class="Tabel-Jadwal">
                <h1>Jadwal Perkuliahan</h1>
                <h3>Tahun Akademik : 2025/2026 Ganjil</h3>
                <h3>Kelas : 2F</h3>
                
                <p style="margin-bottom: 1rem;"><a class="btn" href="jadwal_create.php" style="
                    padding: 8px 12px;
                    border-radius: 6px;
                    background: #007bff;
                    color: white;
                    text-decoration: none;
                    display: inline-block;">+ Tambah Jadwal</a></p>

                <table>
                    <thead>
                        <tr>
                            <?php foreach ($header_data as $key => $label): ?>
                                <th><?php echo htmlspecialchars($label); ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1; 
                        while ($row = pg_fetch_assoc($result)): 
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($i++); ?></td>
                            <td><?php echo htmlspecialchars($row["Hari"]); ?></td>
                            <td><?php echo htmlspecialchars($row["Jam"]); ?></td>
                            <td><?php echo htmlspecialchars($row["KodeMK"]); ?></td>
                            <td><?php echo htmlspecialchars($row["MataKuliah"]); ?></td>
                            <td><?php echo htmlspecialchars($row["Dosen"]); ?></td>
                            
                            <td class="row-actions" style="display: flex; gap: 0.5rem; justify-content: center; align-items: center;">
                                <a class="btn" href="jadwal_edit.php?id=<?= urlencode($row["No"]) ?>" style="background: #ffc107; color: black; padding: 4px 8px; border: none; border-radius: 4px; text-decoration: none;">Ubah</a>
                                
                                <a href="#" class="btn" onclick="if(confirm('Hapus data ini?')) { 
                                    document.getElementById('deleteForm<?= $row['No'] ?>').submit(); 
                                }" style="background: #dc3545; color: white; padding: 4px 8px; border: none; border-radius: 4px; text-decoration: none;">Hapus</a>

                                <form id="deleteForm<?= $row['No'] ?>" action="jadwal_delete.php" method="post" style="display:none;">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($row['No']) ?>">
                                </form>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    

</body>
<script src="script/main.js"></script>
</html>