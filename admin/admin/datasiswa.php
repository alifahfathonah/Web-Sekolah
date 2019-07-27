<?php include 'header.php';
?>

<div class="container mt-3">
<div class="jumbotron">
  <h2>Data Siswa</h2>
  <hr>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#Data_siswa">Data Siswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Input">Input</a>
    </li>
  </ul>

  <div class="tab-content">
    <div id="Data_siswa" class="container tab-pane active"><br>
		<div class="container">
			<table class="table table-dark table-hover table-bordered table-responsive" style="text-align:center">
				<tr style="background-color:#14bdee;">
					<th>NO</th>
					<th>Nama</th>
					<th>NISN</th>
					<th>Tanggal Lahir</th>
					<th>Tempat Lahir</th>
					<th>Tahun Masuk</th>
					<th>Jenis Kelamin</th>
					<th>Hobby</th>
					<th>Alamat</th>
					<th>Agama</th>
					<th>Nomor Telepon</th>
					<th>Email</th>
					<th>Nama Ayah</th>
					<th>Pekerjaan Ayah</th>
					<th>Pendidikan Ayah</th>
					<th>Alamat Ayah</th>
					<th>Nama Ibu</th>
					<th>Pekerjaan Ibu</th>
					<th>Pendidikan Ibu</th>
					<th>Alamat Ibu</th>
					<th>Username</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
				<?php 
				include '../../koneksi.php';
				$no = 1;
				$halaman = 20;
				$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$result = mysqli_query($koneksi, "select * from data_siswa");
				$total = mysqlI_num_rows($result);
				$pages = ceil($total/$halaman);            
				$data = mysqli_query($koneksi, "select * from data_siswa order by idsiswa desc limit $mulai, $halaman");
				while($d = mysqli_fetch_array($data)){
				?>
					<tr style="background-color:#1e2434">
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama_siswa']; ?></td>
						<td><?php echo $d['nisn']; ?></td>
						<td><?php echo $d['tanggal_lahir']; ?></td>
						<td><?php echo $d['tempat_lahir']; ?></td>
						<td><?php echo $d['tahun_masuk']; ?></td>
						<td><?php echo $d['jenis_kelamin']; ?></td>
						<td><?php echo $d['hobby']; ?></td>
						<td><?php echo $d['alamat']; ?></td>
						<td><?php echo $d['agama']; ?></td>
						<td><?php echo $d['nomor_telp']; ?></td>
						<td><?php echo $d['email']; ?></td>
						<td><?php echo $d['ayah']; ?></td>
						<td><?php echo $d['pekerjaan_ayah']; ?></td>
						<td><?php echo $d['pendidikan_ayah']; ?></td>
						<td><?php echo $d['alamat_ayah']; ?></td>
						<td><?php echo $d['ibu']; ?></td>
						<td><?php echo $d['pekerjaan_ibu']; ?></td>
						<td><?php echo $d['pendidikan_ibu']; ?></td>
						<td><?php echo $d['alamat_ibu']; ?></td>
						<td><?php echo $d['username']; ?></td>
						<td><?php echo $d['password'];  ?></td>
						<td>
						<a style="color:#fff" class="fa fa-trash-o" href="hapussiswa.php?id=<?php echo $d['idsiswa']; ?>">Hapus</a>
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
			<form method="post" action="prosessiswa.php" enctype="multipart/form-data" name="form1" id="form1">
                <div class="row">
                    <div class="col-lg-6 box">
                        <div>
                            <h3>Data Pribadi</h3>
                    	</div>
						<hr>
						<div>
							<p>Nama</p>
							<input type="text" class="form-control" name="NAMA" >
						</div>
						<hr>
						<div>
							<p>NISN</p>
							<input type="number" class="form-control" name="NISN" >
						</div>
						<hr>
						<div>
							<p>Tempat Lahir</p>
							<input type="text" class="form-control" name="TEMPAT_LAHIR">
						</div>
						<hr>
						<div>
							<p>Tanggal Lahir</p>
							<input type="date" class="form-control" name="TANGGAL_LAHIR" >
						</div>
						<hr>
						<div>
							<p>Jenis Kelamin</p>
							<input type="text" class="form-control" name="JENIS_KELAMIN" >
						</div>
					</div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 box">
						<div>
							<h3>Data Pribadi</h3>
						</div>
						<hr>
						<div>
							<p>Alamat</p>
							<input type="text" class="form-control" name="ALAMAT" >
						</div>
						<hr>
						<div>
							<p>Agama</p>
							<input type="text" class="form-control" name="AGAMA">
                    	</div>
						<hr>
						<div>
							<p>Nomor Telepon/HP</p>
							<input type="number" class="form-control" name="NO_HP">
						</div>
						<hr>
						<div>
							<p>Email</p>
							<input type="text" class="form-control" name="EMAIL">
						</div>
						<hr>
						<div>
							<p>Hobby</p>
							<input type="text" class="form-control" name="HOBBY" >
                    	</div>
               		</div>
            	</div>
                <br>
                <div class="row">
                    <div class="col-lg-6 box">
                        <div>
                            <h3>Data Ayah</h3>
                        </div>
                        <hr>
                        <div>
                            <p>Nama Ayah</p>
                            <input type="text" class="form-control" name="AYAH" >
                        </div>
                        <hr>
                        <div>
                            <p>Pendidikan Ayah</p>
                            <input type="text" class="form-control" name="PENDIDIKAN_AYAH" >
                        </div>
                        <hr>
                        <div>
                            <p>Pekerjaan Ayah</p>
                            <input type="text" class="form-control" name="PEKERJAAN_AYAH" >
                        </div>
                        <hr>
                        <div>
                            <p>Alamat Ayah</p>
                            <input type="text" class="form-control" name="ALAMAT_AYAH" >
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 box">
                        <div>
                            <h3>Data Ibu</h3>
                        </div>
                        <hr>
                        <div>
                        	<p>Nama Ibu</p>
                            <input type="text" class="form-control" name="IBU">
                        </div>
                        <hr>
                        <div>
                            <p>Pendidikan Ibu</p>
                            <input type="text" class="form-control" name="PENDIDIKAN_IBU" >
                        </div>
                        <hr>
                        <div>
                            <p>Pekerjaan Ibu</p>
                            <input type="text" class="form-control" name="PEKERJAAN_IBU" >
                        </div>
                        <hr>
                        <div>
                            <p>Alamat Ibu</p>
                            <input type="text" class="form-control" name="ALAMAT_IBU">
                        </div>
                        <hr>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 box">
                        <div>
                            <h3>Username & Password</h3>
                        </div>
                        <hr>
                        <div>
                            <p>Username</p>
                            <input type="text" class="form-control" name="USERNAME">
                        </div>
                        <hr>
                        <div>
                            <p>Password</p>
                            <input type="password" class="form-control" name="PASSWORD">
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 box">
                        <div>
                            <h3>Tahun Masuk</h3>
                        </div>
                        <hr>
						<div>
                            <p>Tahun Masuk</p>
                            <input type="number" class="form-control" name="TAHUN_MASUK">
                        </div>
						<hr>
                        <div>
							<input type="submit" value="Submit">
                        </div>
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
