<?php include 'header.php';
?>
<div class="container mt-3">
        <div class="tab-content">
            <div class="container">
            <?php
            include '../../koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from data_siswa where idsiswa='$id'");
            while($d = mysqli_fetch_array($data)){
            ?>
            
                <form method="post" action="updatedata.php" enctype="multipart/form-data" name="form1" id="form1">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="../../images/<?php echo $d['gambar']; ?>" style="max-width=300px;max-height:200px">
                        </div>
                        <div class="col-lg-4 box">
                            <div>
                                <h3>Data Pribadi</h3>
                            </div>
                            <hr>
                            <div>
                                <p>Nama</p>
                                <input type="hidden" name="id" value="<?php echo $d['idsiswa']; ?>">
                                <input type="text" class="form-control" name="NAMA" value="<?php echo $d['nama_siswa']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>NISN</p>
                                <input type="number" class="form-control" readonly name="NISN" value="<?php echo $d['nisn']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Tempat Lahir</p>
                                <input type="text" class="form-control" name="TEMPAT_LAHIR" value="<?php echo $d['tempat_lahir']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Tanggal Lahir</p>
                                <input type="date" class="form-control" name="TANGGAL_LAHIR" value="<?php echo $d['tanggal_lahir']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Jenis Kelamin</p>
                                <input type="text" class="form-control" name="JENIS_KELAMIN" value="<?php echo $d['jenis_kelamin']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 box">
                            <div>
                            <h3>Data Pribadi</h3>
                            </div>
                            <hr>
                            <div>
                                <p>Alamat</p>
                                <input type="text" class="form-control" name="ALAMAT" value="<?php echo $d['alamat']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Agama</p>
                                <input type="text" class="form-control" name="AGAMA" value="<?php echo $d['agama']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Nomor Telepon/HP</p>
                                <input type="number" class="form-control" name="NO_HP" value="<?php echo $d['nomor_telp']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Email</p>
                                <input type="text" class="form-control" name="EMAIL" value="<?php echo $d['email']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Hobby</p>
                                <input type="text" class="form-control" name="HOBBY" value="<?php echo $d['hobby']; ?>">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4 box">
                            <div>
                                <h3>Data Ayah</h3>
                            </div>
                            <hr>
                            <div>
                                <p>Nama Ayah</p>
                                <input type="text" class="form-control" name="AYAH" value="<?php echo $d['ayah']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Pendidikan Ayah</p>
                                <input type="text" class="form-control" name="PENDIDIKAN_AYAH" value="<?php echo $d['pendidikan_ayah']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Pekerjaan Ayah</p>
                                <input type="text" class="form-control" name="PEKERJAAN_AYAH" value="<?php echo $d['pekerjaan_ayah']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Alamat Ayah</p>
                                <input type="text" class="form-control" name="ALAMAT_AYAH" value="<?php echo $d['alamat_ayah']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 box">
                            <div>
                                <h3>Data Ibu</h3>
                            </div>
                            <hr>
                            <div>
                                <p>Nama Ibu</p>
                                <input type="text" class="form-control" name="IBU" value="<?php echo $d['ibu']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Pendidikan Ibu</p>
                                <input type="text" class="form-control" name="PENDIDIKAN_IBU" value="<?php echo $d['pendidikan_ibu']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Pekerjaan Ibu</p>
                                <input type="text" class="form-control" name="PEKERJAAN_IBU" value="<?php echo $d['pekerjaan_ibu']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Alamat Ibu</p>
                                <input type="text" class="form-control" name="ALAMAT_IBU" value="<?php echo $d['alamat_ibu']; ?>">
                            </div>
                            <hr>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4 box">
                            <div>
                                <h3>Username & Password</h3>
                            </div>
                            <hr>
                            <div>
                                <p>Username</p>
                                <input type="text" class="form-control" name="USERNAME" value="<?php echo $d['username']; ?>">
                            </div>
                            <hr>
                            <div>
                                <p>Password</p>
                                <input type="password" class="form-control" name="PASSWORD" value="<?php echo $d['password']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            <br>
                            <br>
                            <br>
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
