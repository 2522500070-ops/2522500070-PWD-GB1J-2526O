<?php
require_once 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM anggota ORDER BY id DESC");
$no = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 6px;
            text-align: center;
            font-size: 14px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h3>Data Anggota</h3>

<table>
    <tr>
        <th>No</th>
        <th>Nomor Anggota</th>
        <th>Nama Anggota</th>
        <th>Jabatan</th>
        <th>Tanggal Jadi</th>
        <th>Kemampuan</th>
        <th>Gaji</th>
        <th>Nomor WA</th>
        <th>Batalion</th>
        <th>Berat Badan</th>
        <th>Tinggi Badan</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nomor_anggota']; ?></td>
        <td><?= $row['nama_anggota']; ?></td>
        <td><?= $row['jabatan_anggota']; ?></td>
        <td><?= $row['tanggal_jadi_anggota']; ?></td>
        <td><?= $row['kemampuan_anggota']; ?></td>
        <td><?= $row['gaji_anggota']; ?></td>
        <td><?= $row['nomor_wa']; ?></td>
        <td><?= $row['batalion_anggota']; ?></td>
        <td><?= $row['berat_badan']; ?></td>
        <td><?= $row['tinggi_badan']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
