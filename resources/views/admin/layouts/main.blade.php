<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style_yohana.css">
<link rel="stylesheet" href="/css/styleP.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
	<!-- header start -->
<header class="header">
<div class="container-fluid bg-dark  text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="header-main">
		<div class="logo">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/img/logo.png" alt="logo" width="199px">
		</div>
		<div class="open-nav-menu">
		<span></span>
		</div>
		<div class="menu-overlay">
		</div>
		<!-- navigation menu start -->
		<nav class="nav-menu">
		<div class="close-nav-menu">
			<img src="/img/close.svg" alt="close">
		</div>
		<ul class="menu">
			<li class="menu-item menu-item-has-children">
				<a href="/beranda" data-toggle="sub-menu">BERANDA</a>
			</li>
			<li class="menu-item">
				@if(Auth()->User()->role == 'user')
					<a href="/pengumuman">PENGUMUMAN</a>
				@else
					<a href="/blog">PENGUMUMAN</a>
				@endif
			</li>
			<li class="menu-item menu-item-has-children">
				<a href="#" data-toggle="sub-menu">LAPORKAN<i class="plus"></i></a>
				<ul class="sub-menu">
					<li class="menu-item"><a href="/barang-hilang">Laporkan Barang Hilang</a></li>
					<li class="menu-item"><a href="/barang-temuan">Laporkan Barang Temuan</a></li>
				</ul>
			</li>
			<li class="menu-item menu-item-has-children">
				<a href="#" data-toggle="sub-menu">TEMUKAN<i class="plus"></i></a>
				<ul class="sub-menu">
					<li class="menu-item"><a href="/cariHilang">Cari Barang Hilang</a></li>
					<li class="menu-item"><a href="/ambiltemuan">Ambil Barang Temuan</a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="/grafik">GRAFIK</a>
			</li>
			<li class="menu-item">
				<a href="/profil">PROFIL</a>
			</li>
			<li class="menu-item">
			<a href="/logout"><i class='bx bx-log-out'></i></a>
			</li>

			<li class="menu-item">
			<box-icon name='log-out'></box-icon>
		</li>

		
		</ul>
		</nav>
		<!-- navigation menu end -->
	</div>
</div>
</header>

<div class="container">
    @yield('container')
</div>

	    <!-- Footer Start -->
		<div class="container-fluid bg-dark  text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-8 col-md-8">
                        <h5 class="text-light mb-4">Address</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Jl. P.I. Del, Sitoluama, Kec. Laguboti, Toba, Sumatera Utara 22381</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 12 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>team10@gmail.com</p>
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3664472833148!2d99.14619961493582!3d2.383525458046004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sDel%20Institute%20of%20Technology!5e0!3m2!1sen!2sid!4v1638024922607!5m2!1sen!2sid"
                                width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5 class="text-light mb-4">Menu Cepat</h5>
                        <a class="btn btn-link" href="index.php">Beranda</a>
                        <a class="btn btn-link" href="temukan.php">Temukan</a>
                        <a class="btn btn-link" href="laporkan.php">Laporkan</a>
                        <a class="btn btn-link" href="grafik.php">Grafik</a>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

<script src="/js/script.js"></script>
</body>
</html>