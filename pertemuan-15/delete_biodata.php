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

  $stmt = mysqli_prepare($conn, "DELETE FROM biodata_mahasiswa
                                WHERE nim = ?");
  if (!$stmt) {
    #jika gagal prepare
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('read_biodata.php');
  }

  mysqli_stmt_bind_param($stmt, "i", $nim);

  if (mysqli_stmt_execute($stmt)) { 
    #jika berhasil
    $_SESSION['flash_sukses'] = 'Data biodata berhasil dihapus.';
  } else {
    #jika gagal
    $_SESSION['flash_error'] = 'Data gagal dihapus. Silakan coba lagi.';
  }

  mysqli_stmt_close($stmt);

  redirect_ke('read_biodata.php');