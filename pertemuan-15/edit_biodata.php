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
    "SELECT nim, nama, tempat_lahir, tgl_lahir, hobi,
          pasangan, pekerjaan, nm_orangtua, nm_kakak, nm_adik
    FROM biodata_mahasiswa WHERE nim = ? LIMIT 1");

  if (!$stmt) {
  $_SESSION['flash_error'] = 'Query tidak benar.';
  redirect_ke('read_biodata.php');
  }

  mysqli_stmt_bind_param($stmt, "s", $nim);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($res);
  mysqli_stmt_close($stmt);

  if (!$row) {
  $_SESSION['flash_error'] = 'Record tidak ditemukan.';
  redirect_ke('read_biodata.php');
  }

  $nama           = $row['nama'];
  $tempat_lahir   = $row['tempat_lahir'];
  $tgl_lahir      = $row['tgl_lahir'];
  $hobi           = $row['hobi'];
  $pasangan       = $row['pasangan'];
  $pekerjaan      = $row['pekerjaan'];
  $nama_orangtua  = $row['nama_orangtua'];
  $nm_kakak       = $row['nm_kakak'];
  $nm_adik        = $row['nm_adik'];

  $flash_error = $_SESSION['flash_error'] ?? '';
  $old = $_SESSION['old'] ?? [];
  unset($_SESSION['flash_error'], $_SESSION['old']);

  if (!empty($old)) {
    $nama          = $old['nama'] ?? $nama;
    $tempat_lahir  = $old['tempat_lahir'] ?? $tempat_lahir;
    $tgl_lahir     = $old['tgl_lahir'] ?? $tgl_lahir;
    $hobi          = $old['hobi'] ?? $hobi;
    $pasangan      = $old['pasangan'] ?? $pasangan;
    $pekerjaan     = $old['pekerjaan'] ?? $pekerjaan;
    $nama_orangtua = $old['nama_orangtua'] ?? $nama_orangtua;
    $nm_kakak      = $old['nm_kakak'] ?? $nm_kakak;
    $nm_adik       = $old['nm_adik'] ?? $nm_adik;
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
      <section id="biodata">
      <h2>Biodata Sederhana Mahasiswa</h2>

      <?php if (!empty($bio_sukses)): ?>
        <div style="padding:10px; margin-bottom:10px; background:#d4edda; color:#155724; border-radius:6px;">
          <?= $bio_sukses; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($bio_error)): ?>
        <div style="padding:10px; margin-bottom:10px; background:#f8d7da; color:#721c24; border-radius:6px;">
          <?= $bio_error; ?>
        </div>
      <?php endif; ?>

      <form action="proses_biodata.php" method="POST">

        <label for="txtNim"><span>NIM:</span>
          <input type="text" id="txtNim" name="txtNim" 
            required autocomplete="off" readonly
            value="<?= htmlspecialchars($nim) ?>">
        </label>

        <label for="txtNmLengkap"><span>Nama Lengkap:</span>
          <input type="text" id="txtNmLengkap" name="txtNmLengkap"
            required autocomplete="name"
            value="<?= htmlspecialchars($nama_lengkap) ?>">
        </label>

        <label for="txtT4Lhr"><span>Tempat Lahir:</span>
          <input type="text" id="txtT4Lhr" name="txtT4Lhr"
            required autocomplete="off"
            value="<?= htmlspecialchars($tempat_lahir) ?>">
        </label>

        <label for="txtTglLhr"><span>Tanggal Lahir:</span>
          <input type="text" id="txtTglLhr" name="txtTglLhr"
            required autocomplete="tanggal"
            value="<?= htmlspecialchars($tgl_lahir) ?>">
        </label>

        <label for="txtHobi"><span>Hobi:</span>
          <input type="text" id="txtHobi" name="txtHobi"
            required autocomplete="off"
            value="<?= htmlspecialchars($hobi) ?>">
        </label>

        <label for="txtPasangan"><span>Pasangan:</span>
         <input type="text" id="txtPasangan" name="txtPasangan"
            required autocomplete="off"
            value="<?= htmlspecialchars($pasangan) ?>">
        </label>

        <label for="txtKerja"><span>Pekerjaan:</span>
          <input type="text" id="txtKerja" name="txtKerja"
            required autocomplete="pekerjaan"
            value="<?= htmlspecialchars($pekerjaan) ?>">
        </label>

        <label for="txtNmOrtu"><span>Nama Orang Tua:</span>
          <input type="text" id="txtNmOrtu" name="txtNmOrtu"
            required autocomplete="off"
            value="<?= htmlspecialchars($nama_orangtua) ?>">
        </label>

        <label for="txtNmKakak"><span>Nama Kakak:</span>
          <input type="text" id="txtNmKakak" name="txtNmKakak"
            required autocomplete="off"
            value="<?= htmlspecialchars($nm_kakak) ?>">
        </label>

        <label for="txtNmAdik"><span>Nama Adik:</span>
          <input type="text" id="txtNmAdik" name="txtNmAdik"
            required autocomplete="off"
            value="<?= htmlspecialchars($nm_adik) ?>">
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
    </section>
    </main>

    <script src="script.js"></script>
  </body>
</html