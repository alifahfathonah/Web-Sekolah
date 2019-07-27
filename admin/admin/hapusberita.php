<?php 
include '../../koneksi.php';
$id = $_GET['id'];
$conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
$mysqli=("DELETE FROM berita WHERE id_berita='$id'")or die(mysql_error());
$result = mysqli_query($conn, $mysqli);
if($result) {
	header('location:berita.php?aksi=tambah&status=true');
}
mysqli_close($conn);
?>