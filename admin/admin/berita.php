<?php include 'header.php';
?>

<div class="container mt-3">
<div class="jumbotron">
  <h2>Berita</h2>
  <hr>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#data">Daftar Berita</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#input">Input Berita</a>
    </li>
  </ul>

  <div class="tab-content">
    <div id="data" class="container tab-pane active"><br>
		<div class="container">
            <table class="table table-dark table-hover table-bordered table-responsive-sm" style="text-align:center">
                <tr style="background-color:#14bdee;">
                    <th>NO</th>
                    <th>Judul</th>
                    <th>Jenis</th>
                    <th>Tanggal</th>
                    <th>Isi</th>
                    <th>Action</th>
                </tr>
                <?php 
                include '../../koneksi.php';
                $no = 1;
                $halaman = 10;
				$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$result = mysqli_query($koneksi, "select * from berita");
				$total = mysqlI_num_rows($result);
				$pages = ceil($total/$halaman);            
				$data = mysqli_query($koneksi, "select * from berita order by id_berita desc limit $mulai, $halaman");
                while($d = mysqli_fetch_array($data)){
                ?>
                <tr style="background-color:#1e2434">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['judul']; ?></td>
                    <td><?php echo $d['jenis'];?></td>
                    <td><?php echo $d['tanggal']; ?></td>
                    <td><?php echo substr($d['isi'],0,30); ?>....</td>
                    <td>
                        <a style="color:#fff" class="fa fa-pencil-square-o" href="editberita.php?id=<?php echo $d['id_berita']; ?>">Edit   ||  </a>
                        <a style="color:#fff" class="fa fa-trash-o" href="hapusberita.php?id=<?php echo $d['id_berita']; ?>">Hapus</a>
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
            <form method="post" action="prosesberita.php">
                <div class="form-group row">
                    <label class="col-sm-2">Judul Berita</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Judul" name="Judul">
                </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2">Jenis</label>
                <div class="col-sm-10">
                    <select name="Jenis">
                        <option>--Pilih Opsi Berikut--</option>
                        <option>Berita</option>
                        <option>Event</option>
                        <option>Pengumunan</option>
                        <option>Penghargaan</option>
                    </select>
                </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2">Isi Berita</label>
                <div class="col-lg-10">
                    <textarea class="ckeditor" id="ckedtor" type="text" name="Isi"></textarea>
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
