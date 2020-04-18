<?php
if (!isset($_GET['id'])) {
  header("location:../css/index.php");
  exit;
}
require '../php/functions.php';

$id = $_GET['id'];

$buku = query("SELECT * FROM buku WHERE id=$id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detail</title>
</head>

<body>
  <div class="container">
    <div class="gambar">
      <img src="../assets/img/<?= $bk["Foto"]; ?>" alt="">
    </div>
    <div class="keterangan">
      <p><?= $bk["Foto"]; ?></p>
      <p><?= $bk["Judul_Buku"]; ?></p>
      <p><?= $bk["Penulis"]; ?></p>
      <p><?= $bk["Penerbit"]; ?></p>
      <p><?= $bk["Tebal_Buku"]; ?></p>
      <p><?= $bk["Tahun_Terbit"]; ?></p>
    </div>

    <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
</body>

</html>