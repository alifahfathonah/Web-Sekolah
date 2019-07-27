<?php include 'header.php';
?>
<div class="container mt-3">
<div class="jumbotron">
	<?php
	include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from jadwal where id_jadwal='$id'");
	while($d = mysqli_fetch_array($data)){
	?>
		<div class="container">
			<form method="post" action="updatejadwal.php">
				<div class="form-group row">
					<label class="col-sm-2">Hari</label>
				<div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $d['id_jadwal']; ?>">
					<input type="date" class="form-control" value="<?php echo $d['hari']; ?>" name="Hari">
				</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2">Jam</label>
				<div class="col-sm-10">
					<input type="clock" class="form-control" value="<?php echo $d['jam']; ?>" name="Jam">
				</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2">Mata Pelajaran</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" value="<?php echo $d['matapelajaran']; ?>" name="Matapelajaran">
				</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2">Guru</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" value="<?php echo $d['guru']; ?>" name="Guru">
				</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2">Kelas</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" value="<?php echo $d['kelas']; ?>" name="Kelas">
				</div>
				</div>
				
				<div class="form-group row">
					<div class="col-lg-2"></div>
					<div class="col-lg-10">
						<input type="submit" value="Submit">
					</div>
				</div>
			</form>
            <?php 
            }
            ?>
	  </div>
  </div>

<?php 
	include 'footer.php';
?>