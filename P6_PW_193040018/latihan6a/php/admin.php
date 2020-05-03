<?php
require 'functions.php';
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan6a</title>
  <style>
    table {
      border-color: blue;
      background-color: aquamarine;
    }

    table th {
      background-color: aqua;
    }
  </style>
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">
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
      <a href=""><button>Ubah</button></a>
      <a href=""><button>Hapus</button></a>
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