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
    <?php foreach ($buku as $bk) : ?>
      <p class="Penulis">
        <a href="php/detail.php?id=<?= $bk['id'] ?>">
          <?= $bk["Penulis"] ?>
        </a>
      </p>
    <?php endforeach; ?>
  </div>
</body>

</html>