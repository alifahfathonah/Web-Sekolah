<?php
include "../../koneksi.php";
$id = $_POST['id'];

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
        $mysqli = "update data_siswa set gambar='$pict' where idsiswa='$id' ";
        $insert = mysqli_query($conn, $mysqli);
        if($insert) {
        header('location:datadiri.php?aksi=tambah&status=true');
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