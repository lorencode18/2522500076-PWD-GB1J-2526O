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