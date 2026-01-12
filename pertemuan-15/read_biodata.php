<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM biodata_mahasiswa";
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

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Hobi</th>
    <th>Pasangan</th>
    <th>Pekerjaan</th>
    <th>Orang Tua</th>
    <th>Kakak</th>
    <th>Adik</th>
    <th>Created At</th>
  </tr>

  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="edit_biodata.php?nim=<?= (int)$row['nim']; ?>">Edit</a>
        <a onclick="return confirm('Hapus <?= htmlspecialchars($row['nama']); ?>?')" href="delete_biodata.php?nim=<?= (int)$row['nim']; ?>">Delete</a>
      </td>
      <td><?= htmlspecialchars($row['nim']); ?></td>
      <td><?= htmlspecialchars($row['nama']); ?></td>     
      <td><?= htmlspecialchars($row['tempat_lahir']); ?></td>
      <td><?= htmlspecialchars($row['tgl_lahir']); ?></td>
      <td><?= htmlspecialchars($row['hobi']); ?></td>
      <td><?= htmlspecialchars($row['pasangan']); ?></td>
      <td><?= htmlspecialchars($row['pekerjaan']); ?></td>
      <td><?= htmlspecialchars($row['nm_orangtua']); ?></td>
      <td><?= htmlspecialchars($row['nm_kakak']); ?></td>
      <td><?= htmlspecialchars($row['nm_adik']); ?></td>
      <td><?= formatTanggal(htmlspecialchars($row['created_at'])); ?></td>
    </tr>
  <?php endwhile; ?>
</table>