<?php include 'header.php';
?>
	<div class="container mt-3">
        <div class="row">
        <?php 
            include '../../koneksi.php';
            $username=$_SESSION['login'];
            $data = mysqli_query($koneksi,"select * from data_guru where username='$username' ");
            while($d = mysqli_fetch_array($data)){
        ?>
            <div class="col-lg-3">
            <img src="../../images/<?php echo $d['gambar']; ?>" style="max-width=300px;max-height:200px">
            </div>
            <div class="col-lg-3 ">
				<p>Nama</p>
				<hr>
				<p>NIK</p>
				<hr>
				<p>Alamat</p>
				<hr>
				<p>Tanggal Lahir</p>
				<hr>
				<p>Tempat Lahir</p>
				<hr>
				<p>Jabatan</th>
				<hr>
				<p>Nomor Telepon</p>
				<hr>
				<p>Pendidikan terakhir</p>
			</div>
            <div class="col-lg-3">
                <p><?php echo $d['nama_guru']; ?></p>
				<hr>
				<p><?php echo $d['nik']; ?></p>
				<hr>
				<p><?php echo $d['alamat']; ?></p>
				<hr>
				<p><?php echo $d['tanggal_lahir']; ?></p>
				<hr>
				<p><?php echo $d['tempat_lahir']; ?></p>
				<hr>
				<p><?php echo $d['Jabatan']; ?></p>
				<hr>
				<p><?php echo $d['no_telp']; ?></p>
				<hr>
				<p><?php echo $d['pendidikan_terakhir']; ?></p>
                <hr>
                <p>
                    <button class="btn btn-primary">
                        <a class="fa fa-pencil-square-o" href="editdata.php?id=<?php echo $d['id_guru']; ?>">Edit Data Diri</a>
                    </button>    
                </p>
            </div>
            <div class="col-lg-3"></div>
            <?php 
            }
        ?>
        </div>
    </div>
<?php include 'footer.php';
?>
