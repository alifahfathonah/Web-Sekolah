<?php
  include "../../koneksi.php";
  $jdl = $_POST['Judul'];
  $jenis = $_POST['Jenis'];
  $isi = $_POST['Isi'];
  $conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
  $mysqli = "INSERT INTO berita ( judul, jenis, isi) VALUES ('$jdl', '$jenis', '$isi')";
  $result = mysqli_query($conn, $mysqli);
  if($result) {
      header('location:berita.php?aksi=tambah&status=true');
  }
  mysqli_close($conn);
?>