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
                $namalengkap = "Andin Alamanda Ningtyas";
                $tempatlahir = "Pangkalpinang";
                $tanggallahir = "22 Mei 2007";
                $hobby = "Nonton film, berinteraksi, dan mempelajari hal baru";
                $pasangaan = "Tidak ada";
                $pekerjaan = "Belum ada";
                $namaorangtua = "Bapak Heru Triwibowo dan Ibu Nurbaiti";
                $namakakak = "Isnaini, Muhamad Kholid Arroyan, Al Anshori, dan Nunung Rifka Nurfalah";
                $namaadek = "Saya lah adeknya";

            ?>
            <h2>Tentang Saya</h2>
            <p><strong>NIM:</strong> <?php echo $nim ?></p>
            <p><strong>Nama Lengkap:</strong> <?php echo $namalengkap ?> &#9729;</p>
            <p><strong>Tempat Lahir:</strong> <?php echo $tempatlahir ?></p>
            <p><strong>Tanggal Lahir:</strong> <?php echo $tanggallahir ?></p>
            <p><strong>Hobby:</strong> <?php echo $hobby ?> &#10052;</p>
            <p><strong>Pasangan:</strong> <?php echo $pasangaan ?></p>
            <p><strong>Pekerjaan:</strong> <?php echo $pekerjaan ?></p>
            <p><strong>Nama Orang Tua:</strong> <?php echo $namaorangtua ?></p>
            <p><strong>Nama Kakak:</strong> <?php echo $namakakak ?></p>
            <p><strong>Nama Adek:</strong> <?php echo $namaadek ?> &#128516;</p>

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