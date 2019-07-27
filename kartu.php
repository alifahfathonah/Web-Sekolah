<?php include 'header.php';
?>
<div class="body">
    <div class="container mt-3">
        <div class="tab-content">
                <?php 
                include 'koneksi.php';
                $data = mysqli_query($koneksi,"select * from pendaftaran where id_pendaftaran='1' ");
                while($d = mysqli_fetch_array($data)){
                ?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="text-center">
                        <img src="images/<?php echo $d['gambar']; ?>" style="max-width=300px;max-height:200px">
                    </div>
                    <br>
                    <div class="text-center">
                        <button class="button">
                            <a class="fa fa-pencil-square-o text-white" href="editfoto.php?id=<?php echo $d['idsiswa']; ?>"> Ganti Foto</a>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 box">
                    <div>
                        <h3>Data Pribadi</h3>
                    </div>
                    <hr>
                    <div>
                        <p>Nama</p>
                        <p style="font-weight:bold;"><?php echo $d['nama_siswa']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>NISN</p>
                        <p style="font-weight:bold;"><?php echo $d['nisn']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Tempat Lahir</p>
                        <p style="font-weight:bold;"><?php echo $d['tempat_lahir']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Tanggal Lahir</p>
                        <p style="font-weight:bold;"><?php echo $d['tanggal_lahir']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Jenis Kelamin</p>
                        <p style="font-weight:bold;"><?php echo $d['jenis_kelamin']; ?></p>
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
                        <p style="font-weight:bold;"><?php echo $d['alamat']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Agama</p>
                        <p style="font-weight:bold;"><?php echo $d['agama']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Nomor Telepon/HP</p>
                        <p style="font-weight:bold;"><?php echo $d['nomor_telp']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Email</p>
                        <p style="font-weight:bold;"><?php echo $d['email']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Hobby</p>
                        <p style="font-weight:bold;"><?php echo $d['hobby']; ?></p>
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
                        <p style="font-weight:bold;"><?php echo $d['ayah']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Pendidikan Ayah</p>
                        <p style="font-weight:bold;"><?php echo $d['pendidikan_ayah']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Pekerjaan Ayah</p>
                        <p style="font-weight:bold;"><?php echo $d['pekerjaan_ayah']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Alamat Ayah</p>
                        <p style="font-weight:bold;"><?php echo $d['alamat_ayah']; ?></p>
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
                        <p style="font-weight:bold;"><?php echo $d['ibu']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Pendidikan Ibu</p>
                        <p style="font-weight:bold;"><?php echo $d['pendidikan_ibu']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Pekerjaan Ibu</p>
                        <p style="font-weight:bold;"><?php echo $d['pekerjaan_ibu']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Alamat Ibu</p>
                        <p style="font-weight:bold;"><?php echo $d['alamat_ibu']; ?></p>
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
                        <p style="font-weight:bold;"><?php echo $d['username']; ?></p>
                    </div>
                    <hr>
                    <div>
                        <p>Password</p>
                        <p style="font-weight:bold;"><?php echo $d['password']; ?></p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="text-center">
                        <button class="button">
                            <a class="fa fa-pencil-square-o text-white" href="editdata.php?id=<?php echo $d['idsiswa']; ?>"> Edit Data Diri</a>
                        </button>
                    </div>
                </div>
            </div>
                <?php 
                }
                ?>
        </div>
    </div>
</div>

<?php include 'footer.php';
?>
