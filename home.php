<?php 
	include 'header.php';
?>
<div class="body">
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/11.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/12.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br>

    <div class="text-white my-4 text-center" style="background-color:#17a2b8;">
      <div class="card-body">
        <h2 class="text-white m-0">Selamat Datang di SMA Negeri 1 Indonesia</h2>
      </div>
    </div>
    <div class="container">
    <div class="row">
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
          <h3><?php echo $d['judul']; ?></h3>
          <hr>
          <p><?php echo substr($d['isi'],0,200); ?>.... </p>
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