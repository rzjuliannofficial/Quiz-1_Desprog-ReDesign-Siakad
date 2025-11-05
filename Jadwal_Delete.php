<?php
require __DIR__ . '/koneksi.php';

// Validasi Metode Request (HARUS POST untuk keamanan)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

// Validasi ID Jadwal (kolom "No")
$id = (int)($_POST['id'] ?? 0);
if ($id <= 0) {
    http_response_code(400);
    exit('ID jadwal tidak valid.');
}

try {
    // Gunakan qparams untuk DELETE yang aman
    qparams('DELETE FROM "TB_Jadwal" WHERE "No"=$1', [$id]);
    
    // Redirect ke halaman jadwal setelah sukses
    header('Location: JadwalKuliah.php');
    exit;
} catch (Throwable $e) {
    http_response_code(500);
    echo 'Gagal menghapus jadwal: ' . htmlspecialchars($e->getMessage());
}
?>