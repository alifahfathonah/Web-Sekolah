<?php include 'header.php';
?>

    <div class="container mt-3">
        <div class="tab-content">
            <div class="container">
            <?php
            include '../../koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from data_guru where id_guru='$id'");
            while($d = mysqli_fetch_array($data)){
            ?>
                <form method="post" action="updatedata.php" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2">Nama Guru</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" value="<?php echo $d['id_guru']; ?>">
                         <input type="text" class="form-control" name="Name" value="<?php echo $d['nama_guru']; ?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">NIK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="NIK" value="<?php echo $d['nik'];?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="Alamat" value="<?php echo $d["alamat"];?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="Tanggal_Lahir" value="<?php echo $d["tanggal_lahir"];?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Tempat_Lahir" value="<?php echo $d["tempat_lahir"];?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">Jabatank</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="Jabatan" value="<?php echo $d["Jabatan"];?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">Nomor Telepon</label>
                    <div class="col-sm-10">
                        <input type="Number" class="form-control" name="Nomor_telp" value="<?php echo $d["no_telp"];?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Pendt" value="<?php echo $d["pendidikan_terakhir"];?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Username" value="<?php echo $d["username"];?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Password" value="<?php echo $d["password"];?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="filegbr" id='Filegambar' value="<?php echo $d["gambar"];?>">
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
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
<?php include 'footer.php';
?>
