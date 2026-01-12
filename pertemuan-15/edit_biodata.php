<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $nim = filter_input(INPUT_GET, 'nim', FILTER_SANITIZE_STRING);

  if (!$nim) {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read_biodata.php');
  }

$stmt = mysqli_prepare($conn, 
  "SELECT nim, nama_lengkap, tempat_lahir, tgl_lahir, hobi,
          pasangan, pekerjaan, nm_orangtua, nm_kakak, nm_adik
   FROM biodata_mahasiswa WHERE nim = ? LIMIT 1");