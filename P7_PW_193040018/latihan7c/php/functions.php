<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040018") or die("Database salah!");

  return $conn;
}
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();
  $Foto = htmlspecialchars($data['Foto']);
  $Judul_Buku = htmlspecialchars($data['Judul_Buku']);
  $Penulis = htmlspecialchars($data['Penulis']);
  $Penerbit = htmlspecialchars($data['Penerbit']);
  $Tebal_Buku = htmlspecialchars($data['Tebal_Buku']);
  $Tahun_Terbit = htmlspecialchars($data['Tahun_Terbit']);

  $query = "INSERT INTO buku
              VALUES
              ('','$Foto','$Judul_Buku','$Penulis','$Penerbit','$Tebal_Buku','$Tahun_Terbit')";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id=$id");

  return mysqli_affected_rows($conn);
}


function ubah($data)
{
  $conn = koneksi();
  $Foto = htmlspecialchars($data['Foto']);
  $Judul_Buku = htmlspecialchars($data['Judul_Buku']);
  $Penulis = htmlspecialchars($data['Penulis']);
  $Penerbit = htmlspecialchars($data['Penerbit']);
  $Tebal_Buku = htmlspecialchars($data['Tebal_Buku']);
  $Tahun_Terbit = htmlspecialchars($data['Tahun_Terbit']);

  $query = "UPDATE buku
              SET
            FOTO='$Foto',
            Judul_Buku='$Judul_Buku',
            Penulis='$Penulis',
            Penerbit='$Penerbit',
            Tebal_Buku='$Tebal_Buku',
            Tahun_Terbit='$Tahun_Terbit'
            WHERE id = '$id'
            ";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

// //functions cari
// require 'functions.php';
// if (isset($_GET['cari'])) {
//   $keyword = $_GET['keyword'];
//   $buku = query("SELECT * FROM buku WHERE
//           Foto LIKE '%keyword%' OR
//           Judul_Buku LIKE '%keyword%' OR
//           Penulis LIKE '%keyword%' OR
//           Penerbit LIKE '%keyword%' OR
//           Tebal_Buku LIKE '%keyword%' OR
//           Tahun_Terbit LIKE '%keyword%' OR");
// } else {
//   $buku = query("SELECT * FROM buku");
// }

function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  //cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah digunakan');
    </script>";
    return false;
  }
  //enkripsi password
  $password  = password_hash($password, PASSWORD_DEFAULT);
  //tambah user baru
  $query_tambah = "INSERT INTO user VALUES('','$username','$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
