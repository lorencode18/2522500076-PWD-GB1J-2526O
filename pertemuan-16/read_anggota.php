<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM tbl_anggota ORDER BY noangg DESC";
  $q = mysqli_query($conn, $sql);
  if (!$q) {
    die("Query error: " . mysqli_error($conn));
  }
?>

<?php
  $flash_sukses = $_SESSION['flash_sukses'] ?? ''; #jika query sukses
  $flash_error  = $_SESSION['flash_error'] ?? ''; #jika ada error
  #bersihkan session ini
  unset($_SESSION['flash_sukses'], $_SESSION['flash_error']); 
?>

<?php if (!empty($flash_sukses)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#d4edda; color:#155724; border-radius:6px;">
          <?= $flash_sukses; ?>
        </div>
<?php endif; ?>

<?php if (!empty($flash_error)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#f8d7da; color:#721c24; border-radius:6px;">
          <?= $flash_error; ?>
        </div>
<?php endif; ?>

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Nomor Anggota</th>
    <th>Nama Anggota</th>
    <th>Jabatan</th>
    <th>Tanggal Jadi Anggota</th>
    <th>Gaji</th>
    <th>Nomor WA</th>
    <th>Batalion</th>
    <th>Berat Badan</th>
    <th>Tinggi Badan</th>
    <th>Created At</th>

  </tr>
  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="edit_anggota.php?noangg=<?= (int)$row['noangg']; ?>">Edit</a>
        <a onclick="return confirm('Hapus <?= htmlspecialchars($row['nmangg']); ?>?')" href="proses_delete_anggota.php?noangg=<?= (int)$row['noangg']; ?>">Delete</a>
      </td>
      <td><?= $row['noangg']; ?></td>
      <td><?= htmlspecialchars($row['nmangg']); ?></td>
      <td><?= htmlspecialchars($row['jabatan']); ?></td>
      <td><?= htmlspecialchars($row['tgljadi']); ?></td>
      <td><?= htmlspecialchars($row['kemampuan']); ?></td>
      <td><?= htmlspecialchars($row['gaji']); ?></td>
      <td><?= htmlspecialchars($row['nowa']); ?></td>
      <td><?= htmlspecialchars($row['batalion']); ?></td>
      <td><?= htmlspecialchars($row['bb']); ?></td>
      <td><?= htmlspecialchars($row['tb']); ?></td>
      <td><?= formatTanggal(htmlspecialchars($row['created_at'])); ?></td>
    </tr>
  <?php endwhile; ?>
</table>