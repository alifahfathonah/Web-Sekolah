<?php
  include "../koneksi.php";
  $name = $_POST['NAMA'];
  $nisn = $_POST['NISN'];
  $tmp = $_POST['TEMPAT_LAHIR'];
  $tgl = $_POST['TANGGAL_LAHIR'];
  $jenis = $_POST['JENIS_KELAMIN'];
  $alm = $_POST['ALAMAT'];
  $agm = $_POST['AGAMA'];
  $hp = $_POST['NO_HP'];
  $email = $_POST['EMAIL'];
  $hobby = $_POST['HOBBY'];
  $ayah = $_POST['AYAH'];
  $pen_ayah = $_POST['PENDIDIKAN_AYAH'];
  $pek_ayah = $_POST['PEKERJAAN_AYAH'];
  $alm_ayah = $_POST['ALAMAT_AYAH'];
  $ibu = $_POST['IBU'];
  $pen_ibu = $_POST['PENDIDIKAN_IBU'];
  $pek_ibu = $_POST['PEKERJAAN_IBU'];
  $alm_ibu = $_POST['ALAMAT_IBU'];

  $target="../images/";
  if (!empty($_FILES["filegbr"]["tmp_name"]))
  {
  $jenis_gambar=$_FILES['filegbr']['type'];
  if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
  {
  $target = $target . basename($_FILES['filegbr']['name']);
  $pict = ($_FILES['filegbr']['name']); 
  if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $target)) {
    $conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
    $mysqli = "INSERT INTO pendaftaran ( nama_siswa, nisn, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, agama, nomor_telp, email, hobby, ayah, pendidikan_ayah, 
    pekerjaan_ayah, alamat_ayah, ibu, pendidikan_ibu, pekerjaan_ibu, alamat_ibu, gambar) VALUES ('$name', '$nisn', '$tmp', '$tgl', '$jenis', '$alm', '$agm', '$hp',
    '$email', '$hobby','$ayah','$pen_ayah','$pek_ayah','$alm_ayah','$ibu','$pen_ibu','$pek_ibu','$alm_ibu', '$pict')";
    $insert = mysqli_query($conn, $mysqli);
    if($insert) {
      header('location:../kartu.php?id=id_pendaftaran');
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