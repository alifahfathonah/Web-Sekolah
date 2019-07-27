<?php
	$dir = "../../materi/";
	if(!file_exists($dir.$_GET['file'])){
		echo "Gagal download! File sudah tidak ada di folder";
		exit();
	} else {
		header("Content-Type:materi.php");
		header("Content-Disposition: attachment; filename=\"".$_GET['file']."\"");
		$fp = fopen($dir.$_GET['file'], "r");
		$d = fread($fp, filesize($dir.$_GET['file']));
		fclose($dir);
		print($d);
	}
?>