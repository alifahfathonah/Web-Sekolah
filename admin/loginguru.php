<?php
session_start();
include '../koneksi.php';
if(isset($_POST['login'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $ret=mysqli_query($koneksi,"SELECT * FROM data_guru WHERE username='$username'  and password='$password'");
    $num=mysqli_fetch_array($ret);

    if($num>0) {
        $_SESSION['login']=$username;
        $_SESSION['id']=$num['id'];
        $uip=$_SERVER['REMOTE_ADDR'];

        mysqli_query($koneksi,"insert into logguru (userId,username,userIp) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip')");
        $extra="guru/index.php";
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
    } else {
        $_SESSION['msg']="Invalid username or password";
        $extra="guru.php?pesan=gagal_login";
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
    }
}
?>