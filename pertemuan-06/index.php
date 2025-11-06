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

        <section id="IPK">
            <?php
                $namaMatkul1 = "Algoritma dan Struktur Data";
                $sksMatkul1 = 4;
                $nilaiHadir1 = 90;
                $nilaiTugas1 = 60;
                $nilaiUTS1 = 80;
                $nilaiUAS1 = 70;
                $nilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);
                
                if ($nilaiHadir1 < 70) {
                    $grade1 = "E";
                } elseif ($nilaiAkhir1 >= 91) {
                    $grade1 = "A";
                } elseif ($nilaiAkhir1 >= 81) {
                    $grade1 = "A-";
                } elseif ($nilaiAkhir1 >= 76) {
                    $grade1 = "B+";
                } elseif ($nilaiAkhir1 >= 71) {
                    $grade1 = "B";
                } elseif ($nilaiAkhir1 >= 66) {
                    $grade1 = "B-";
                } elseif ($nilaiAkhir1 >= 61) {
                    $grade1 = "C+";
                } elseif ($nilaiAkhir1 >= 56) {
                    $grade1 = "C";
                } elseif ($nilaiAkhir1 >= 51) {
                    $grade1 = "C-";
                } elseif ($nilaiAkhir1 >= 36) {
                    $grade1 = "D";
                } elseif ($nilaiAkhir1 >= 0) {
                    $grade1 = "E";
                }

                switch ($grade1) {
                    case "A":  $mutu1 = 4.00; break;
                    case "A-": $mutu1 = 3.70; break;
                    case "B+": $mutu1 = 3.30; break;
                    case "B":  $mutu1 = 3.00; break;
                    case "B-": $mutu1 = 2.70; break;
                    case "C+": $mutu1 = 2.30; break;
                    case "C":  $mutu1 = 2.00; break;
                    case "C-": $mutu1 = 1.70; break;
                    case "D":  $mutu1 = 1.00; break;
                    default:   $mutu1 = 0.00; break;
                }

                $bobot1 = $mutu1 * $sksMatkul1;
                
                if ($grade1 == "D" || $grade1 == "E") {
                    $status1 = "Tidak Lulus";
                } else {
                    $status1 = "Lulus";
                }
       
            ?>

            <h2>Nilai Saya</h2>
            <p><strong>Nama Matakuliah ke-1 </strong><b>:</b><span> <?php echo $namaMatkul1 ?> </span></p>
            <p><strong>SKS </strong><b>:</b><span> <?php echo $sksMatkul1 ?> </span></p>
            <p><strong>Kehadiran </strong><b>:</b><span> <?php echo $nilaiHadir1 ?> </span></p>
            <p><strong>Tugas </strong><b>:</b><span> <?php echo $nilaiTugas1 ?> </span></p>
            <p><strong>UTS </strong><b>:</b><span> <?php echo $nilaiUTS1 ?> </span></p>
            <p><strong>UAS </strong><b>:</b><span> <?php echo $nilaiUAS1 ?> </span></p>
            <p><strong>Nilai Akhir </strong><b>:</b><span> <?php echo $nilaiAkhir1 ?> </span></p>
            <p><strong>Grade </strong><b>:</b><span> <?php echo $grade1 ?> </span></p>
            <p><strong>Angka Mutu </strong><b>:</b><span> <?php echo number_format($mutu1, 2) ?> </span></p>
            <p><strong>Bobot</strong><b>:</b><span> <?php echo $bobot1 ?> </span></p>
            <p><strong>Status</strong><b>:</b><span> <?php echo $status1 ?> </span></p>  

            <h2></h2>
            <p><strong>Nama Matakuliah ke-2 </strong><b>:</b></p>
            <p><strong>SKS </strong><b>:</b></p>
            <p><strong>Kehadiran </strong><b>:</b></p>
            <p><strong>Tugas </strong><b>:</b></p>
            <p><strong>UTS </strong><b>:</b></p>
            <p><strong>UAS </strong><b>:</b></p>
            <p><strong>Nilai Akhir </strong><b>:</b></p>
            <p><strong>Grade </strong><b>:</b></p>
            <p><strong>Angka Mutu </strong><b>:</b></p>
            <p><strong>Bobot</strong><b>:</b></p>
            <p><strong>Status</strong><b>:</b></p> 

            <h2></h2>
            <p><strong>Nama Matakuliah ke-3 </strong><b>:</b></p>
            <p><strong>SKS </strong><b>:</b></p>
            <p><strong>Kehadiran </strong><b>:</b></p>
            <p><strong>Tugas </strong><b>:</b></p>
            <p><strong>UTS </strong><b>:</b></p>
            <p><strong>UAS </strong><b>:</b></p>
            <p><strong>Nilai Akhir </strong><b>:</b></p>
            <p><strong>Grade </strong><b>:</b></p>
            <p><strong>Angka Mutu </strong><b>:</b></p>
            <p><strong>Bobot</strong><b>:</b></p>
            <p><strong>Status</strong><b>:</b></p> 

            <h2></h2>
            <p><strong>Nama Matakuliah ke-4 </strong><b>:</b></p>
            <p><strong>SKS </strong><b>:</b></p>
            <p><strong>Kehadiran </strong><b>:</b></p>
            <p><strong>Tugas </strong><b>:</b></p>
            <p><strong>UTS </strong><b>:</b></p>
            <p><strong>UAS </strong><b>:</b></p>
            <p><strong>Nilai Akhir </strong><b>:</b></p>
            <p><strong>Grade </strong><b>:</b></p>
            <p><strong>Angka Mutu </strong><b>:</b></p>
            <p><strong>Bobot</strong><b>:</b></p>
            <p><strong>Status</strong><b>:</b></p> 

            <h2></h2>
            <p><strong>Nama Matakuliah ke-5 </strong><b>:</b></p>
            <p><strong>SKS </strong><b>:</b></p>
            <p><strong>Kehadiran </strong><b>:</b></p>
            <p><strong>Tugas </strong><b>:</b></p>
            <p><strong>UTS </strong><b>:</b></p>
            <p><strong>UAS </strong><b>:</b></p>
            <p><strong>Nilai Akhir </strong><b>:</b></p>
            <p><strong>Grade </strong><b>:</b></p>
            <p><strong>Angka Mutu </strong><b>:</b></p>
            <p><strong>Bobot</strong><b>:</b></p>
            <p><strong>Status</strong><b>:</b></p> 

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