<?php
require 'functions.php';
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan7b</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="add">
    <button type="submit">
      <a href="tambah.php">Tambah Data</a>
    </button>
    <button type="submit">
      <div class="logout">
        <a href="logout.php">Logout</a>
      </div>
    </button>
    <form action="" method="GET">
      <input type="text" name="keyword" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
  </div>
  <table border="1" cellpadding="13" cellspacing="0">
    <br>
    <tr>
      <th>No</th>
      <th>opsi</th>
      <th>Foto</th>
      <th>Judul_Buku</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Tebal_Buku</th>
      <th>Tahun_Terbit</th>
    </tr>
    <tr>
      <?php $i = 1; ?>
      <?php foreach ($buku as $bk) : ?>
    </tr>
    <td><?= $i++; ?></td>
    <td>
      <a href="ubah.php">Ubah</a>
      <a href="hapus.php?id=<?= $bk['id'] ?> " onclick=" return confirm('Hapus Data')">Hapus</a>
    </td>
    <td><img src="../assets/img/<?= $bk['Foto']; ?>" width="60"></td>
    <td><?= $bk['Judul_Buku']; ?></td>
    <td><?= $bk['Penulis']; ?></td>
    <td><?= $bk['Penerbit']; ?></td>
    <td><?= $bk['Tebal_Buku']; ?></td>
    <td><?= $bk['Tahun_Terbit']; ?></td>
    </tr>
  <?php endforeach; ?>
  </table>
</body>

</html>