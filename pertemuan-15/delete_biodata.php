<?php
  session_start();
  require __DIR__ . '/koneksi.php';
  require_once __DIR__ . '/fungsi.php';

  $nim = filter_input(INPUT_GET, 'nim', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);

  if (!$nim) {
    $_SESSION['flash_error'] = 'NIM Tidak Valid.';
    redirect_ke('read_biodata.php');
  }