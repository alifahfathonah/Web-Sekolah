<!DOCTYPE html>
<html lang="en">
<head>
<title>
    <?php
        if(isset($_GET["home"])){ echo "SMA Negeri 1";}
        else if(isset($_GET["visimisi"])){ echo "Visi & Misi";}
        else if(isset($_GET["guru"])){ echo "Guru";}
		else if(isset($_GET["berita"])){ echo "Berita";}
        else if(isset($_GET["pendaftaran"])){ echo "Pendaftaran";}
        else { echo "SMA Negeri 1"; }
    ?>
</title>
<link rel="shortcut icon" href="images/logo.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	<header class="header">
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>12345</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>fck@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="admin/index.php?login">Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="home.php">
									<div class="logo_text">SMA <span>Negeri </span>1</div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="home.php?home">Beranda</a></li>
									<li><a href="visimisi.php?visimisi">Visi & Misi</a></li>
									<li><a href="profil.php?guru">Guru</a></li>
									<li><a href="berita.php?berita">Berita</a></li>
									<li><a href="pendaftaran.php?pendaftaran">Pendaftaran</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>


	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="home.php?home">Beranda</a></li>
				<li class="menu_mm"><a href="visimisi.php?visimisi">Visi & Misi</a></li>
				<li class="menu_mm"><a href="profil.php?guru">Guru</a></li>
				<li class="menu_mm"><a href="berita.php?berita">Berita</a></li>
				<li class="menu_mm"><a href="pendaftaran.php?pendaftaran">Pendaftaran</a></li>
				<li class="menu_mm"><a href="admin/index.php?login">Login</a></li>
			</ul>
		</nav>
	</div>
</div>