<!DOCTYPE html>
<html>
<head>
  <title>Belajar PHP Dasar</title>
</head>
<body>
  <h1><?php echo "Halo, Dunia PHP!"; ?></h1>
  <h2><?php echo "Selamat datang di PHP, Prita Lauren!"; ?></h2>
</body>
</html>

<h2>Latihan variabel dan tipe data</h2>
<?php
$nama = "Prita Lauren";
$umur = 18;
$tinggi = 1.50;
$aktif = true;

echo "Nama: $nama <br>";
echo "Umur: $umur tahun <br>";
echo "Tinggi: $tinggi meter <br>";
echo "Status aktif: " . ($aktif ? "Ya" : "Tidak") . "<br>";
var_dump($nama);
var_dump($umur);
var_dump($tinggi);
var_dump($aktif);
?>

<h2>Latihan tipe data</h2>
<?php
$nama = "Prita Lauren";
$umur = 18;
$tinggi = 1.50;
$aktif = true;
$hobi = ["Menonton film horor", "Baking", "Mendengarkan musik"];
$mahasiswa = (object)[
  "nim" => "2522500076",
  "nama" => "Prita Lauren",
  "prodi" => "Sistem Informasi"
];
$nilai_akhir = NULL;
echo "<h2>Demo Tipe Data PHP</h2>";

echo "<pre>";
echo "String:\n";
var_dump($nama);

echo "\nInteger:\n";
var_dump($umur);

echo "\nFloat:\n";
var_dump($tinggi);

echo "\nBoolean:\n";
var_dump($aktif);

echo "\nArray:\n";
var_dump($hobi);

echo "\nObject:\n";
var_dump($mahasiswa);

echo "\nNULL:\n";
var_dump($nilai_akhir);
echo "</pre>";
?>

<h2>Latihan konstanta dan komentar/remark</h2>
<?php
// Membuat konstanta DOSEN_PENGAMPU menggunakan define()
define("DOSEN_PENGAMPU", "Yohanes Setiawan Japriadi, M.Kom.");
/*
    Membuat konstanta MATAKULIAH menggunakan const.
    Konstanta ini menyimpan nama mata kuliah yang diajar oleh dosen pengampu.
*/
const MATAKULIAH = "Pemrograman Web Dasar";

// Menampilkan nama dosen pengampu
echo "Dosen_Pengampu: " . DOSEN_PENGAMPU . "<br>"; 

// Menampilkan nama mata kuliah
echo "Matakuliah: " . MATAKULIAH; 
?> <br><br>
