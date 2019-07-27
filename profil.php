<?php 
	include 'header.php';
?>
<div class="body">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<?php 
						include 'koneksi.php';
						$halaman = 6;
						$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
						$result = mysqli_query($koneksi, "select * from data_guru");
						$total = mysqlI_num_rows($result);
						$pages = ceil($total/$halaman);            
						$data = mysqli_query($koneksi, "select * from data_guru order by id_guru desc limit $mulai, $halaman");
						while($d = mysqli_fetch_array($data)){
						?>
						<div class="col-lg-4">
							<img src="images/<?php echo $d['gambar']; ?>" style="max-width=300px;max-height:200px"> 
						</div>
						<br>
						<div class="col-lg-7 jumbotron">
							<div>
								<p>Nama</p>
								<p style="font-weight:bold;"><?php echo $d['nama_guru']; ?></p>
							</div>
							<hr>
							<div>
								<p>NIK</p>
								<p style="font-weight:bold;"><?php echo $d['nik']; ?></p>
							</div>
							<hr>
							<div>
								<p>Jabatan</p>
								<p style="font-weight:bold;"><?php echo $d['Jabatan']; ?></p>
							</div>
							<hr>
							<div>
								<p>Alamat</p>
								<p style="font-weight:bold;"><?php echo $d['alamat']; ?></p>
							</div>
							<hr>
							<div>
								<p>Nomor Telepon/HP</p>
								<p style="font-weight:bold;"><?php echo $d['no_telp']; ?></p>
							</div>
						</div>
						<div class="col-lg-1"></div>
						<?php 
						}
					?>
						
					</div>
					<div class="center">
					<div class="pagination">
						<?php for ($i=1; $i<=$pages ; $i++){ ?>
						<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
					<?php include 'isisamping.php' ; ?>
			</div>

		</div>
	</div>
	

</div>
<?php 
	include 'footer.php';
?>