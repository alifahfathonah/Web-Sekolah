<?php 
    include '../../koneksi.php';

    $id = $_POST['id'];
    $hari = $_POST['Hari'];
    $jam = $_POST['Jam'];
    $mapel = $_POST['Matapelajaran'];
    $guru = $_POST['Guru'];
    $kelas = $_POST['Kelas'];
    $conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
    $mysqli = "update jadwal set hari='$hari', jam='$jam',matapelajaran='$mapel',guru='$guru',kelas='$kelas' where id_jadwal='$id'";
    $result = mysqli_query($conn, $mysqli);
    if($result) {
        header('location:jadwalkelas.php?aksi=tambah&status=true');
    }
    mysqli_close($conn);

?>