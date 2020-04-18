<?php
require '../php/functions.php';

$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Latihan5b</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div class="container">
    <table border="1" cellspacing=0 cellpadding=5>
      <tr>
        <th>No.</th>
        <th>Foto</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tebal Buku</th>
        <th>Tahun Terbit</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($buku as $bk) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="../assets/img/<?= $bk["Foto"]; ?>" width="80"></td>
          <td> <?= $bk["Judul_Buku"] ?> </td>
          <td><?= $bk["Penulis"] ?></td>
          <td><?= $bk["Penerbit"] ?></td>
          <td><?= $bk["Tebal_Buku"] ?></td>
          <td><?= $bk["Tahun_Terbit"] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>

    </table>
  </div>
</body>

</html>