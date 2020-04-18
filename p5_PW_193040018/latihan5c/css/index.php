<?php
require '../php/functions.php';
$buku = query("SElECT * FROM buku");

?>

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