<?php
if (!isset($_GET['id'])) {
  header("location:../index.php");
  exit;
}
require 'functions.php';
$id = $_GET['id'];

$buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Buku</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="Foto">
      <img src="../assets/img/<?= $bk["img"]; ?>" alt="">
    </div>
    <div class="keterangan">
      <p><?= $bk["Judul_Buku"]; ?></p>
      <p><?= $bk["Penulis"]; ?></p>
      <p><?= $bk["Penerbit"]; ?></p>
      <p><?= $bk["Tebal_Buku"]; ?></p>
      <p><?= $bk["Tahun_Terbit"]; ?></p>
    </div>
    <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
  </div>
</body>

</html>