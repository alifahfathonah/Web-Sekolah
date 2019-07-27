<?php 
	include 'header.php';
?>
<div class="body">

<div class="container">
   <div class="row">
	<br>
	<br>
		<div class="col-lg-8">
			<div>
				<?php include 'koneksi.php' ;
				$halaman = 4;
				$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$result = mysqli_query($koneksi, "select * from berita");
				$total = mysqlI_num_rows($result);
				$pages = ceil($total/$halaman);            
				$data = mysqli_query($koneksi, "select * from berita order by id_berita desc limit $mulai, $halaman");
				while($d = mysqli_fetch_array($data)){
				?>
				<h2 class="font-weight-bold"><?php echo $d['judul']; ?></h2>
				<hr>
				<p><?php echo substr($d['isi'],0,500); ?>....</p>
				<div class="box">
				<span class="fa fa-calendar text-secondary"> <?php echo $d['tanggal']; ?> | <i class="fa fa-home"> SMA Negeri 1 </i> | <a href="berita.php" class="fa fa-paperclip"> <?php echo $d['jenis']?> |</a></span>
				<button class="button"><a style="color:#000" href="singleberita.php?id_berita=<?php echo"$d[id_berita]";?>">Read More</a></button>
				</div>
				<br>
				<br>
				<?php
				}
				?>        
			</div>
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

		<div class="col-lg-4">
		<?php include 'isisamping.php' ?>
		</div>

  	</div>
</div>
 
</div>
<?php 
	include 'footer.php';
?>