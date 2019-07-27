<?php include 'header.php';
?>

<div class="container jumbotron">
	<h2 class="text-center">Data Login Admin</h2>
	<hr>
	<table>
		<tr style="background-color:#14bdee; color:black">
            <th>No</th>
            <th>User Id</th>
            <th>User Name</th>
            <th>User Ip</th>
            <th>Login Time</th>
        </tr>

        <?php 
        include '../../koneksi.php';
        $query=mysqli_query($koneksi,"select * from logadmin order by id desc limit 20");
        $no=1;
        while($row=mysqli_fetch_array($query))
        {
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $row['userId'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['userIp'];?></td>
            <td><?php echo $row['loginTime'];?></td>
        </tr>
        <?php
        } 
        ?>
	</table>
</div>

<?php include 'footer.php';
?>
