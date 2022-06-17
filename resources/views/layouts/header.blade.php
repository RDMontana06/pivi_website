<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Premium Infinite Ventures Inc.</title>
	<meta content="Holdings, Construction Company, Shipping, Logistics, Ship Building" name="keywords">
	<meta content="Premium Infinite Ventures" property="og:title">
	<meta content="Holdings, Construction Company, Shipping, Logistics, Ship Building" property="og:description">
	<meta content="{{ asset('img/PIVI_FINAL_PNG-02.png') }}" property="og:image">
	<meta content="http://premiuminfiniteventures.com/" property="og:url">
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('img/PIVI_FINAL_PNG-02.png') }}" />
	<link href="{{ asset('img/PIVI_FINAL_PNG-02.png') }}" rel="pivi-logo.png">

	<!-- Google Fonts -->
	<link
		href=" {{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/boxicons-2.1.2/css/boxicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
	<!-- ======= Top Bar ======= -->
	{{-- <section id="topbar" class="d-flex align-items-center">
		<div class="container d-flex justify-content-center justify-content-md-between">
			<div class="contact-info d-flex align-items-center">
				<i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
				<i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
			</div>
			<div class="social-links d-none d-md-flex align-items-center">
				<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
				<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
				<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
				<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
			</div>
		</div>
	</section> --}}

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			{{-- <h1 class="logo"><a href="{{ url('/') }}">
					<img src="{{ asset('img/PIVI_FINAL_PNG-02.png') }}">
				</a></h1> --}}
			<!-- Uncomment below if you prefer to use an 	mage logo -->
			<a href="{{ url('/') }}" class="logo"><img src="{{ asset('img/PIVI_FINAL_PNG-02.png') }}"
					alt=""></a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="#holdings">Holdings</a></li>
					<li><a class="nav-link scrollto" href="#about">About</a></li>
					<li><a class="nav-link scrollto" href="#services">Services</a></li>
					<li><a class="nav-link scrollto" href="#team">Team</a></li>
					{{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="#">Drop Down 1</a></li>
							<li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="#">Deep Drop Down 1</a></li>
									<li><a href="#">Deep Drop Down 2</a></li>
									<li><a href="#">Deep Drop Down 3</a></li>
									<li><a href="#">Deep Drop Down 4</a></li>
									<li><a href="#">Deep Drop Down 5</a></li>
								</ul>
							</li>
							<li><a href="#">Drop Down 2</a></li>
							<li><a href="#">Drop Down 3</a></li>
							<li><a href="#">Drop Down 4</a></li>
						</ul>
					</li> --}}
					<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->
	@yield('content')
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>PIVI<span>.</span></h3>
						<p>
							1423 The Mondrian Bldg.,<br>
							P. Ocampo Ext., Brgy. San Antonio, Makati City,<br>
							Metro Manila, Philippines 1203<br><br>
							<strong>Phone:</strong> +1 5589 55488 55<br>
							<strong>Email:</strong> info@premiuminfiniteventures.com<br>
						</p>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Services</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Construction</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Logistics</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Ship Building</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Manufacturing</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Social Networks</h4>
						<p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
						<div class="social-links mt-3">
							<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
							<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="container py-4">
			<div class="copyright">
				&copy; Copyright <strong><span>PIVI</span></strong>. All Rights Reserved <strong>Obanana Digital Solutions</strong>
			</div>
			<div class="credits">
			</div>
		</div>
	</footer><!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>
	<!-- Vendor JS Files -->
	<script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
	<script src="{{ asset('vendor/aos/aos.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
	<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
	<script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }} "></script>
	<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

	<!-- Template Main JS File -->
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
