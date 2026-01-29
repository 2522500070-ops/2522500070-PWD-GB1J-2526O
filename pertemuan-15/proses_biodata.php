<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

// pastikan request POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php#biodata");
    exit;
}

// ambil & bersihkan data
$nim        = bersihkan($_POST['txtNim'] ?? '');
$nama       = bersihkan($_POST['txtNmLengkap'] ?? '');
$tempat     = bersihkan($_POST['txtT4Lhr'] ?? '');
$hobi       = bersihkan($_POST['txtHobi'] ?? '');
$pasangan   = bersihkan($_POST['txtPasangan'] ?? '');
$pekerjaan  = bersihkan($_POST['txtKerja'] ?? '');
$ortu       = bersihkan($_POST['txtNmOrtu'] ?? '');
$kakak      = bersihkan($_POST['txtNmKakak'] ?? '');
$adik       = bersihkan($_POST['txtNmAdik'] ?? '');

// validasi wajib
if ($nim === '' || $nama === '') {
    $_SESSION['flash_biodata'] = "❌ NIM dan Nama Lengkap wajib diisi.";
    header("Location: index.php#biodata");
    exit;
}

// format tanggal
$tanggal = null;
if (!empty($_POST['txtTglLhr'])) {
    $tanggal = date('Y-m-d', strtotime($_POST['txtTglLhr']));
}

// SQL (PASTI JALAN jika NIM UNIQUE)
$sql = "
INSERT INTO tryout_pwd
(NIM, Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Hobi, Pasangan, Pekerjaan, Nama_Ortu, Nama_Kakak, Nama_Adik)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
ON DUPLICATE KEY UPDATE
Nama_Lengkap = VALUES(Nama_Lengkap),
Tempat_Lahir = VALUES(Tempat_Lahir),
Tanggal_Lahir = VALUES(Tanggal_Lahir),
Hobi = VALUES(Hobi),
Pasangan = VALUES(Pasangan),
Pekerjaan = VALUES(Pekerjaan),
Nama_Ortu = VALUES(Nama_Ortu),
Nama_Kakak = VALUES(Nama_Kakak),
Nama_Adik = VALUES(Nama_Adik)
";

$stmt = mysqli_prepare($conn, $sql);
if (!$stmt) {
    die("Prepare gagal: " . mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt,
    "ssssssssss",
    $nim,
    $nama,
    $tempat,
    $tanggal,
    $hobi,
    $pasangan,
    $pekerjaan,
    $ortu,
    $kakak,
    $adik
);

// EKSEKUSI + CEK HASIL (INI KUNCI)
if (!mysqli_stmt_execute($stmt)) {
    $_SESSION['flash_biodata'] = "❌ Gagal menyimpan: " . mysqli_stmt_error($stmt);
    header("Location: index.php#biodata");
    exit;
}

mysqli_stmt_close($stmt);

// SUKSES NYATA
$_SESSION['flash_biodata'] = "✅ Biodata berhasil disimpan / diperbarui";
header("Location: index.php#biodata");
exit;