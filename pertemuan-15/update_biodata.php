<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

# Hanya izinkan method POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('read_biodata.php');
}

# Ambil data dari form
$nim           = trim($_POST['txtNim'] ?? '');
$nama          = trim($_POST['txtNama'] ?? '');
$tempat_lahir  = trim($_POST['txtT4Lhr'] ?? '');
$tgl_lahir     = trim($_POST['txtTglLhr'] ?? '');
$hobi          = trim($_POST['txtHobi'] ?? '');
$pasangan      = trim($_POST['txtPasangan'] ?? '');
$pekerjaan     = trim($_POST['txtKerja'] ?? '');
$nm_orangtua   = trim($_POST['txtNmOrtu'] ?? '');
$nm_kakak      = trim($_POST['txtNmKakak'] ?? '');
$nm_adik       = trim($_POST['txtNmAdik'] ?? '');

# Validasi wajib isi
if ($nim === '' || $nama === '' || $tempat_lahir === '' ||
    $tgl_lahir === '' || $hobi === '' || $pasangan === '' ||
    $pekerjaan === '' || $nm_orangtua === '' || $nm_kakak === '' || $nm_adik === '') {

    $_SESSION['flash_error'] = 'Semua field wajib diisi.';

    # Simpan old agar form tetap terisi
    $_SESSION['old'] = $_POST;

    redirect_ke('edit_biodata.php?nim=' . urlencode($nim));
}

# Query UPDATE dengan prepared statement
$stmt = mysqli_prepare(
  $conn,
  "UPDATE biodata_mahasiswa
   SET nama = ?, tempat_lahir = ?, tgl_lahir = ?, hobi = ?,
       pasangan = ?, pekerjaan = ?, nm_orangtua = ?, nm_kakak = ?, nm_adik = ?
   WHERE nim = ?"
);

if (!$stmt) {
    $_SESSION['flash_error'] = 'Query gagal diproses (prepare error).';
    redirect_ke('edit_biodata.php?nim=' . urlencode($nim));
}

mysqli_stmt_bind_param($stmt, "isssssssss", $nim, $nama, $tempat_lahir, $tgl_lahir, $hobi, $pasangan, $pekerjaan, $nm_orangtua, $nm_kakak, $nm_adik, $nim);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['flash_sukses'] = 'Data biodata berhasil diperbarui.';
} else {
    $_SESSION['flash_error'] = 'Gagal menyimpan perubahan.';
}

mysqli_stmt_close($stmt);

redirect_ke('read_biodata.php');
