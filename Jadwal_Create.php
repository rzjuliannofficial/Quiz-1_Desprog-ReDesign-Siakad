<?php
require __DIR__ . '/koneksi.php';

$err = $ok = '';
$hari = $jam = $kode_mk = $mata_kuliah = $dosen = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hari        = trim($_POST['hari'] ?? '');
    $jam         = trim($_POST['jam'] ?? '');
    $kode_mk     = trim($_POST['kode_mk'] ?? '');
    $mata_kuliah = trim($_POST['mata_kuliah'] ?? '');
    $dosen       = trim($_POST['dosen'] ?? '');

    // Validasi sederhana: semua harus diisi
    if ($hari === '' || $jam === '' || $kode_mk === '' || $mata_kuliah === '' || $dosen === '') {
        $err = 'Semua field wajib diisi.';
    } else {
        try {
            // Gunakan qparams untuk INSERT ke tabel "TB_Jadwal"
            // Asumsi kolom "No" adalah SERIAL/auto-increment.
            qparams(
                'INSERT INTO "TB_Jadwal" ("Hari", "Jam", "Kode_MK", "Mata_Kuliah", "Dosen") VALUES ($1, $2, $3, $4, $5)',
                [$hari, $jam, $kode_mk, $mata_kuliah, $dosen]
            );
            
            // Redirect ke halaman jadwal
            header('Location: JadwalKuliah.php');
            exit;
        } catch (Throwable $e) {
            $err = $e->getMessage();
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Tambah Jadwal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <style>
    body{font-family:system-ui,Segoe UI,Roboto,Arial,sans-serif;max-width:720px;margin:24px auto;padding:0 12px}
    label{display:block;margin-top:10px}
    input,select{width:100%;padding:8px;margin-top:4px}
    .btn{padding:8px 12px;border:1px solid #999;border-radius:6px;background:#f6f6f6;text-decoration:none}
    .alert{padding:10px;border-radius:6px;margin:10px 0}
    .alert.error{background:#ffe9e9;border:1px solid #e99}
  </style>
</head>
<body>
  <h1>Tambah Jadwal Mata Kuliah</h1>

  <?php if ($err): ?>
    <div class="alert error"><?= htmlspecialchars($err) ?></div>
  <?php endif; ?>

  <form method="post">
    <label>Hari
      <input name="hari" value="<?= htmlspecialchars($hari) ?>" required placeholder="Senin/Selasa/Rabu...">
    </label>
    <label>Jam
      <input name="jam" value="<?= htmlspecialchars($jam) ?>" required placeholder="08:00 - 10:00">
    </label>
    <label>Kode MK
      <input name="kode_mk" value="<?= htmlspecialchars($kode_mk) ?>" required>
    </label>
    <label>Mata Kuliah
      <input name="mata_kuliah" value="<?= htmlspecialchars($mata_kuliah) ?>" required>
    </label>
    <label>Dosen
      <input name="dosen" value="<?= htmlspecialchars($dosen) ?>" required>
    </label>

    <p style="margin-top:16px">
      <button class="btn" type="submit" style="background: #007bff; color: white; border: none;">Simpan</button>
      <a class="btn" href="JadwalKuliah.php">Kembali</a>
    </p>
  </form>
</body>
</html>