<?php
session_start();
require 'functions.php';
//melakukan pengecekan apakah user sudah melakukan login jika sudah redirect kek halaman admin
if (isset($_SESSION['username'])) {
  header("location:admin.php");
  exit;
}
//login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username='$username'");
  //mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    if ($password == $row['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];
    }
    if ($row['id'] == $_SESSION['id']) {
      header("Location:admin.php");
      die;
    }
    header("Location:../index/index.php");
    die;
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <form action="" method="POST">
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style:italic;">Username atau Password salah</p>
    <?php endif; ?>
    <table>
      <tr>
        <td><label for="username">Username</label></td>
        <td>:</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password"></td>
      </tr>
    </table>
    <div class="remember">
      <input type="checkbox" name="remember">
      <label for="remember">Remember me</label>
    </div>
    <button type="submit" name="submit">Login</button>
  </form>
</body>

</html>