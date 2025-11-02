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
<br><br>

<?php
$hari = "Jumat";
switch ($hari) {
  case "Senin": echo "Awal Minggu!"; break;
  case "Jumat": echo "Hampir weekend!"; break;
  default: echo "Hari biasa.";
}
?>
<br><br>

<?php
$hobi = ["Menonton film horor", "Baking", "Mendengarkan musik"];
foreach ($hobi as $item) {
  echo "Hobi: $item <br>";
}
?>
<br><br>

<?php
$hobi = ["Coding", "Memasak", "Musik", "Membaca", "Traveling"];

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
<br><br>

<?php
for ($i=1; $i<=5; $i++) {
  echo "Perulangan ke-$i <br>";
}
?>
<br><br>

