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