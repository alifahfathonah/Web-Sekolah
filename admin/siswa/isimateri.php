    <?php include 'header.php';
    ?>
    <div class="container mt-3">
    <h1 class="text-center">Materi Pembelajaran</h1>
    <hr>
        <div class="container">
            <table class="table table-responsive-sm" style="text-align:center">
                <tr style="background-color:#14bdee;">
                    <th>NO</th>
                    <th>Mata Pelajaran</th>
                    <th>Judul</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
                <?php 
                    include '../../koneksi.php';
                    $username=$_GET['username'];
                    $no = 1;
                    $halaman = 10;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $result = mysqli_query($koneksi, "select * from materi");
                    $total = mysqlI_num_rows($result);
                    $pages = ceil($total/$halaman);            
                    $data = mysqli_query($koneksi, "select * from materi where username='$username' order by id_materi desc limit $mulai, $halaman");
                    while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $d['matapelajaran'];?></td>
                    <td><?php echo $d['file'];?></td>
                    <td><?php echo $d['kelas'];?></td>
                    <td><a class="fa fa-download" href="download.php?file=<?php echo $d['file']; ?>"> Donwload</a></td>
                </tr>

            <?php 
            }
            ?>
            </table>
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
    </div>

    <?php include 'footer.php';
    ?>
