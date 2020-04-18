<?php
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
mysqli_select_db($conn, "pw_193040018.") or die("Database salah!");
$result = mysqli_query($conn, "Select * FROM buku");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tugas2</title>
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
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="../assets/img/<?= $row["Foto"]; ?>" width="80"></td>
          <td> <?= $row["Judul_Buku"] ?> </td>
          <td><?= $row["Penulis"] ?></td>
          <td><?= $row["Penerbit"] ?></td>
          <td><?= $row["Tebal_Buku"] ?></td>
          <td><?= $row["Tahun_Terbit"] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endwhile; ?>

    </table>
  </div>
</body>

</html>