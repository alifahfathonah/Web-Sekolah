<?php 
include '../../koneksi.php';
$id = $_GET['id'];
$conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
$mysqli=("DELETE FROM data_guru WHERE id_guru='$id'")or die(mysql_error());
$result = mysqli_query($conn, $mysqli);
if($result) {
	header('location:dataguru.php?aksi=tambah&status=true');
}
mysqli_close($conn);
?>