<?php
session_start();
require __DIR__ . './koneksi.php';
require_once __DIR__ . '/fungsi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('index.php#anggota');
}

$noangg     = (int) ($_POST['txtNoAng']  ?? '');
$nmangg     = bersihkan($_POST['txtNmAng'] ?? '');
$jabatan    = bersihkan($_POST['txtJabAng'] ?? '');
$tgljadi    = bersihkan($_POST['txtTglJadi'] ?? '');
$kemampuan  = bersihkan($_POST['txtSkill'] ?? '');
$gaji       = bersihkan($_POST['txtGaji'] ?? '');
$nowa       = bersihkan($_POST['txtNoWA'] ?? '');
$batalion   = bersihkan($_POST['txtBatalion'] ?? '');
$bb         = bersihkan($_POST['txtBB'] ?? '');
$tb         = bersihkan($_POST['txtTB'] ?? '');

$errors = []; #ini array untuk menampung semua error yang ada

if ($noangg <= 0) {
  $errors[] = 'Nomor Anggota wajib diisi.';
}

if ($nama_anggota === '') {
  $errors[] = 'Nama Anggota wajib diisi.';
}

if (mb_strlen($nama_anggota) < 3) {
  $errors[] = 'Nama Anggota minimal 3 karakter.';
}

if (!empty($errors)) {
  $_SESSION['old'] = [
    'noangg'    => $noangg,
    'nmangg'    => $nmangg,
    'jabatan'   => $jabatan,
    'tgljadi'   => $tgljadi,
    'kemampuan' => $kemampuan,
    'gai'       => $gaji,
    'nowa'      => $nowa,
    'batalion'  => $batalion,
    'bb'        => $bb,
    'tb'        => $tb,
  ];

  $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('index.php#anggota');
}


