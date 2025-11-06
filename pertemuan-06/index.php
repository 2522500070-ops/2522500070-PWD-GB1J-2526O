<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="background-gif"></div>

    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">&#9776;</button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#ipk">Nilai</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Ini contoh paragraf HTML.</p>
            <?php
            echo "Halo Dunia!<br>";
            echo "Nama Saya Andin";
            ?>
        </section>

        <section id="about">
            <?php
                $nim = "2522500070";
                $nama_lengkap = "Andin Alamanda Ningtyas &#9729;";
                $tempat_lahir = "Pangkalpinang";
                $tanggal_lahir = "22 Mei 2007";
                $hobby = "Nonton film, berinteraksi, dan mempelajari hal baru &#10052;";
                $pasangan = "Tidak ada";
                $pekerjaan = "Belum ada";
                $nama_orang_tua = "Bapak Heru Triwibowo dan Ibu Nurbaiti";
                $nama_kakak = "Isnaini, Muhamad Kholid Arroyan, Al Anshori, dan Nunung Rifka Nurfalah";
                $nama_adek = "Saya lah adeknya &#128516;";

            ?>
            <h2>Tentang Saya</h2>
            <p><strong>NIM:</strong> <?php echo $nim ?></p>
            <p><strong>Nama Lengkap:</strong> <?php echo $nama_lengkap ?></p>
            <p><strong>Tempat Lahir:</strong> <?php echo $tempat_lahir ?></p>
            <p><strong>Tanggal Lahir:</strong> <?php echo $tanggal_lahir ?></p>
            <p><strong>Hobby:</strong> <?php echo $hobby ?></p>
            <p><strong>Pasangan:</strong> <?php echo $pasangan ?></p>
            <p><strong>Pekerjaan:</strong> <?php echo $pekerjaan ?></p>
            <p><strong>Nama Orang Tua:</strong> <?php echo $nama_orang_tua ?></p>
            <p><strong>Nama Kakak:</strong> <?php echo $nama_kakak ?></p>
            <p><strong>Nama Adek:</strong> <?php echo $nama_adek ?></p>
        </section>

