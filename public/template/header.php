<? $routes = explode('/', $_SERVER['REQUEST_URI']); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?= $data["title"]; ?></title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="https://cdn.tiny.cloud/1/hwmf6iiynv2w4nam41o9zul5zg53ajnf8t8a1c66k68fx3xx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>

	<!-- Start Preloader Area -->
	<div class="preloader-area">
		<div class="loader-box">
			<div class="loader"></div>
		</div>
	</div>
	<!-- End Preloader Area -->


	<!-- Start Header Area -->
	<header id="header">
		<div class="container main-menu">
			<div class="row align-items-center d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class=""><a class="active" href="/">Главная</a></li>
						<li><a href="/about">О себе</a></li>
						<li><a href="/presentations">Презентации</a></li>
						<li class="menu-has-children"><a href="#">Pages</a>
							<ul>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="services.html">Service</a></li>
								<li><a href="portfolio-details.html">Portfolio Details</a></li>
								<li><a href="/admin">Админ</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<? if (empty($routes[1])) : ?>
	<section class="home-banner-area">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center">
				<div class="banner-content col-lg-6 col-md-12 justify-content-center ">
					<div class="me wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">Это я</div>
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">Светлана Петровна Добренко</h1>
					<div class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
						Очень профессиональный
						<span class="designer">Профессионал</span>
						и Мастерский
						<span class="developer">Мастер</span>
					</div>
					<?/*
						<a href="#" class="primary-btn" data-text="Hire Me">
							<span>H</span>
							<span>i</span>
							<span>r</span>
							<span>e</span>
							<span> </span>
							<span>M</span>
							<span>e</span>
						</a>
						*/?>
				</div>
				<div class="banner-img col-lg-6 col-md-6 align-self-end">
					<img class="img-fluid" src="img/banner-img.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Start brands Area -->
	<section class="brands-area">
		<div class="container">
			<div class="brand-wrap">
				<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b1.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b2.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b3.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b4.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b5.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End brands Area -->

	<? else : ?>
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						<?= $data["title"] ?>
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="/">Home </a>
							<a href="/<?= $routes[1]; ?>"><?= $data["title"]; ?></a></p>
					</span>
				</div>
			</div>
		</div>
	</section>
	<? endif; ?>
	<!-- End banner Area -->