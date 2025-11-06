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
            <p><strong>Nama Matakuliah ke-1 : </strong><?php echo $namaMatkul1 ?> </p>
            <p><strong>SKS :</strong> <?php echo $sksMatkul1 ?> </p>
            <p><strong>Kehadiran : </strong> <?php echo $nilaiHadir1 ?> </p>
            <p><strong>Tugas : </strong> <?php echo $nilaiTugas1 ?> </p>
            <p><strong>UTS : </strong> <?php echo $nilaiUTS1 ?> </p>
            <p><strong>UAS : </strong><?php echo $nilaiUAS1 ?> </p>
            <p><strong>Nilai Akhir : </strong> <?php echo $nilaiAkhir1 ?> </p>
            <p><strong>Grade : </strong> <?php echo $grade1 ?> </p>
            <p><strong>Angka Mutu : </strong> <?php echo number_format($mutu1, 2) ?> </p>
            <p><strong>Bobot : </strong> <?php echo $bobot1 ?> </p>
            <p><strong>Status : </strong> <?php echo $status1 ?> </p>  

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
                } elseif ($nilaiAkhir2 >= 91) {
                    $grade2 = "A";
                } elseif ($nilaiAkhir2 >= 81) {
                    $grade2 = "A-";
                } elseif ($nilaiAkhir2 >= 76) {
                    $grade2 = "B+";
                } elseif ($nilaiAkhir2 >= 71) {
                    $grade2 = "B";
                } elseif ($nilaiAkhir2 >= 66) {
                    $grade2 = "B-";
                } elseif ($nilaiAkhir2 >= 61) {
                    $grade2 = "C+";
                } elseif ($nilaiAkhir2 >= 56) {
                    $grade2 = "C";
                } elseif ($nilaiAkhir2 >= 51) {
                    $grade2 = "C-";
                } elseif ($nilaiAkhir2 >= 36) {
                    $grade2 = "D";
                } elseif ($nilaiAkhir2 >= 0) {
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
            <p><strong>Nama Matakuliah ke-2 : </strong><?php echo $namaMatkul2 ?> </p>
            <p><strong>SKS :</strong> <?php echo $sksMatkul2 ?> </p>
            <p><strong>Kehadiran : </strong> <?php echo $nilaiHadir2 ?> </p>
            <p><strong>Tugas : </strong> <?php echo $nilaiTugas2 ?> </p>
            <p><strong>UTS : </strong> <?php echo $nilaiUTS2 ?> </p>
            <p><strong>UAS : </strong><?php echo $nilaiUAS2 ?> </p>
            <p><strong>Nilai Akhir : </strong> <?php echo $nilaiAkhir2 ?> </p>
            <p><strong>Grade : </strong> <?php echo $grade2 ?> </p>
            <p><strong>Angka Mutu : </strong> <?php echo number_format($mutu2, 2) ?> </p>
            <p><strong>Bobot : </strong> <?php echo $bobot2 ?> </p>
            <p><strong>Status : </strong> <?php echo $status2 ?> </p>  

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
                } elseif ($nilaiAkhir3 >= 91) {
                    $grade3 = "A";
                } elseif ($nilaiAkhir3 >= 81) {
                    $grade3 = "A-";
                } elseif ($nilaiAkhir3 >= 76) {
                    $grade3 = "B+";
                } elseif ($nilaiAkhir3 >= 71) {
                    $grade3 = "B";
                } elseif ($nilaiAkhir3 >= 66) {
                    $grade3 = "B-";
                } elseif ($nilaiAkhir3 >= 61) {
                    $grade3 = "C+";
                } elseif ($nilaiAkhir3 >= 56) {
                    $grade3 = "C";
                } elseif ($nilaiAkhir3 >= 51) {
                    $grade3 = "C-";
                } elseif ($nilaiAkhir3 >= 36) {
                    $grade3 = "D";
                } elseif ($nilaiAkhir3 >= 0) {
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
            <p><strong>Nama Matakuliah ke-3 : </strong><?php echo $namaMatkul3 ?> </p>
            <p><strong>SKS :</strong> <?php echo $sksMatkul3 ?> </p>
            <p><strong>Kehadiran : </strong> <?php echo $nilaiHadir3 ?> </p>
            <p><strong>Tugas : </strong> <?php echo $nilaiTugas3 ?> </p>
            <p><strong>UTS : </strong> <?php echo $nilaiUTS3 ?> </p>
            <p><strong>UAS : </strong><?php echo $nilaiUAS3 ?> </p>
            <p><strong>Nilai Akhir : </strong> <?php echo $nilaiAkhir3 ?> </p>
            <p><strong>Grade : </strong> <?php echo $grade3 ?> </p>
            <p><strong>Angka Mutu : </strong> <?php echo number_format($mutu3, 2) ?> </p>
            <p><strong>Bobot : </strong> <?php echo $bobot3 ?> </p>
            <p><strong>Status : </strong> <?php echo $status3 ?> </p>  

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
                } elseif ($nilaiAkhir4 >= 91) {
                    $grade4 = "A";
                } elseif ($nilaiAkhir4 >= 81) {
                    $grade4 = "A-";
                } elseif ($nilaiAkhir4 >= 76) {
                    $grade4 = "B+";
                } elseif ($nilaiAkhir4 >= 71) {
                    $grade4 = "B";
                } elseif ($nilaiAkhir4 >= 66) {
                    $grade4 = "B-";
                } elseif ($nilaiAkhir4 >= 61) {
                    $grade4 = "C+";
                } elseif ($nilaiAkhir4 >= 56) {
                    $grade4 = "C";
                } elseif ($nilaiAkhir4 >= 51) {
                    $grade4 = "C-";
                } elseif ($nilaiAkhir4 >= 36) {
                    $grade4 = "D";
                } elseif ($nilaiAkhir4 >= 0) {
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
            <p><strong>Nama Matakuliah ke-4 : </strong><?php echo $namaMatkul3 ?> </p>
            <p><strong>SKS :</strong> <?php echo $sksMatkul3 ?> </p>
            <p><strong>Kehadiran : </strong> <?php echo $nilaiHadir3 ?> </p>
            <p><strong>Tugas : </strong> <?php echo $nilaiTugas3 ?> </p>
            <p><strong>UTS : </strong> <?php echo $nilaiUTS3 ?> </p>
            <p><strong>UAS : </strong><?php echo $nilaiUAS3 ?> </p>
            <p><strong>Nilai Akhir : </strong> <?php echo $nilaiAkhir ?> </p>
            <p><strong>Grade : </strong> <?php echo $grade3 ?> </p>
            <p><strong>Angka Mutu : </strong> <?php echo number_format($mutu3, 2) ?> </p>
            <p><strong>Bobot : </strong> <?php echo $bobot3 ?> </p>
            <p><strong>Status : </strong> <?php echo $status3 ?> </p>  

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
                } elseif ($nilaiAkhir5 >= 91) {
                    $grade5 = "A";
                } elseif ($nilaiAkhir5 >= 81) {
                    $grade5 = "A-";
                } elseif ($nilaiAkhir5 >= 76) {
                    $grade5 = "B+";
                } elseif ($nilaiAkhir5 >= 71) {
                    $grade5 = "B";
                } elseif ($nilaiAkhir5 >= 66) {
                    $grade5 = "B-";
                } elseif ($nilaiAkhir5 >= 61) {
                    $grade5 = "C+";
                } elseif ($nilaiAkhir5 >= 56) {
                    $grade5 = "C";
                } elseif ($nilaiAkhir5 >= 51) {
                    $grade5 = "C-";
                } elseif ($nilaiAkhir5 >= 36) {
                    $grade5 = "D";
                } elseif ($nilaiAkhir5 >= 0 ) {
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
            <p><strong>Nama Matakuliah ke-5 : </strong><?php echo $namaMatkul5 ?> </p>
            <p><strong>SKS :</strong> <?php echo $sksMatkul5 ?> </p>
            <p><strong>Kehadiran : </strong> <?php echo $nilaiHadir5 ?> </p>
            <p><strong>Tugas : </strong> <?php echo $nilaiTugas5 ?> </p>
            <p><strong>UTS : </strong> <?php echo $nilaiUTS5 ?> </p>
            <p><strong>UAS : </strong><?php echo $nilaiUAS5 ?> </p>
            <p><strong>Nilai Akhir : </strong> <?php echo $nilaiAkhir5 ?> </p>
            <p><strong>Grade : </strong> <?php echo $grade5 ?> </p>
            <p><strong>Angka Mutu : </strong> <?php echo number_format($mutu5, 2) ?> </p>
            <p><strong>Bobot : </strong> <?php echo $bobot5 ?> </p>
            <p><strong>Status : </strong> <?php echo $status5 ?> </p>  

            <?php
                $totalBobot = ($bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5);
                $totalSKS = ($sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5);
                $IPK = ($totalBobot / $totalSKS);
            ?>

            <h2></h2>
            <p><strong>Total Bobot : </strong><?php echo $totalBobot ?></p>
            <p><strong>Total SKS : </strong><?php echo $totalSKS ?></p>
            <p><strong>IPK : </strong><?php echo number_format ($IPK,2) ?></p>

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