<section id="ipk">
    <?php
    echo "<h2>Nilai Saya</h2>";

    $namaMatkul1 = "Logika Informatika";
    $namaMatkul2 = "Pengantar Basis Data";
    $namaMatkul3 = "Aplikasi Perkantoran";
    $namaMatkul4 = "Pengantar Teknologi Informasi";
    $namaMatkul5 = "Pemrograman Web Dasar";

    $sksMatkul1 = 4;
    $sksMatkul2 = 2;
    $sksMatkul3 = 4;
    $sksMatkul4 = 7;
    $sksMatkul5 = 3;

    $nilaiHadir1 = 90;  $nilaiHadir2 = 70;  $nilaiHadir3 = 80;  $nilaiHadir4 = 85;  $nilaiHadir5 = 69;
    $nilaiTugas1 = 60;  $nilaiTugas2 = 50;  $nilaiTugas3 = 70;  $nilaiTugas4 = 75;  $nilaiTugas5 = 80;
    $nilaiUTS1   = 80;  $nilaiUTS2   = 60;  $nilaiUTS3   = 75;  $nilaiUTS4   = 80;  $nilaiUTS5   = 90;
    $nilaiUAS1   = 70;  $nilaiUAS2   = 80;  $nilaiUAS3   = 80;  $nilaiUAS4   = 85;  $nilaiUAS5   = 100;

    function hitungNilaiAkhir($hadir, $tugas, $uts, $uas) {
        return (0.1 * $hadir) + (0.2 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
    }

    function tentukanGrade($hadir, $nilaiAkhir) {
        if ($hadir < 70) return "E";
        elseif ($nilaiAkhir >= 85) return "A";
        elseif ($nilaiAkhir >= 80) return "A-";
        elseif ($nilaiAkhir >= 75) return "B+";
        elseif ($nilaiAkhir >= 70) return "B";
        elseif ($nilaiAkhir >= 65) return "B-";
        elseif ($nilaiAkhir >= 60) return "C+";
        elseif ($nilaiAkhir >= 55) return "C";
        elseif ($nilaiAkhir >= 50) return "C-";
        elseif ($nilaiAkhir >= 45) return "D";
        else return "E";
    }

    function tentukanMutu($grade) {
        switch ($grade) {
            case "A": return 4.00;
            case "A-": return 3.70;
            case "B+": return 3.30;
            case "B": return 3.00;
            case "B-": return 2.70;
            case "C+": return 2.30;
            case "C": return 2.00;
            case "C-": return 1.70;
            case "D": return 1.00;
            default: return 0.00;
        }
    }

    function tentukanStatus($grade) {
        return in_array($grade, ["A","A-","B+","B","B-","C+","C","C-"]) ? "Lulus" : "Gagal";
    }

    for ($i = 1; $i <= 5; $i++) {
        ${"nilaiAkhir$i"} = hitungNilaiAkhir(${"nilaiHadir$i"}, ${"nilaiTugas$i"}, ${"nilaiUTS$i"}, ${"nilaiUAS$i"});
        ${"grade$i"} = tentukanGrade(${"nilaiHadir$i"}, ${"nilaiAkhir$i"});
        ${"mutu$i"} = tentukanMutu(${"grade$i"});
        ${"bobot$i"} = ${"mutu$i"} * ${"sksMatkul$i"};
        ${"status$i"} = tentukanStatus(${"grade$i"});
    }

    $totalBobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
    $totalSKS = $sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;
    $IPK = $totalBobot / $totalSKS;
    ?>

    <style>
        #ipk {
            font-family: Arial, sans-serif;
            color: #000;
            background-color: #b2d8b2;
            padding: 20px 40px;
        }
        #ipk h2 {
            font-size: 24px;
            font-weight: bold;
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
            margin-bottom: 20px;
        }

 #ipk pre {
    font-size: 16px;
    line-height: 1.5;
    margin: 0;
}
#ipk hr {
    border: none;
    border-top: 2px solid #aaa;
    margin: 15px 0;
}
</style>

<?php
for ($i = 1; $i <= 5; $i++) {
    echo "<pre>";
    echo "Nama Matakuliah ke-$i : ${'namaMatkul'.$i}\n";
    echo "SKS                 : ${'sksMatkul'.$i}\n";
    echo "Kehadiran           : ${'nilaiHadir'.$i}\n";
    echo "Tugas               : ${'nilaiTugas'.$i}\n";
    echo "UTS                 : ${'nilaiUTS'.$i}\n";
    echo "UAS                 : ${'nilaiUAS'.$i}\n";
    echo "Nilai Akhir         : ".number_format(${"nilaiAkhir$i"}, 2)."\n";
    echo "Grade               : ${'grade'.$i}\n";
    echo "Angka Mutu          : ".number_format(${"mutu$i"}, 2)."\n";
    echo "Bobot               : ".number_format(${"bobot$i"}, 2)."\n";
    echo "Status              : ${'status'.$i}\n";
    echo "</pre><hr>";
}

echo "<pre>";
echo "Total Bobot         : ".number_format($totalBobot, 2)."\n";
echo "Total SKS            : $totalSKS\n";
echo "IPK                  : ".number_format($IPK, 2)."\n";
echo "</pre>";
?>
</section>

        </section>
        <section id="contact">
            <h2>Kontak Saya</h2>
            <form action="" method="get">
                <label for="txtNama"><span>Nama:</span>
                    <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required
                        autocomplete="name">
                </label>
                <label for="txtEmail"><span>Email:</span>
                    <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required
                        autocomplete="email">
                </label>
                <label for="txtPesan"><span>Pesan Anda:</span>
                    <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..."
                        required></textarea>
                    <small id="charCount">0/200 karakter</small>
                </label>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Andin Alamanda Ningtyas 2522500070</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>