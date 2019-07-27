<?php
	session_start();
	if($_SESSION['login'])
    {
$expireAfter = 5;
if(isset($_SESSION['last_action'])){
    $secondsInactive = time() - $_SESSION['last_action'];
    $expireAfterSeconds = $expireAfter * 60;
    if($secondsInactive >= $expireAfterSeconds){
        session_unset();
        session_destroy();
    } 
}
$_SESSION['last_action'] = time();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Siswa || SMA Negeri 1</title>
    <link rel="shortcut icon" href="../../images/logo.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../styles/styles.css">
    <link href="../../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
</head>
<body class="app sidebar-mini rtl">
    <header class="app-header"><a class="app-header__logo" href="index.php">SMA Negeri 1</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li>
          <a class="app-nav__item" href="logout.php">Logout
            <i class="fa fa-sign-out"></i>
          </a>
        </li>
        </ul>
    </header>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <?php 
        include '../../koneksi.php';
        $username=$_SESSION['login'];
        $data = mysqli_query($koneksi,"select * from data_siswa where username='$username' ");
        while($d = mysqli_fetch_array($data)){
      ?>
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar gambar" src="../../images/<?php echo $d['gambar']; ?>" alt="User Image">
        <div>
          <p style="color:#fff" class="app-sidebar__user-name"><?php echo $d['nama_siswa']; ?></p>
        </div>
      </div>
      <?php
        }
        ?>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="datadiri.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Data Diri</span></a></li>
        <li><a class="app-menu__item" href="materi.php"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Materi</span></a></li>
      </ul>
    </aside>
<main class="app-content">
<?php
} else{
header('location:logout.php');
}
?>
