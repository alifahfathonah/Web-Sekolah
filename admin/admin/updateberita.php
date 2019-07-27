<?php 
    include '../../koneksi.php';

    $id = $_POST['id'];
    $jdl = $_POST['Judul'];
    $jenis = $_POST['Jenis'];
    $isi = $_POST['Isi'];
    $conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
    $mysqli = "update berita set judul='$jdl', jenis='$jenis', isi='$isi' where id_berita='$id' ";
    $result = mysqli_query($conn, $mysqli);
    if($result) {
        header('location:berita.php?aksi=tambah&status=true');
    }
    mysqli_close($conn);

?>