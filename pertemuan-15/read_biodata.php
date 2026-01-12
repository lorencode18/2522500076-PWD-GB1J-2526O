<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM biodata_mahasiswa ORDER BY id DESC";
  $q = mysqli_query($conn, $sql);

  if (!$q) {
    die("Query error: " . mysqli_error($conn));
  }
?>
