<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="../php/login.php">
    <button type="">Masuk ke halaman admin</button>
  </a>

</body>

</html>
<?php
require '../php/functions.php';
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan6a</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <br>
    <tr>
      <th>No</th>
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