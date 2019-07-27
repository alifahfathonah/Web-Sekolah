<?php include 'header.php';
?>

<div class="container mt-3">
<div class="jumbotron">
  <h2>Data Guru</h2>
  <hr>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#Data_Guru">Data Guru</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Input">Input</a>
    </li>
  </ul>

  <div class="tab-content">
    <div id="Data_Guru" class="container tab-pane active"><br>
		<div class="container">
			<table class="table table-dark table-hover table-bordered table-responsive" style="text-align:center">
				<tr style="background-color:#14bdee;">
					<th>NO</th>
					<th>Nama</th>
					<th>NIK</th>
					<th>Alamat</th>
					<th>Tanggal Lahir</th>
					<th>Tempat Lahir</th>
					<th>Jabatan</th>
					<th>Nomor Telepon</th>
					<th>Pendidikan Terakhir</th>
					<th>Username</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
				<?php 
				include '../../koneksi.php';
				$no = 1;
				$halaman = 10;
				$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$result = mysqli_query($koneksi, "select * from data_guru");
				$total = mysqlI_num_rows($result);
				$pages = ceil($total/$halaman);            
				$data = mysqli_query($koneksi, "select * from data_guru order by id_guru desc limit $mulai, $halaman");
        while($d = mysqli_fetch_array($data)){
        ?>
					<tr style="background-color:#1e2434">
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama_guru']; ?></td>
						<td><?php echo $d['nik']; ?></td>
						<td><?php echo $d['alamat']; ?></td>
						<td><?php echo $d['tanggal_lahir']; ?></td>
						<td><?php echo $d['tempat_lahir']; ?></td>
						<td><?php echo $d['Jabatan']; ?></td>
						<td><?php echo $d['no_telp']; ?></td>
						<td><?php echo $d['pendidikan_terakhir']; ?></td>
						<td><?php echo $d['username']; ?></td>
						<td><?php echo $d['password']; ?></td>
						<td>
            <a style="color:#fff" class="fa fa-trash-o" href="hapusguru.php?id=<?php echo $d['id_guru']; ?>">Hapus</a>
            </td>
					</tr>
					<?php 
				}
				?>
			</table>
			<hr>
      <div class="text-center">
				<div class="pagination">
					<?php for ($i=1; $i<=$pages ; $i++){ ?>
					<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
					<?php } ?>
				</div>
      </div>
      <hr>
		</div>
	</div>

    <div id="Input" class="container tab-pane fade"><br>
		<div class="container">
			<form method="post" action="prosesdataguru.php" enctype="multipart/form-data" name="form1" id="form1">
				<div class="form-group row">
						<label class="col-sm-2">Nama Guru</label>
				<div class="col-sm-10">
             <input type="text" class="form-control" placeholder="Nama Guru" name="Name">
        </div>
        </div>

				<div class="form-group row">
						<label class="col-sm-2">NIK</label>
				<div class="col-sm-10">
             <input type="number" class="form-control" placeholder="NIK" name="NIK">
        </div>
        </div>

				<div class="form-group row">
						<label class="col-sm-2">Alamat</label>
				<div class="col-sm-10">
             <input type="text" class="form-control" placeholder="Alamat" name="Alamat">
        </div>
        </div>

				<div class="form-group row">
						<label class="col-sm-2">Tanggal Lahir</label>
				<div class="col-sm-10">
             <input type="date" class="form-control" placeholder="2001-01-31" name="Tanggal_Lahir">
        </div>
        </div>

				<div class="form-group row">
						<label class="col-sm-2">Tempat Lahir</label>
				<div class="col-sm-10">
             <input type="text" class="form-control" placeholder="Tempat Lahir" name="Tempat_Lahir">
        </div>
        </div>

				<div class="form-group row">
						<label class="col-sm-2">Jabatan</label>
				<div class="col-sm-10">
             <input type="text" class="form-control" placeholder="Jabatan" name="Jabatan">
        </div>
        </div>

				<div class="form-group row">
						<label class="col-sm-2">Nomor Telepon</label>
				<div class="col-sm-10">
             <input type="number" class="form-control" placeholder="Nomor Telepon" name="Nomor_telp">
        </div>
        </div>

				<div class="form-group row">
						<label class="col-sm-2">Pendidikan Terakhir</label>
				<div class="col-sm-10">
             <input type="text" class="form-control" placeholder="Pendidikan Terakhir" name="Pendt">
        </div>
        </div>

				<div class="form-group row">
						<label class="col-sm-2">Username</label>
				<div class="col-sm-10">
             <input type="text" class="form-control" placeholder="Username" name="Username">
        </div>
        </div>

				<div class="form-group row">
						<label class="col-sm-2">Passowrd</label>
				<div class="col-sm-10">
             <input type="password" class="form-control" placeholder="Password" name="Password">
        </div>
        </div>

				<div class="form-group row">
							<label class="col-sm-2">Foto</label>
					<div class="col-sm-10">
							<input type="file" class="form-control" name="filegbr" id='Filegambar'>
							<p style="color:red">* Ukuran Gambar Harus 4*3 cm dan Format gambar harus .jpg .gif .png dan .jpeg</p>
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
