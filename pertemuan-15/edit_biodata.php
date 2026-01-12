<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $nim = filter_input(INPUT_GET, 'nim', FILTER_SANITIZE_STRING);

  if (!$nim) {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('read_biodata.php');
}