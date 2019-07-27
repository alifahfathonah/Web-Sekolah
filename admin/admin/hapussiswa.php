<?php 
include '../../koneksi.php';
$id = $_GET['id'];
$conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
$mysqli=("DELETE FROM data_siswa WHERE idsiswa='$id'")or die(mysql_error());
$result = mysqli_query($conn, $mysqli);
if($result) {
	header('location:datasiswa.php?aksi=tambah&status=true');
}
mysqli_close($conn);
?>