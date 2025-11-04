<h2>Latihan infinite loop</h2>
<?php
$i = 1;
do {
  echo "Iterasi ke-$i<br>";
  $i++;
} while (1 == 1);
?>