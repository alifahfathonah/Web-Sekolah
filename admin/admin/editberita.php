<?php include 'header.php';
?>


<div class="container mt-3">
<div class="jumbotron">
	<?php
	include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from berita where id_berita='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="updateberita.php">
            <div class="form-group row">
                <label class="col-sm-2">Judul Berita</label>
            <div class="col-sm-10">
                <input type="hidden" name="id" value="<?php echo $d['id_berita']; ?>">
                <input type="text" name="Judul" class="form-control" value="<?php echo $d['judul']; ?>">
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
                <textarea class="ckeditor" id="ckedtor" type="text" name="Isi"><?php echo $d['isi']; ?></textarea>
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
<?php include 'footer.php';
?>
