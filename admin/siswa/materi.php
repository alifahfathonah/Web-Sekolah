    <?php include 'header.php';
    ?>
    <div class="container mt-3">
    <h1 class="text-center">Materi Pembelajaran</h1>
    <hr>
		<div class="container">
            <table class="table table-responsive-sm" style="text-align:center">
                <tr style="background-color:#14bdee;">
                    <th>NO</th>
                    <th>Nama Guru</th>
                </tr>
            <?php 
            include '../../koneksi.php';
            $no=1;
            $data = mysqli_query($koneksi,"select * from data_guru ");
            while($d = mysqli_fetch_array($data)){
            ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><a href="isimateri.php?username=<?php echo $d['username']; ?>"><?php echo $d['nama_guru'];?></a></td>
                </tr>
            <?php 
            }
            ?>
            </table>
            
	    </div>
    </div>

    <?php include 'footer.php';
    ?>
