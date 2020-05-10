<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
      alert('Data berhasil diubah!');
      document.location.href='admin.php';
     </script>";
  } else {
    echo "<script>
    alert('Data Gagal diubah!');
    document.location.href='admin.php';
   </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST"></form>
  <ul>
    <li>
      <label for="Foto">Foto :</label><br><br>
      <input type="text" name="Foto" id="Foto" id="Foto" required>
    </li>
    <li>
      <label for="Judul_Buku">Judul_Buku :</label><br><br>
      <input type="text" name="Judul_Buku" id="Judul_Buku" id="Judul_Buku" required>
    </li>
    <li>
      <label for="Penulis">Penulis :</label><br><br>
      <input type="text" name="Penulis" id="Penulis" id="Penulis" required>
    </li>
    <li>
      <label for="Penerbit">Penerbit :</label><br><br>
      <input type="text" name="Penerbit" id="Penerbit" id="Penerbit" required>
    </li>
    <li>
      <label for="Tebal_Buku">Tebal_Buku :</label><br><br>
      <input type="text" name="Tebal_Buku" id="Tebal_Buku" id="Tebal_Buku" required>
    </li>
    <li>
      <label for="Tahun_Terbit">Tahun_Terbit :</label><br><br>
      <input type="text" name="Tahun_Terbit" id="Tahun_Terbit" id="Tahun_Terbit" required>
    </li>
    <button type="submit" name="tambah">Ubah Data!</button>
    <button type="submit">
      <a href="admin.php" style="text-decoration: none;color:black;">Kembali</a>
    </button>
  </ul>
</body>

</html>