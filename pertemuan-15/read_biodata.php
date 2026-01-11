<?php
require 'koneksi.php';

$sql = "SELECT * FROM biodata_mahasiswa ORDER BY nim ASC";
$q = mysqli_query($conn, $sql);
?>

<h2>Biodata Mahasiswa</h2>

<table border="1" cellpadding="8">
  <tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
  </tr>

  <?php $no = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= htmlspecialchars($row['nim']) ?></td>
      <td><?= htmlspecialchars($row['nama']) ?></td>
      <td><?= htmlspecialchars($row['jenis_kelamin']) ?></td>
      <td><?= htmlspecialchars($row['alamat']) ?></td>
    </tr>
  <?php endwhile; ?>
</table>
