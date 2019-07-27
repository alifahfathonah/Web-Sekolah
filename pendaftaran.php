<?php include 'header.php'; ?>

<div class="body">
<div class="jumbotron container">
<form method="post" action="pendaftaran/proses.php" enctype="multipart/form-data" name="form1" id="form1">
    <div class="row">
        <div class="col-lg-5">
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
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
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
        <div class="col-lg-5">
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
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
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
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-5">
            <input type="file" class="form-control" name="filegbr" id='Filegambar'>
			<p style="color:red">* Ukuran Gambar Harus 4*3 cm dan Format gambar harus .jpg .gif .png dan .jpeg</p>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
            <div>
                <input type="submit" value="Submit">
            </div> 
        </div>
    </div>             
</form>
</div>
</div>
<?php include 'footer.php'; ?>