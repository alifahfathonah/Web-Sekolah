<div>
    <h3>Berita Terbaru</h3>
    <hr>
    <?php 
    include 'koneksi.php';
    $no=1;
    $data = mysqli_query($koneksi,"select * from berita order by id_berita desc limit 8 ");
    while($d = mysqli_fetch_array($data)){
    ?>
    <p style="color:#14bdee"><a href="singleberita.php?id_berita=<?php echo"$d[id_berita]";?>"><?php echo $d['judul']; ?></a></p>
    <?php
    }
    ?>
</div>
<br>
<div>
    <h3>Update Materi dan Nilai</h3>
    <hr>
    <?php 
    include 'koneksi.php';
    $no=1;
    $data = mysqli_query($koneksi,"select * from materi order by id_materi desc limit 8 ");
    while($d = mysqli_fetch_array($data)){
    ?>
    <div class="row" href="admin/index.php">
        <div class="col-sm-4">
            <img class="book float-center" src="images/book.png">
        </div>
        <div class="col-sm-8">
            <h4 class="font-weight-bold" style="color:#17a2b8"><?php echo $d['matapelajaran'];?></h4>
            <li class="font-weight-bold"><?php echo $d['file'];?></li>
            <li><?php echo $d['nama_guru'];?></li>
            <p><?php echo $d['tanggal']?></p>
            <button class="button"><a style="color:#000" href="admin/index.php">Download</a></button>
        </div>
    </div>
    <hr>
    <?php
    }
    ?>

    
</div>