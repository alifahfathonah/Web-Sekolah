<?php include 'header.php'; ?>
<div class="body">

<div class="container">
    <div class="row">

        <div class="col-lg-8">
            <?php
            include "koneksi.php";
            $id = $_GET['id_event'];
            $data = mysqli_query($koneksi, "select * from event where id_event='$id'");
            while($d = mysqli_fetch_array($data)){
            ?>
                <h2 class="font-weight-bold"><?php echo $d['judul']; ?></h2>
                <br>
                <p class="fa fa-calendar text-secondary"> <?php echo $d['tanggal']; ?> | SMA Negeri 1 | <a href="event.php" class="fa fa-paperclip"> Event</a></p>
                <hr>
                <p><?php echo $d['isi']; ?></p>
            <?php
            }
            ?>
        </div>

        <div class="col-lg-4">
            <div><?php include 'isisamping.php' ?>
        </div>

    </div>
</div>

</div>
<br>
<?php include 'footer.php'; ?>