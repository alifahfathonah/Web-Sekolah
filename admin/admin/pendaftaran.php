<?php include 'header.php';
?>

<h2 class="text-center">Data Siswa</h2>
  <hr>
		<div class="container">
			<table class="table table-dark table-hover table-bordered table-responsive" style="text-align:center">
				<tr style="background-color:#14bdee;">
					<th>NO</th>
					<th>Nama</th>
					<th>NISN</th>
					<th>Tanggal Lahir</th>
					<th>Tempat Lahir</th>
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
					<th>Action</th>
				</tr>
				<?php 
				include '../../koneksi.php';
				$no = 1;
				$halaman = 20;
				$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$result = mysqli_query($koneksi, "select * from pendaftaran");
				$total = mysqlI_num_rows($result);
				$pages = ceil($total/$halaman);            
				$data = mysqli_query($koneksi, "select * from pendaftaran order by id_pendaftaran desc limit $mulai, $halaman");
				while($d = mysqli_fetch_array($data)){
				?>
					<tr style="background-color:#1e2434">
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama_siswa']; ?></td>
						<td><?php echo $d['nisn']; ?></td>
						<td><?php echo $d['tanggal_lahir']; ?></td>
						<td><?php echo $d['tempat_lahir']; ?></td>
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
						<td>
						<a style="color:#fff" class="fa fa-trash-o" href="hapuspendaftar.php?id=<?php echo $d['id_pendaftaran']; ?>">Hapus</a>
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

<?php include 'footer.php';
?>
