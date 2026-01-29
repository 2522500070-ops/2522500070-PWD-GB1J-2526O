<?php
include 'koneksi.php';

$nim            = $_POST['nim'];
$nama           = $_POST['nama_lengkap'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$hobi           = $_POST['hobi'];
$pasangan       = $_POST['pasangan'];
$pekerjaan      = $_POST['pekerjaan'];
$nama_ortu      = $_POST['nama_ortu'];
$nama_kakak     = $_POST['nama_kakak'];
$nama_adik      = $_POST['nama_adik'];

$query = "INSERT INTO anggota 
(NIM, Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Hobi, Pasangan, Pekerjaan, Nama_Ortu, Nama_Kakak, Nama_Adik, create_at)
VALUES
('$nim','$nama','$tempat_lahir','$tanggal_lahir','$hobi','$pasangan','$pekerjaan','$nama_ortu','$nama_kakak','$nama_adik', NOW())";

$simpan = mysqli_query($koneksi, $query);

if ($simpan) {
    echo "Data berhasil disimpan";
} else {
    echo "Data gagal disimpan";
}
?>
