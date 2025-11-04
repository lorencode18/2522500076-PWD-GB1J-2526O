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
?> 
<br><br>

<h2>Latihan operator dasar</h2>
<?php
$a = 10;
$b = 3;

echo $a + $b . "<br>"; 
echo $a % $b;
?>

<h2>Latihan operator pembanding</h2>
<?php
$a = 100;
$b = "100";
$c = 0;
$d = false;

echo "<h3>Perbandingan == dan ===</h3>";
echo "\$a == \$b : "; var_dump($a == $b);
echo "\$a === \$b : "; var_dump($a === $b);
echo "\$c == \$d : "; var_dump($c == $d);
echo "\$c === \$d : "; var_dump($c === $d);
?>

<h2>Latihan struktur kontrol percabangan</h2>
<?php
$nilai = 90;

if ($nilai >= 90) {
  echo "A";
} elseif ($nilai >= 80) {
  echo "B";
} else {
  echo "C";
}
?>
<br>

<?php
$hari = "Jumat";
switch ($hari) {
  case "Senin": echo "Awal Minggu!"; break;
  case "Jumat": echo "Hampir weekend!"; break;
  default: echo "Hari biasa.";
}
?>

<h2>Latihan struktur kontrol perulangan dan array</h2>
<?php
$hobi = ["Menonton film horor", "Baking", "Mendengarkan musik"];
foreach ($hobi as $item) {
  echo "Hobi: $item <br>";
}
?>

<h2>Latihan array dan penggunaan print_r() dan var_dump()</h2>
<?php
$hobi = ["Menonton film horor", "Baking", "Mendengarkan musik"];

echo "<h3>Daftar Hobi Saya:</h3>";
for ($i = 0; $i < count($hobi); $i++) {
  echo ($i + 1) . ". " . $hobi[$i] . "<br>";
}

echo "<hr>";
echo "<h4>Hasil print_r():</h4>";
echo "<pre>";
print_r($hobi);
echo "</pre>";

echo "<h4>Hasil var_dump():</h4>";
echo "<pre>";
var_dump($hobi);
echo "</pre>";
?>

<h2>Latihan struktur kontrol perulangan dengan for</h2>
<?php
for ($i=1; $i<=5; $i++) {
  echo "Perulangan ke-$i <br>";
}
?>