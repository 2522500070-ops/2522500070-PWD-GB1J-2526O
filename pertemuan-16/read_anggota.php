<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM anggota");
?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Lengkap</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Aksi</th>
    </tr>

<?php
$no = 1;
while ($data = mysqli_fetch_assoc($query)) {
?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['NIM']; ?></td>
        <td><?= $data['Nama_Lengkap']; ?></td>
        <td><?= $data['Tempat_Lahir']; ?></td>
        <td><?= $data['Tanggal_Lahir']; ?></td>
        <td>
            <a href="edit.php?id=<?= $data['cid']; ?>">Edit</a> |
            <a href="hapus.php?id=<?= $data['cid']; ?>" 
               onclick="return confirm('Yakin ingin menghapus data?')">
               Hapus
            </a>
        </td>
    </tr>
<?php } ?>
</table>
