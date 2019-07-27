<?php include 'header.php';
?>
<div class="container mt-3">
<div class="jumbotron">
  <h2>Jadwal Kelas</h2>
  <hr>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#Data_siswa">Daftar Jadwal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Input">Input Jadwal</a>
    </li>
  </ul>

  <div class="tab-content">
    <div id="Data_siswa" class="container tab-pane active"><br>
		<div class="container">
			<table class="table table-dark table-hover table-bordered table-responsive-sm" style="text-align:center">
				<tr style="background-color:#14bdee;">
					<th>NO</th>
					<th>Hari</th>
					<th>Jam</th>
					<th>Mata Pelajaran</th>
					<th>Guru</th>
					<th>Kelas</th>
                    <th>Action</th>
				</tr>
				<?php 
				include '../../koneksi.php';
				$no = 1;
				$halaman = 12;
				$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$result = mysqli_query($koneksi, "select * from jadwal");
				$total = mysqlI_num_rows($result);
				$pages = ceil($total/$halaman);            
				$data = mysqli_query($koneksi, "select * from jadwal order by kelas desc limit $mulai, $halaman");
				while($d = mysqli_fetch_array($data)){
				?>
					<tr style="background-color:#1e2434">
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['hari']; ?></td>
						<td><?php echo $d['jam']; ?></td>
						<td><?php echo $d['matapelajaran']; ?></td>
						<td><?php echo $d['guru']; ?></td>
						<td><?php echo $d['kelas']; ?></td>
						<td>
						<a style="color:#fff" class="fa fa-trash-o" href="editjadwal.php?id=<?php echo $d['id_jadwal']; ?>">Edit</a>
						</td>
					</tr>
					<?php 
				}
				?>
			</table>
			<hr>
			<div class="center">
			<div class="pagination">
						<?php for ($i=1; $i<=$pages ; $i++){ ?>
				<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
				<?php } ?>
			</div>
			</div>
			<hr>
			</div>
		</div>

    <div id="Input" class="container tab-pane fade "><br>
		<div class="container">
			<form method="post" action="prosesjadwal.php" enctype="multipart/form-data" name="form1" id="form1">
				<div class="form-group row">
					<label class="col-sm-2">Hari</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" placeholder="2001-01-31" name="Hari">
				</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2">Jam</label>
				<div class="col-sm-10">
					<input type="clock" class="form-control" placeholder="Jam" name="Jam">
				</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2">Mata Pelajaran</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Mata Pelajaran" name="Matapelajaran">
				</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2">Guru</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Nama Guru" name="Guru">
				</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2">Kelas</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Kelas" name="Kelas">
				</div>
				</div>
				
				<div class="form-group row">
					<div class="col-lg-2"></div>
					<div class="col-lg-10">
						<input type="submit" value="Submit">
					</div>
				</div>
			</form>
		</div>
	  </div>
  </div>
</div>
</div>

<?php include 'footer.php';
?>
