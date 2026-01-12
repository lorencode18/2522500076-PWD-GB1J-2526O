<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM biodata_mahasiswa ORDER BY id DESC";
  $q = mysqli_query($conn, $sql);

  if (!$q) {
    die("Query error: " . mysqli_error($conn));
  }
?>

<?php
  $flash_sukses = $_SESSION['flash_sukses'] ?? '';
  $flash_error  = $_SESSION['flash_error'] ?? '';

unset($_SESSION['flash_sukses'], $_SESSION['flash_error']);
?>

<?php if (!empty($flash_sukses)): ?>
  <div style="padding:10px; margin-bottom:10px; background:#d4edda; color:#155724;">
    <?= $flash_sukses; ?>
  </div>
<?php endif; ?>

<?php if (!empty($flash_error)): ?>
  <div style="padding:10px; margin-bottom:10px; background:#f8d7da; color:#721c24;">
    <?= $flash_error; ?>
  </div>
<?php endif; ?>




