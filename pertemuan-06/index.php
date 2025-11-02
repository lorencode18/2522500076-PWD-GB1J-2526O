<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
            &#9776;
        </button>
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
            <h2>Selamat datang</h2>
            <p>Ini contoh paragraf HTML.</p>
            <?php
            echo "Hallo Dunia!<br>";
            echo "Nama Saya Prita";
            ?>
        </section>
        <section id="about">
            <?php
                $nim = "2522500076";
                $NIM = "3030303030";
                $Nim = "";
                $Nama = "Prita Lauren";
                $nama = "Prita Lauren";
                $tempatlahir = "Pangkalpinang";
                $tanggallahir = "18 Oktober 2007";
                $hobi = "Menonton film horor, baking, dan mendengarkan musik";
                $pasangan = "Belum ada";
                $pekerjaan = "Belum bekerja";
                $namaortu = "Djunmin dan Ai Nyong";
                $namakakak = "Peter Antonius Lie";
                $namaadik = "-";
            ?>
    
            <h2>Tentang Saya</h2>
            <p><strong>NIM :</strong> <?php echo $nim; ?> </p>
            <P><strong>Nama Lengkap :</strong> <?php echo $nama; ?> &#128516;</P>
            <p><strong>Tempat Lahir :</strong> <?php echo $tempatlahir; ?> </p>
            <p><strong>Tanggal Lahir :</strong> <?php echo $tanggallahir; ?> </p>
            <p><strong>Hobi :</strong> <?php echo $hobi; ?> &hearts;</p>
            <p><strong>Pasangan :</strong> <?php echo $pasangan; ?> &#9786;</p>
            <p><strong>Pekerjaan :</strong> <?php echo $pekerjaan; ?> &#128546;</p>
            <p><strong>Nama Orang Tua :</strong> <?php echo $namaortu; ?> </p>
            <p><strong>Nama Kakak :</strong> <?php echo $namakakak; ?> </p>
            <p><strong>Nama Adik :</strong> <?php echo $namaadik; ?> </p>
        </section>
        <section id="contact">
            <h2>Kontak Saya</h2>
            <form action="" method="GET">
                <label for="txtNama"><span>Nama:</span>
                    <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
                </label>
                <label for="txtEmail"><span>Email:</span>
                    <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
                </label>
                <label for="txtPesan"><span>Pesan:</span>
                    <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..."></textarea>
                    <small id="charCount">0/200 karakter</small>
                </label>
        
                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Prita Lauren 2522500076</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>