<?php
include "../../koneksi.php";

  $mapel = $_POST['Mapel'];
  $guru = $_POST['Guru'];
  $user = $_POST['Username'];
  $kelas = $_POST['Kelas'];

  $target="../../materi/";
  if (!empty($_FILES["filegbr"]["tmp_name"]))
  {
  $jenis_gambar=$_FILES['filegbr']['type'];
  if($jenis_gambar=="application/pdf" || $jenis_gambar=="application/msword" || $jenis_gambar=="application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $jenis_gambar=="application/vnd.ms-excel" || $jenis_gambar=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $jenis_gambar=="application/vnd.openxmlformats-officedocument.presentationml.presentation")
  {
  $target = $target . basename($_FILES['filegbr']['name']);
  $file = ($_FILES['filegbr']['name']); 
  if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $target)) {
    $conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
    $mysqli = "INSERT INTO materi (matapelajaran, nama_guru, username, kelas, file) VALUES ('$mapel','$guru', '$user', '$kelas','$file')";
    $insert = mysqli_query($conn, $mysqli);
    if($insert) {
      header('location:uploadmateri.php?aksi=tambah&status=true');
    }
  } else {
  echo "Gambar gagal dikirim";
  }
  } else {
    echo "Jenis gambar yang anda kirim salah. Harus .pdf .doc .docx .xls .xlb .xlt .xlsx .pptx";
  }
  } else {
  echo "Anda belum memilih gambar";
  }
?>