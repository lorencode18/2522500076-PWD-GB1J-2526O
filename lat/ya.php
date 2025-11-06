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
                } elseif ($nilaiAkhir1 >= 91 && $nilaiAkhir1 <=100 ) {
                    $grade1 = "A";
                } elseif ($nilaiAkhir1 >= 81 && $nilaiAkhir1 <=90 ) {
                    $grade1 = "A-";
                } elseif ($nilaiAkhir1 >= 76 && $nilaiAkhir1 <=80 ) {
                    $grade1 = "B+";
                } elseif ($nilaiAkhir1 >= 71 && $nilaiAkhir1 <=75 ) {
                    $grade1 = "B";
                } elseif ($nilaiAkhir1 >= 66 && $nilaiAkhir1 <=70 ) {
                    $grade1 = "B-";
                } elseif ($nilaiAkhir1 >= 61 && $nilaiAkhir1 <=65 ) {
                    $grade1 = "C+";
                } elseif ($nilaiAkhir1 >= 56 && $nilaiAkhir1 <=60 ) {
                    $grade1 = "C";
                } elseif ($nilaiAkhir1 >= 51 && $nilaiAkhir1 <=55 ) {
                    $grade1 = "C-";
                } elseif ($nilaiAkhir1 >= 36 && $nilaiAkhir1 <=50 ) {
                    $grade1 = "D";
                } else {
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
            <p><strong>Nama Matakuliah ke-1</strong><span>:</span><?php echo $namaMatkul1 ?></p>
            <p><strong>SKS</strong><span>:</span> <?php echo $sksMatkul1 ?></p>
            <p><strong>Kehadiran</strong><span>:</span> <?php echo $nilaiHadir1 ?></p>
            <p><strong>Tugas</strong><span>:</span> <?php echo $nilaiTugas1 ?></p>
            <p><strong>UTS</strong><span>:</span> <?php echo $nilaiUTS1 ?></p>
            <p><strong>UAS </strong><span>:</span> <?php echo $nilaiUAS1 ?></p>
            <p><strong>Nilai Akhir</strong><span>:</span> <?php echo $nilaiAkhir1 ?></p>
            <p><strong>Grade</strong><span>:</span> <?php echo $grade1 ?></p>
            <p><strong>Angka Mutu</strong><span>:</span> <?php echo $mutu1 ?></p>
            <p><strong>Bobot</strong><span>:</span> <?php echo $bobot1 ?></p>
            <p><strong>Status</strong><span>:</span><?php echo $status1 ?></p>

            <?php
                $namaMatkul2 = "Agama";
                $sksMatkul2 = 2;
                $nilaiHadir2 = 70;
                $nilaiTugas2 = 50;
                $nilaiUTS2 = 60;
                $nilaiUAS2 = 80;
                $nilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
                
               
                if ($nilaiHadir2 < 70) {
                    $grade2 = "E";
                } elseif ($nilaiAkhir2 >= 91 && $nilaiAkhir2 <=100 ) {
                    $grade2 = "A";
                } elseif ($nilaiAkhir2 >= 81 && $nilaiAkhir2 <=90 ) {
                    $grade2 = "A-";
                } elseif ($nilaiAkhir2 >= 76 && $nilaiAkhir2 <=80 ) {
                    $grade2 = "B+";
                } elseif ($nilaiAkhir2 >= 71 && $nilaiAkhir2 <=75 ) {
                    $grade2 = "B";
                } elseif ($nilaiAkhir2 >= 66 && $nilaiAkhir2 <=70 ) {
                    $grade2 = "B-";
                } elseif ($nilaiAkhir2 >= 61 && $nilaiAkhir2 <=65 ) {
                    $grade2 = "C+";
                } elseif ($nilaiAkhir2 >= 56 && $nilaiAkhir2 <=60 ) {
                    $grade2 = "C";
                } elseif ($nilaiAkhir2 >= 51 && $nilaiAkhir2 <=55 ) {
                    $grade2 = "C-";
                } elseif ($nilaiAkhir2 >= 36 && $nilaiAkhir2 <=50 ) {
                    $grade2 = "D";
                } elseif ($nilaiAkhir2 >= 0 && $nilaiAkhir2 <=35 ) {
                    $grade2 = "E";
                }

                switch ($grade2) {
                    case "A":  $mutu2 = 4.00; break;
                    case "A-": $mutu2 = 3.70; break;
                    case "B+": $mutu2 = 3.30; break;
                    case "B":  $mutu2 = 3.00; break;
                    case "B-": $mutu2 = 2.70; break;
                    case "C+": $mutu2 = 2.30; break;
                    case "C":  $mutu2 = 2.00; break;
                    case "C-": $mutu2 = 1.70; break;
                    case "D":  $mutu2 = 1.00; break;
                    default:   $mutu2 = 0.00; break;
                }

                $bobot2 = $mutu2 * $sksMatkul2;
                
                if ($grade2 == "D" || $grade2 == "E") {
                    $status2 = "Tidak Lulus";
                } else {
                    $status2 = "Lulus";
                }
            ?>

            <h2></h2>
            <p><strong>Nama Matakuliah ke-2</strong><span>:</span> <?php echo $namaMatkul2 ?></p>
            <p><strong>SKS</strong><span>:</span> <?php echo $sksMatkul2 ?></p>
            <p><strong>Kehadiran</strong><span>:</span> <?php echo $nilaiHadir2 ?></p>
            <p><strong>Tugas</strong><span>:</span> <?php echo $nilaiTugas2 ?></p>
            <p><strong>UTS</strong><span>:</span> <?php echo $nilaiUTS2 ?></p>
            <p><strong>UAS </strong><span>:</span> <?php echo $nilaiUAS2?></p>
            <p><strong>Nilai Akhir</strong><span>:</span> <?php echo $nilaiAkhir2 ?></p>
            <p><strong>Grade</strong><span>:</span> <?php echo $grade2 ?></p>
            <p><strong>Angka Mutu</strong><span>:</span> <?php echo $mutu2 ?></p>
            <p><strong>Bobot</strong><span>:</span> <?php echo $bobot2 ?></p>
            <p><strong>Status</strong><span>:</span> <?php echo $status2 ?></p>

            <?php
                $namaMatkul3 = "Aplikasi Perkantoran";
                $sksMatkul3 = 3;
                $nilaiHadir3 = 70;
                $nilaiTugas3 = 30;
                $nilaiUTS3 = 40;
                $nilaiUAS3 = 60;
                $nilaiAkhir3 = (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);
                
               
                if ($nilaiHadir3 < 70) {
                    $grade3 = "E";
                } elseif ($nilaiAkhir3 >= 91 && $nilaiAkhir3 <=100 ) {
                    $grade3 = "A";
                } elseif ($nilaiAkhir3>= 81 && $nilaiAkhir3 <=90 ) {
                    $grade3 = "A-";
                } elseif ($nilaiAkhir3 >= 76 && $nilaiAkhir3 <=80 ) {
                    $grade3 = "B+";
                } elseif ($nilaiAkhir3 >= 71 && $nilaiAkhir3 <=75 ) {
                    $grade3 = "B";
                } elseif ($nilaiAkhir3 >= 66 && $nilaiAkhir3 <=70 ) {
                    $grade3 = "B-";
                } elseif ($nilaiAkhir3 >= 61 && $nilaiAkhir3 <=65 ) {
                    $grade3 = "C+";
                } elseif ($nilaiAkhir3 >= 56 && $nilaiAkhir3 <=60 ) {
                    $grade3 = "C";
                } elseif ($nilaiAkhir3 >= 51 && $nilaiAkhir3 <=55 ) {
                    $grade3 = "C-";
                } elseif ($nilaiAkhir3 >= 36 && $nilaiAkhir3 <=50 ) {
                    $grade3 = "D";
                } elseif ($nilaiAkhir3 >= 0 && $nilaiAkhir3 <=35 ) {
                    $grade3 = "E";
                }

                switch ($grade2) {
                    case "A":  $mutu3 = 4.00; break;
                    case "A-": $mutu3 = 3.70; break;
                    case "B+": $mutu3 = 3.30; break;
                    case "B":  $mutu3 = 3.00; break;
                    case "B-": $mutu3 = 2.70; break;
                    case "C+": $mutu3 = 2.30; break;
                    case "C":  $mutu3 = 2.00; break;
                    case "C-": $mutu3 = 1.70; break;
                    case "D":  $mutu3 = 1.00; break;
                    default:   $mutu3 = 0.00; break;
                }

                $bobot3 = $mutu3 * $sksMatkul3;
                
                if ($grade3 == "D" || $grade3 == "E") {
                    $status3 = "Tidak Lulus";
                } else {
                    $status3 = "Lulus";
                }
            ?>

            <h2></h2>
            <p><strong>Nama Matakuliah ke-2</strong><span>:</span> <?php echo $namaMatkul3 ?></p>
            <p><strong>SKS</strong><span>:</span> <?php echo $sksMatkul3 ?></p>
            <p><strong>Kehadiran</strong><span>:</span> <?php echo $nilaiHadir3 ?></p>
            <p><strong>Tugas</strong><span>:</span> <?php echo $nilaiTugas3 ?></p>
            <p><strong>UTS</strong><span>:</span> <?php echo $nilaiUTS3 ?></p>
            <p><strong>UAS </strong><span>:</span> <?php echo $nilaiUAS3 ?></p>
            <p><strong>Nilai Akhir</strong><span>:</span> <?php echo $nilaiAkhir3 ?></p>
            <p><strong>Grade</strong><span>:</span> <?php echo $grade3 ?></p>
            <p><strong>Angka Mutu</strong><span>:</span> <?php echo $mutu3 ?></p>
            <p><strong>Bobot</strong><span>:</span> <?php echo $bobot3 ?></p>
            <p><strong>Status</strong><span>:</span> <?php echo $status3 ?></p>

            <?php
                $namaMatkul4 = "Logika Informatika";
                $sksMatkul4 = 3;
                $nilaiHadir4 = 100;
                $nilaiTugas4 = 90;
                $nilaiUTS4 = 95;
                $nilaiUAS4 = 90;
                $nilaiAkhir4 = (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);
                
               
                if ($nilaiHadir4 < 70) {
                    $grade4 = "E";
                } elseif ($nilaiAkhir4 >= 91 && $nilaiAkhir4 <=100 ) {
                    $grade4 = "A";
                } elseif ($nilaiAkhir4 >= 81 && $nilaiAkhir4 <=90 ) {
                    $grade4 = "A-";
                } elseif ($nilaiAkhir4 >= 76 && $nilaiAkhir4 <=80 ) {
                    $grade4 = "B+";
                } elseif ($nilaiAkhir4 >= 71 && $nilaiAkhir4 <=75 ) {
                    $grade4 = "B";
                } elseif ($nilaiAkhir4 >= 66 && $nilaiAkhir4 <=70 ) {
                    $grade4 = "B-";
                } elseif ($nilaiAkhir4 >= 61 && $nilaiAkhir4 <=65 ) {
                    $grade4 = "C+";
                } elseif ($nilaiAkhir4 >= 56 && $nilaiAkhir4 <=60 ) {
                    $grade4 = "C";
                } elseif ($nilaiAkhir4 >= 51 && $nilaiAkhir4 <=55 ) {
                    $grade4 = "C-";
                } elseif ($nilaiAkhir4 >= 36 && $nilaiAkhir4 <=50 ) {
                    $grade4 = "D";
                } elseif ($nilaiAkhir4 >= 0 && $nilaiAkhir4 <=35 ) {
                    $grade4 = "E";
                }

                switch ($grade4) {
                    case "A":  $mutu4 = 4.00; break;
                    case "A-": $mutu4 = 3.70; break;
                    case "B+": $mutu4 = 3.30; break;
                    case "B":  $mutu4 = 3.00; break;
                    case "B-": $mutu4 = 2.70; break;
                    case "C+": $mutu4 = 2.30; break;
                    case "C":  $mutu4 = 2.00; break;
                    case "C-": $mutu4 = 1.70; break;
                    case "D":  $mutu4 = 1.00; break;
                    default:   $mutu4 = 0.00; break;
                }

                $bobot4 = $mutu4 * $sksMatkul4;
                
                if ($grade4 == "D" || $grade4 == "E") {
                    $status4 = "Tidak Lulus";
                } else {
                    $status4 = "Lulus";
                }
            ?>

            <h2></h2>
            <p><strong>Nama Matakuliah ke-2</strong><span>:</span> <?php echo $namaMatkul4 ?></p>
            <p><strong>SKS</strong><span>:</span> <?php echo $sksMatkul4 ?></p>
            <p><strong>Kehadiran</strong><span>:</span> <?php echo $nilaiHadir4 ?></p>
            <p><strong>Tugas</strong><span>:</span> <?php echo $nilaiTugas4 ?></p>
            <p><strong>UTS</strong><span>:</span> <?php echo $nilaiUTS4 ?></p>
            <p><strong>UAS </strong><span>:</span> <?php echo $nilaiUAS4?></p>
            <p><strong>Nilai Akhir</strong><span>:</span> <?php echo $nilaiAkhir4 ?></p>
            <p><strong>Grade</strong><span>:</span> <?php echo $grade4 ?></p>
            <p><strong>Angka Mutu</strong><span>:</span> <?php echo $mutu4 ?></p>
            <p><strong>Bobot</strong><span>:</span> <?php echo $bobot4 ?></p>
            <p><strong>Status</strong><span>:</span> <?php echo $status4 ?></p>

            <?php
                $namaMatkul5 = "Pemrograman Web Dasar";
                $sksMatkul5 = 3;
                $nilaiHadir5 = 69;
                $nilaiTugas5 = 80;
                $nilaiUTS5 = 90;
                $nilaiUAS5 = 100;
                $nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);
                
               
                if ($nilaiHadir5 < 70) {
                    $grade5 = "E";
                } elseif ($nilaiAkhir5 >= 91 && $nilaiAkhir5 <=100 ) {
                    $grade5 = "A";
                } elseif ($nilaiAkhir5 >= 81 && $nilaiAkhir5 <=90 ) {
                    $grade5 = "A-";
                } elseif ($nilaiAkhir5 >= 76 && $nilaiAkhir5 <=80 ) {
                    $grade5 = "B+";
                } elseif ($nilaiAkhir5 >= 71 && $nilaiAkhir5 <=75 ) {
                    $grade5 = "B";
                } elseif ($nilaiAkhir5 >= 66 && $nilaiAkhir5 <=70 ) {
                    $grade5 = "B-";
                } elseif ($nilaiAkhir5 >= 61 && $nilaiAkhir5 <=65 ) {
                    $grade5 = "C+";
                } elseif ($nilaiAkhir5 >= 56 && $nilaiAkhir5 <=60 ) {
                    $grade5 = "C";
                } elseif ($nilaiAkhir5 >= 51 && $nilaiAkhir5 <=55 ) {
                    $grade5 = "C-";
                } elseif ($nilaiAkhir5 >= 36 && $nilaiAkhir5 <=50 ) {
                    $grade5 = "D";
                } elseif ($nilaiAkhir5 >= 0 && $nilaiAkhir5 <=35 ) {
                    $grade5 = "E";
                }

                switch ($grade5) {
                    case "A":  $mutu5 = 4.00; break;
                    case "A-": $mutu5 = 3.70; break;
                    case "B+": $mutu5 = 3.30; break;
                    case "B":  $mutu5 = 3.00; break;
                    case "B-": $mutu5 = 2.70; break;
                    case "C+": $mutu5 = 2.30; break;
                    case "C":  $mutu5 = 2.00; break;
                    case "C-": $mutu5 = 1.70; break;
                    case "D":  $mutu5 = 1.00; break;
                    default:   $mutu5 = 0.00; break;
                }

                $bobot5 = $mutu5 * $sksMatkul5;
                
                if ($grade5 == "D" || $grade5 == "E") {
                    $status5 = "Tidak Lulus";
                } else {
                    $status5 = "Lulus";
                }
            ?>

            <h2></h2>
            <p><strong>Nama Matakuliah ke-2</strong><span>:</span> <?php echo $namaMatkul5 ?></p>
            <p><strong>SKS</strong><span>:</span> <?php echo $sksMatkul5 ?></p>
            <p><strong>Kehadiran</strong><span>:</span> <?php echo $nilaiHadir5 ?></p>
            <p><strong>Tugas</strong><span>:</span> <?php echo $nilaiTugas5 ?></p>
            <p><strong>UTS</strong><span>:</span> <?php echo $nilaiUTS5 ?></p>
            <p><strong>UAS </strong><span>:</span> <?php echo $nilaiUAS5?></p>
            <p><strong>Nilai Akhir</strong><span>:</span> <?php echo $nilaiAkhir5 ?></p>
            <p><strong>Grade</strong><span>:</span> <?php echo $grade5 ?></p>
            <p><strong>Angka Mutu</strong><span>:</span> <?php echo $mutu5 ?></p>
            <p><strong>Bobot</strong><span>:</span> <?php echo $bobot5 ?></p>
            <p><strong>Status</strong><span>:</span> <?php echo $status5 ?></p>
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