<?php include 'header.php';
?>
<div class="container mt-3">	
  <p style="text-align:center;font-size:20px;">..::Jadwal Pelajaran::..</p>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#Data1">Kelas 10</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Data2">Kelas 11</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Data3">Kelas 12</a>
    </li>
  </ul>

  <div class="tab-content">
  	<div id="Data1" class="container tab-pane fade "><br>
		<div class="container">
		<table class="table table-responsive-sm">
			<tr>
				<th>No</th>
				<th>Hari</th>
				<th>Jam</th>
				<th>Mata Pelajaran</th>
				<th>Nama Guru</th>
			</tr>
			<?php 
			include '../../koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from jadwal where kelas='10'");
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $d['hari']; ?></td>
				<td><?php echo $d['jam']; ?></td>
				<td><?php echo $d['matapelajaran']; ?></td>
				<td><?php echo $d['guru']; ?></td>
			</tr>
			<?php
			}
		?>
		</table>
		</div>
	</div>

	<div id="Data2" class="container tab-pane fade "><br>
		<div class="container">
		<table class="table table-responsive-sm">
			<tr>
				<th>No</th>
				<th>Hari</th>
				<th>Jam</th>
				<th>Mata Pelajaran</th>
				<th>Nama Guru</th>
			</tr>
			<?php 
			include '../../koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from jadwal where kelas='11'");
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $d['hari']; ?></td>
				<td><?php echo $d['jam']; ?></td>
				<td><?php echo $d['matapelajaran']; ?></td>
				<td><?php echo $d['guru']; ?></td>
			</tr>
			<?php
			}
		?>
		</table>
		</div>
	</div>
    
	<div id="Data3" class="container tab-pane fade "><br>
		<div class="container">
		<table class="table table-responsive-sm">
			<tr>
				<th>No</th>
				<th>Hari</th>
				<th>Jam</th>
				<th>Mata Pelajaran</th>
				<th>Nama Guru</th>
			</tr>
			<?php 
			include '../../koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from jadwal where kelas='12'");
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $d['hari']; ?></td>
				<td><?php echo $d['jam']; ?></td>
				<td><?php echo $d['matapelajaran']; ?></td>
				<td><?php echo $d['guru']; ?></td>
			</tr>
			<?php
			}
		?>
		</table>
		</div>
	</div>

  </div>
</div>

<?php include 'footer.php';
?>
