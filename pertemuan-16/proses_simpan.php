<?php
include 'koneksi.php';

$nomor_anggota   = $_POST['nomor_anggota'];
$nama_anggota    = $_POST['nama_anggota'];
$jabatan_anggota = $_POST['jabatan_anggota'];
$tanggal_jadi    = $_POST['tanggal_jadi'];
$kemampuan       = $_POST['kemampuan'];
$gaji            = $_POST['gaji'];
$no_wa           = $_POST['no_wa'];
$batalion        = $_POST['batalion'];
$berat_badan     = $_POST['berat_badan'];
$tinggi_badan    = $_POST['tinggi_badan'];

$query = mysqli_query($koneksi, " INSERT INTO anggota (
        nomor_anggota,
        nama_anggota,
        jabatan_anggota,
        tanggal_jadi,
        kemampuan,
        gaji,
        no_wa,
        batalion,
        berat_badan,
        tinggi_badan
    ) VALUES (
        '$nomor_anggota',
        '$nama_anggota',
        '$jabatan_anggota',
        '$tanggal_jadi',
        '$kemampuan',
        '$gaji',
        '$no_wa',
        '$batalion',
        '$berat_badan',
        '$tinggi_badan'
    )
");

if ($query) {
    echo "
    <script>
        alert('Data anggota berhasil disimpan');
        window.location='index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal disimpan');
        window.history.back();
    </script>
    ";
}
?>
