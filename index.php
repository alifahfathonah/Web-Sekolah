<?php 
  if(isset($_GET["home"])){
    include "home.php";
  }else if(isset($_GET["visimisi"])){
    include "visimisi.php";
  }else if(isset($_GET["guru"])){
    include "profil.php";
  }else if(isset($_GET["berita"])){
    include "berita.php";
  }else if(isset($_GET["pendaftaran"])){
    include "pendaftaran.php";
  }else if(isset($_GET["login"])){
    include "admin/index.php";
  }else{
    include "home.php";
  }
