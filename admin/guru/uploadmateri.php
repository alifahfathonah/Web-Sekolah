<?php include 'header.php';
?>
<div class="container mt-3">
  <h2>Materi</h2>
  <hr>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#data">Daftar Materi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#input">Input Materi</a>
    </li>
  </ul>

  <div class="tab-content">
    <div id="data" class="container tab-pane active"><br>
		<div class="container">
            <table class="table table-dark table-hover table-bordered table-responsive-sm" style="text-align:center">
                <tr style="background-color:#14bdee;">
                    <th>NO</th>
                    <th>Mata Pelajaran</th>
                    <th>Nama Guru</th>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
                <?php 
                include '../../koneksi.php';
                $no = 1;
                $username=$_SESSION['login'];
                $halaman = 10;
				$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$result = mysqli_query($koneksi, "select * from materi ");
				$total = mysqlI_num_rows($result);
				$pages = ceil($total/$halaman);            
				$data = mysqli_query($koneksi, "select * from materi where username='$username' order by kelas desc limit $mulai, $halaman");
                while($d = mysqli_fetch_array($data)){
                ?>
                <tr style="background-color:#1e2434">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['matapelajaran']; ?></td>
                    <td><?php echo $d['nama_guru']; ?></td>
                    <td><?php echo $d['kelas']; ?></td>
                    <td><?php echo $d['tanggal']; ?></td>
                    <td><?php echo $d['file'];?></td>
                    <td>
                        <a style="color:#fff" class="fa fa-trash-o" href="hapusmateri.php?id=<?php echo $d['id_materi']; ?>">Hapus</a>
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

    <div id="input" class="container tab-pane fade"><br>
		<div class="container">
            <?php
            include '../../koneksi.php';
            $username =$_SESSION['login'];
            $data = mysqli_query($koneksi,"select * from data_guru where username='$username'");
            while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="prosesmateri.php" enctype="multipart/form-data" name="form1" id="form1">
                <div class="form-group row">
                    <label class="col-sm-2">Mata Pelajaran</label>
                <div class="col-sm-10">
                    <select name="Mapel">
                        <option>--Pilih Opsi Berikut--</option>
                        <option>Matematika</option>
                        <option>Bahasa Indonesia</option>
                        <option>Biologi</option>
                        <option>Kimia</option>
                        <option>Fisika</option>
                        <option>Agama</option>
                        <option>Penjas</option>
                        <option>Sejarah</option>
                        <option>Ekonomi</option>
                        <option>Geografi</option>
                        <option>PKN</option>
                        <option>Seni Budaya</option>
                    </select>
                </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2">Nama Guru</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Guru" readonly value="<?php echo $d['nama_guru']; ?>">
                    <input type="hidden" class="form-control" name="Username" readonly value="<?php echo $d['username']; ?>">
                </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2">Kelas</label>
                <div class="col-lg-10">
                    <select name="Kelas">
                        <option>--Pilih Opsi Berikut--</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                </div>

                <div class="form-group row">
					<label class="col-sm-2">File</label>
				<div class="col-sm-10">
                    <input type="file" class="form-control" name="filegbr" id='Filegambar'>
                    <p style="color:red">* Ukuran Gambar Harus 4*3 cm dan Format gambar harus .pdf .doc .docx .xls .xlb .xlt .xlsx .pptx</p>
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
  </div>
</div>

<?php include 'footer.php';
?>
