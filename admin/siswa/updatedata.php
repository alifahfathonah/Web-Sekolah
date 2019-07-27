<?php
include "../../koneksi.php";
    $id = $_POST['id'];
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
    $username = $_POST['USERNAME'];
    $pass = $_POST['PASSWORD'];

    $conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
    $mysqli = "update data_siswa set nama_siswa='$name', nisn='$nisn', tempat_lahir='$tmp', tanggal_lahir='$tgl', jenis_kelamin='$jenis', alamat='$alm', 
    agama='$agm', nomor_telp='$hp', email='$email', hobby='$hobby', ayah='$ayah', pendidikan_ayah='$pen_ayah', pekerjaan_ayah='$pek_ayah', alamat_ayah='$alm_ayah',
    ibu='$ibu', pendidikan_ibu='$pen_ibu', pekerjaan_ibu='$pek_ibu', alamat_ibu='$alm_ibu', username='$username', password='$pass' where idsiswa='$id' ";
    $result = mysqli_query($conn, $mysqli);
    if($result) {
        header('location:datadiri.php?aksi=tambah&status=true');
    }
    mysqli_close($conn);
?>