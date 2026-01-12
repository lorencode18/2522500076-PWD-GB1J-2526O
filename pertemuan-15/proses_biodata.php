<?php
session_start();
require __DIR__ . './koneksi.php';
require_once __DIR__ . '/fungsi.php';

#cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('index.php#biodata');
}

#ambil dan bersihkan nilai dari form
$nim        = bersihkan($_POST['txtNim'] ?? '');
$nama       = bersihkan($_POST['txtNmLengkap'] ?? '');
$tempat     = bersihkan($_POST['txtT4Lhr'] ?? '');
$tanggal    = bersihkan($_POST['txtTglLhr'] ?? '');
$hobi       = bersihkan($_POST['txtHobi'] ?? '');
$pasangan   = bersihkan($_POST['txtPasangan'] ?? '');
$pekerjaan  = bersihkan($_POST['txtKerja'] ?? '');
$ortu       = bersihkan($_POST['txtNmOrtu'] ?? '');
$kakak      = bersihkan($_POST['txtNmKakak'] ?? '');
$adik       = bersihkan($_POST['txtNmAdik'] ?? '');

#Validasi sederhana
$errors = []; #ini array untuk menampung semua error yang ada

if ($nim === '') {
  $errors[] = 'NIM wajib diisi.';
}

if ($nama === '') {
  $errors[] = 'Nama wajib diisi.';
}

if ($tempat === '') {
  $errors[] = 'Tempat Lahir wajib diisi.';
}

if ($tanggal === '') {
  $errors[] = 'Tanggal Lahir wajib diisi.';
}

if ($hobi === '') {
  $errors[] = 'Hobi wajib diisi.';
}

if ($pekerjaan === '') {
  $errors[] = 'Pekerjaan wajib diisi.';
}

if ($pasangan === '') {
  $errors[] = 'Pasangan wajib diisi.';
}

if ($ortu === '') {
  $errors[] = 'Nama Orang Tua wajib diisi.';
}

if ($kakak === '') {
  $errors[] = 'Nama Kakak wajib diisi.';
}

if ($adik === '') {
  $errors[] = 'Nama Adik wajib diisi.';
}

if (mb_strlen($nama) < 3) {
  $errors[] = 'Nama minimal 3 karakter.';
}

/*
kondisi di bawah ini hanya dikerjakan jika ada error, 
simpan nilai lama dan pesan error, lalu redirect (konsep PRG)
*/
if (!empty($errors)) {
  $_SESSION['old'] = [
    'nim'          => $nim,
    'nama'         => $nama,
    'tempat_lahir' => $tempat,
    'tgl_lahir'    => $tanggal,
    'hobi'         => $hobi,
    'pasangan'     => $pasangan,
    'pekerjaan'    => $pekerjaan,
    'nm_orangtua'  => $ortu,
    'nm_kakak'     => $kakak,
    'nm_adik'      => $adik,
  ];

  $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('index.php#biodata');
}

#menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO biodata_mahasiswa (nim, nama, tempat_lahir, tgl_lahir, hobi, pasangan, pekerjaan, nm_orangtua, nm_kakak, nm_adik)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  #jika gagal prepare, kirim pesan error ke pengguna (tanpa detail sensitif)
  $_SESSION['flash_error'] = 'Kesalahan sistem (prepare gagal).';
  redirect_ke('index.php#biodata');
}
#bind parameter dan eksekusi (s = string)
mysqli_stmt_bind_param($stmt, "sssssssssi", $nama, $tempat, $tanggal,$hobi, $pasangan, $pekerjaan, $ortu, $kakak, $adik, $nim);

if (mysqli_stmt_execute($stmt)) {
  unset($_SESSION['old']);
  $_SESSION['flash_sukses'] = 'Terima kasih,  data Anda telah disimpan.';
  redirect_ke('index.php#biodata'); #pola PRG: kembali ke form / halaman utama
} else { #jika gagal, simpan kembali old value dan tampilkan error umum
  $_SESSION['old'] = [
    'nim'          => $nim,
    'nama'         => $nama,
    'tempat_lahir' => $tempat,
    'tgl_lahir'    => $tanggal,
    'hobi'         => $hobi,
    'pasangan'     => $pasangan,
    'pekerjaan'    => $pekerjaan,
    'nm_orangtua'  => $ortu,
    'nm_kakak'     => $kakak,
    'nm_adik'      => $adik,
  ];
  $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
  redirect_ke('index.php#biodata');
}
#tutup statement
mysqli_stmt_close($stmt);

$arrBiodata = [
  "nim"         => $_POST["txtNim"] ?? "",
  "nama"        => $_POST["txtNmLengkap"] ?? "",
  "tempat_lahir"=> $_POST["txtT4Lhr"] ?? "",
  "tgl_lahir"   => $_POST["txtTglLhr"] ?? "",
  "hobi"        => $_POST["txtHobi"] ?? "",
  "pasangan"    => $_POST["txtPasangan"] ?? "",
  "pekerjaan"   => $_POST["txtKerja"] ?? "",
  "nm_orangtua" => $_POST["txtNmOrtu"] ?? "",
  "nm_kakak"    => $_POST["txtNmKakak"] ?? "",
  "nm_adik"     => $_POST["txtNmAdik"] ?? ""
];
$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#about");
