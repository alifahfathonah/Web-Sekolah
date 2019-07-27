<?php
  include "../../koneksi.php";
  $hari = $_POST['Hari'];
  $jam = $_POST['Jam'];
  $mapel = $_POST['Matapelajaran'];
  $guru = $_POST['Guru'];
  $kelas = $_POST['Kelas'];
  $conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
  $mysqli = "INSERT INTO jadwal ( hari, jam, matapelajaran, guru, kelas) VALUES ('$hari','$jam','$mapel','$guru','$kelas')";
  $result = mysqli_query($conn, $mysqli);
  if($result) {
      header('location:jadwalkelas.php?aksi=tambah&status=true');
  }
  mysqli_close($conn);
?>