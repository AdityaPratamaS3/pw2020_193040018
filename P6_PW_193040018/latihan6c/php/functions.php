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
