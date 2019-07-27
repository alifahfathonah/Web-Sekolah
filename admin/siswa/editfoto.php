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
            
                <form method="post" action="updatefoto.php" enctype="multipart/form-data" name="form1" id="form1">
                    <div class="row">
                        <div class="col-lg-3">
                            <input type="hidden" name="id" value="<?php echo $d['idsiswa']; ?>">
                            <img src="../../images/<?php echo $d['gambar']; ?>" style="max-width=300px;max-height:200px">
                        </div>
                        <br>
                        <div class="col-lg-9">
                            <input type="file" class="form-control" name="filegbr" id='Filegambar' value="<?php echo $d["gambar"];?>">
                            <p class="box text-red" style="color:red">* Ukuran Gambar Harus 4*3 cm dan Format gambar harus .jpg .gif .png dan .jpeg</p>
                            <input class="button" type="submit" value="Submit">
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
