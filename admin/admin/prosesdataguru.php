<?php
include "../../koneksi.php";

  $name = $_POST['Name'];
  $nik = $_POST['NIK'];
  $alm = $_POST['Alamat'];
  $tgl = $_POST['Tanggal_Lahir'];
  $tmp = $_POST['Tempat_Lahir'];
  $jbt = $_POST['Jabatan'];
  $tlp = $_POST['Nomor_telp'];
  $pendt = $_POST['Pendt'];
  $username = $_POST['Username'];
  $pass = md5($_POST['Password']);

  $target="../../images/";
  if (!empty($_FILES["filegbr"]["tmp_name"]))
  {
  $jenis_gambar=$_FILES['filegbr']['type'];
  if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
  {
  $target = $target . basename($_FILES['filegbr']['name']);
  $pict = ($_FILES['filegbr']['name']); 
  if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $target)) {
    $conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
    $mysqli = "INSERT INTO data_guru (nama_guru, nik, alamat, tanggal_lahir, tempat_lahir, Jabatan, no_telp, pendidikan_terakhir, username, password, gambar) VALUES ('$name', '$nik', '$alm', '$tgl', '$tmp', '$jbt', '$tlp', '$pendt', '$username', '$pass', '$pict')";
    $insert = mysqli_query($conn, $mysqli);
    if($insert) {
      header('location:dataguru.php?aksi=tambah&status=true');
    }
  } else {
  echo "Gambar gagal dikirim";
  }
  } else {
  echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
  }
  } else {
  echo "Anda belum memilih gambar";
  }
?>