<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  /*
    Ambil nilai noangg dari GET dan lakukan validasi untuk 
    mengecek noangg harus angka dan lebih besar dari 0 (> 0).
    'options' => ['min_range' => 1] artinya noangg harus ≥ 1 
    (bukan 0, bahkan bukan negatif, bukan huruf, bukan HTML).
  */
  $noangg = filter_input(INPUT_GET, 'noangg', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);
  /*
    Skrip di atas cara penulisan lamanya adalah:
    $noangg = $_GET['noangg'] ?? '';
    $noangg = (int)$noangg;

    Cara lama seperti di atas akan mengambil data mentah 
    kemudian validasi dilakukan secara terpisah, sehingga 
    rawan lupa validasi. Untuk input dari GET atau POST, 
    filter_input() lebih disarankan daripada $_GET atau $_POST.
  */

  /*
    Cek apakah $noangg bernilai valid:
    Kalau $noangg tidak valid, maka jangan lanjutkan proses, 
    kembalikan pengguna ke halaman awal (read.php) sembari 
    mengirim penanda error.
  */
  if (!$noangg) {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read_anggota.php');
  }

  /*
    Ambil data lama dari DB menggunakan prepared statement, 
    jika ada kesalahan, tampilkan penanda error.
  */
  $stmt = mysqli_prepare($conn, "SELECT noangg, nmangg, jabatan, tgljadi, kemampuan, gaji, nowa, batalion, bb, tb
                                    FROM tbl_anggota WHERE noangg = ? LIMIT 1");
  if (!$stmt) {
    $_SESSION['flash_error'] = 'Query tidak benar.';
    redirect_ke('read_anggota.php');
  }

  mysqli_stmt_bind_param($stmt, "i", $noangg);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($res);
  mysqli_stmt_close($stmt);

  if (!$row) {
    $_SESSION['flash_error'] = 'Record tidak ditemukan.';
    redirect_ke('read_anggota.php');
  }

  #Nilai awal (prefill form)
  $noangg    = $row['nmangg'] ?? '';
  $nmangg    = $row['nmangg'] ?? '';
  $jabatan   = $row['jabatan'] ?? '';
  $tgljadi   = $row['tgljadi'] ?? '';
  $kemampuan = $row['kemampuan'] ?? '';
  $gaji      = $row['gaji'] ?? '';
  $nowa      = $row['nowa'] ?? '';
  $batalion  = $row['batalion'] ?? '';
  $bb        = $row['bb'] ?? '';
  $tb        = $row['tb'] ?? '';

  #Ambil error dan nilai old input kalau ada
  $flash_error = $_SESSION['flash_error'] ?? '';
  $old = $_SESSION['old'] ?? [];
  unset($_SESSION['flash_error'], $_SESSION['old']);
  if (!empty($old)) {
  $noangg    = $row['nmangg'] ?? '';
  $nmangg    = $row['nmangg'] ?? '';
  $jabatan   = $row['jabatan'] ?? '';
  $tgljadi   = $row['tgljadi'] ?? '';
  $kemampuan = $row['kemampuan'] ?? '';
  $gaji      = $row['gaji'] ?? '';
  $nowa      = $row['nowa'] ?? '';
  $batalion  = $row['batalion'] ?? '';
  $bb        = $row['bb'] ?? '';
  $tb        = $row['tb'] ?? '';
  }
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>Ini Header</h1>
      <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
        &#9776;
      </button>
      <nav>
        <ul>
          <li><a href="#home">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section id="anggota">
      <h2>Data Anggota</h2>
      <form action="proses_anggota.php" method="POST">

        <label for="txtNoAng"><span>Nomor Anggota:</span>
          <input type="text" id="txtNoAng" name="txtNoAng" placeholder="Masukkan Nomor Anggota" 
          required autocomplete="off"
          value="<?= isset($old['no_angg']) ? htmlspecialchars($old['no_angg']) : '' ?>">
        </label>

        <label for="txtNmAng"><span>Nama Anggota:</span>
          <input type="text" id="txtNmAng" name="txtNmAng" placeholder="Masukkan Nama Anggota" 
          required autocomplete="name"
          value="<?= isset($old['nama_angg']) ? htmlspecialchars($old['nama_angg']) : '' ?>">
        </label>

        <label for="txtJabAng"><span>Jabatan Anggota:</span>
          <input type="text" id="txtJabAng" name="txtJabAng" placeholder="Masukkan Jabatan Anggota" 
          required autocomplete="off"
          value="<?= isset($old['jab']) ? htmlspecialchars($old['jab']) : '' ?>">
        </label>

        <label for="txtTglJadi"><span>Tanggal Jadi Anggota:</span>
          <input type="text" id="txtTglJadi" name="txtTglJadi" placeholder="Masukkan Tanggal Jadi Anggota" 
          required autocomplete="date"
          value="<?= isset($old['tgl_jadi']) ? htmlspecialchars($old['tgl_jadi']) : '' ?>">
        </label>

        <label for="txtSkill"><span>Kemampuan Anggota:</span>
          <input type="text" id="txtSkill" name="txtSkill" placeholder="Masukkan Kemampuan Anggota" 
          required autocomplete="off"
          value="<?= isset($old['kemampuan']) ? htmlspecialchars($old['kemampuan']) : '' ?>">
        </label>

        <label for="txtGaji"><span>Gaji Anggota:</span>
          <input type="text" id="txtGaji" name="txtGaji" placeholder="Masukkan Gaji Anggota" 
          required autocomplete="off"
          value="<?= isset($old['gaj']) ? htmlspecialchars($old['gaji']) : '' ?>">
        </label>

        <label for="txtNoWA"><span>Nomor WA:</span>
          <input type="text" id="txtNoWA" name="txtNoWA" placeholder="Masukkan Nomor WA" 
          required autocomplete="off"
          value="<?= isset($old['no_wa']) ? htmlspecialchars($old['no_wa']) : '' ?>">
        </label>

        <label for="txtBatalion"><span>Batalion Anggota:</span>
          <input type="text" id="txtBatalion" name="txtBatalion" placeholder="Masukkan Batalion Anggota" 
          required autocomplete="off"
          value="<?= isset($old['batalion']) ? htmlspecialchars($old['batalion']) : '' ?>">
        </label>

        <label for="txtBB"><span>Berat Badan:</span>
          <input type="text" id="txtBB" name="txtBB" placeholder="Masukkan Berat Badan" 
          required autocomplete="off"
          value="<?= isset($old['bb']) ? htmlspecialchars($old['bb']) : '' ?>">
        </label>

        <label for="txtTB"><span>Tinggi Badan:</span>
          <input type="text" id="txtTB" name="txtTB" placeholder="Masukkan Tinggi Badan" 
          required autocomplete="off"
          value="<?= isset($old['tb']) ? htmlspecialchars($old['tb']) : '' ?>">
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
    </section>
    </main>

    <script src="script.js"></script>
  </body>
</html>