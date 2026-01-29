<?php
  session_start();
  require __DIR__ . '/koneksi.php';
  require_once __DIR__ . '/fungsi.php';

  #cek method form, hanya izinkan POST
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read.php');
  }

  #validasi noangg wajib angka dan > 0
  $noangg = filter_input(INPUT_POST, 'noangg', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);

  if (!$noangg) {
    $_SESSION['flash_error'] = 'noangg Tidak Valid.';
    redirect_ke('edit.php?noangg='. (int)$noangg);
  }

  #ambil dan bersihkan (sanitasi) nilai dari form
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
    'gaji'      => $gaji,
    'nowa'      => $nowa,
    'batalion'  => $batalion,
    'bb'        => $bb,
    'tb'        => $tb,
  ];

    $_SESSION['flash_error'] = implode('<br>', $errors);
    redirect_ke('edit_anggota.php?noangg='. (int)$noangg);
  }

  /*
    Prepared statement untuk anti SQL injection.
    menyiapkan query UPDATE dengan prepared statement 
    (WAJIB WHERE noangg = ?)
  */
  $stmt = mysqli_prepare($conn, "UPDATE tbl_anggota
                                SET Nama_Anggota = ?,  Jabatan = ?, Tanggal_Jadi = ?, Kemampuan = ?, Gaji = ?, Nomor_WA = ?, Batalion = ?, Berat_Badan = ?, Tinggi_Badan = ?
                                WHERE Nomor_Anggota = ?");
  if (!$stmt) {
    #jika gagal prepare, kirim pesan error (tanpa detail sensitif)
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('edit.php?noangg='. (int)$noangg);
  }

  #bind parameter dan eksekusi (s = string, i = integer)
  mysqli_stmt_bind_param($stmt, "sssi", $nama, $email, $pesan, $noangg);

  if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value
    unset($_SESSION['old']);
    /*
      Redirect balik ke read.php dan tampilkan info sukses.
    */
    $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah diperbaharui.';
    redirect_ke('read.php'); #pola PRG: kembali ke data dan exit()
  } else { #jika gagal, simpan kembali old value dan tampilkan error umum
    $_SESSION['old'] = [
      'nama'  => $nama,
      'email' => $email,
      'pesan' => $pesan,
    ];
    $_SESSION['flash_error'] = 'Data gagal diperbaharui. Silakan coba lagi.';
    redirect_ke('edit.php?noangg='. (int)$noangg);
  }
  #tutup statement
  mysqli_stmt_close($stmt);

  redirect_ke('edit.php?noangg='. (int)$noangg);