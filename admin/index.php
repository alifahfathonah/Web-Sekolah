<!DOCTYPE html>
<html>
<head>
<title>Login Siswa || SMA Neger 1 </title>
<link rel="shortcut icon" href="../images/logo.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="../styles/bootstrap/js/bootstrap.min.js"></script>
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <span class="logo_title mt-5">SMA Negeri 1</span>
            <h6>Silahkan Login Sesuai Username dan Password Anda</h6>
        </div>
        <div class="card-body">
            <form action="loginsiswa.php" method="post" onSubmit="return validasi()">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <input name="login" type="submit" value="Login"  class="btn btn-outline-danger float-left login_btn">
                </div>

            </form>
        </div>
        <div class="card-body">
            <h5 style="color:#fff">Anda Guru? Silahkan Login <a style="color:#17a2b8" class="fa fa-user-circle-o" href="guru.php"> Disini</a></h5>
        </div>
    </div>
</div>

</body>
</html>