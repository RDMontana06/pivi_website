@extends('layouts.header')


@section('content')
	<!-- ======= Top Bar ======= -->
	<section id="topbar" class="d-flex align-items-center">
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
	</section>

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href="index.html">
					<img src="{{ asset('img/PIVI_FINAL_PNG-02.png') }}">
				</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="#about">About</a></li>
					<li><a class="nav-link scrollto" href="#services">Services</a></li>
					<li><a class="nav-link scrollto" href="#team">Team</a></li>
					<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
					</li>
					<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<div class="container" data-aos="zoom-out" data-aos-delay="100">
			<h1>Welcome to <span>Premium Infinite Ventures Inc.</span></h1>
			<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis.</h2>
			<div class="d-flex">
				<a href="#about" class="btn-get-started scrollto">Who we are</a>
				<!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= Featured Services Section ======= -->
		<section id="featured-services" class="featured-services">
			<div class="section-title">
				<h2>Holdings</h2>
				<h3>Our <span>Holdings</span></h3>
			</div>
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
							<div class="icon"><i class='bx bxs-hard-hat'></i></div>
							<h4 class="title"><a href="">PCHI</a></h4>
							<p class="description">Premium Capital Holdings Inc. dolores et quas molestias excepturi</p>
						</div>
					</div>

					<div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
							<div class="icon"><i class='bx bxs-ship'></i></div>
							<h4 class="title"><a href="">IHDC</a></h4>
							<p class="description">Industry Holdings and Development Corp reprehenderit in voluptate velit esse cillum
								dolore</p>
						</div>
					</div>

					<div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
							<div class="icon"><i class='bx bxs-store'></i></div>
							<h4 class="title"><a href="">PTHC</a></h4>
							<p class="description">Premium Technology Holdings Corp cupidatat non proident, sunt in culpa qui officia</p>
						</div>
					</div>

				</div>
				{{-- <div class="row">
					<div class="col-md-4 col-lg-4 align-items-center mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
							<img src="{{ asset('img/holdings-logo/pchi-logo.jpg') }}" data-bs-toggle="modal" data-bs-target="#pchi"
								width="200" height="200" alt="">
							<!-- <h4 class="title"><a href="">Premium Capital Holdings Inc.</a></h4>						<p class="description">Premium Capital Holdings Inc.</p> -->
						</div>
					</div>
					<div class="col-md-4 col-lg-4 align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
							<img src="{{ asset('img/holdings-logo/ihdc-holdings.png') }}" width="200" height="200" alt="">
						</div>
					</div>

					<div class="col-md-4 col-lg-4 align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
							<img src="{{ asset('img/holdings-logo/pthc-logo.png') }}" width="200" height="200" alt="">
						</div>
					</div>

				</div> --}}

			</div>
		</section><!-- End Featured Services Section -->

		<!-- ======= About Section ======= -->
		<section id="about" class="about section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>About</h2>
					<h3>Find Out More <span>About Us</span></h3>
					<p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
						autem.</p>
				</div>

				<div class="row">
					<div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
						<img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
						data-aos-delay="100">
						<h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
						<p class="fst-italic">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
						</p>
						<ul>
							<li>
								<i class="bx bx-store-alt"></i>
								<div>
									<h5>Ullamco laboris nisi ut aliquip consequat</h5>
									<p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
								</div>
							</li>
							<li>
								<i class="bx bx-images"></i>
								<div>
									<h5>Magnam soluta odio exercitationem reprehenderi</h5>
									<p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
								</div>
							</li>
						</ul>
						<p>
							Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
							velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum
						</p>
					</div>
				</div>

			</div>
		</section><!-- End About Section -->

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients section-bg">
			<div class="container" data-aos="zoom-in">

				<div class="row">

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt="">
					</div>

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid" alt="">
					</div>

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/clients/client-3.png') }}" class="img-fluid" alt="">
					</div>

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/clients/client-4.png') }}" class="img-fluid" alt="">
					</div>

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/clients/client-5.png') }}" class="img-fluid" alt="">
					</div>

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/clients/client-6.png') }}" class="img-fluid" alt="">
					</div>

				</div>

			</div>
		</section><!-- End Clients Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Services</h2>
					<h3>Check our <span>Services</span></h3>
					<p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
						autem.</p>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon"><i class="bx bxl-dribbble"></i></div>
							<h4><a href="">Lorem Ipsum</a></h4>
							<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-file"></i></div>
							<h4><a href="">Sed ut perspiciatis</a></h4>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-tachometer"></i></div>
							<h4><a href="">Magni Dolores</a></h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-world"></i></div>
							<h4><a href="">Nemo Enim</a></h4>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-slideshow"></i></div>
							<h4><a href="">Dele cardo</a></h4>
							<p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-arch"></i></div>
							<h4><a href="">Divera don</a></h4>
							<p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Services Section -->

		<!-- ======= Team Section ======= -->
		<section id="team" class="team">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Team</h2>
					<h3>Our Hardworking <span>Team</span></h3>
					<p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
						autem.</p>
				</div>

				<div class="row">

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
						<div class="member">
							<div class="member-img">
								<img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
								<div class="social">
									<a href=""><i class="bi bi-twitter"></i></a>
									<a href=""><i class="bi bi-facebook"></i></a>
									<a href=""><i class="bi bi-instagram"></i></a>
									<a href=""><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Walter White</h4>
								<span>Chief Executive Officer</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
						<div class="member">
							<div class="member-img">
								<img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid" alt="">
								<div class="social">
									<a href=""><i class="bi bi-twitter"></i></a>
									<a href=""><i class="bi bi-facebook"></i></a>
									<a href=""><i class="bi bi-instagram"></i></a>
									<a href=""><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Sarah Jhonson</h4>
								<span>Product Manager</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
						<div class="member">
							<div class="member-img">
								<img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid" alt="">
								<div class="social">
									<a href=""><i class="bi bi-twitter"></i></a>
									<a href=""><i class="bi bi-facebook"></i></a>
									<a href=""><i class="bi bi-instagram"></i></a>
									<a href=""><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>William Anderson</h4>
								<span>CTO</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
						<div class="member">
							<div class="member-img">
								<img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
								<div class="social">
									<a href=""><i class="bi bi-twitter"></i></a>
									<a href=""><i class="bi bi-facebook"></i></a>
									<a href=""><i class="bi bi-instagram"></i></a>
									<a href=""><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Amanda Jepson</h4>
								<span>Accountant</span>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Team Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
					<h3><span>Contact Us</span></h3>
					<p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
						autem.</p>
				</div>

				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-6">
						<div class="info-box mb-4">
							<i class="bx bx-map"></i>
							<h3>Our Address</h3>
							<p>A108 Adam Street, New York, NY 535022</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="info-box  mb-4">
							<i class="bx bx-envelope"></i>
							<h3>Email Us</h3>
							<p>contact@example.com</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="info-box  mb-4">
							<i class="bx bx-phone-call"></i>
							<h3>Call Us</h3>
							<p>+1 5589 55488 55</p>
						</div>
					</div>

				</div>

				<div class="row" data-aos="fade-up" data-aos-delay="100">

					<div class="col-lg-6 ">
						<iframe class="mb-4 mb-lg-0"
							src="https://maps.google.com/maps?q=pmi%20tower&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
							style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
					</div>


					<div class="col-lg-6">
						<form action="forms/contact.php" method="post" role="form" class="php-email-form">
							<div class="row">
								<div class="col form-group">
									<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
								</div>
								<div class="col form-group">
									<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
							</div>
							<div class="my-3">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">Your message has been sent. Thank you!</div>
							</div>
							<div class="text-center"><button type="submit">Send Message</button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">

		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>PIVI<span>.</span></h3>
						<p>
							Corner, Pablo Ocampo Sr Ext Onyx &,<br>
							Cabanillas, Makati 1203<br>
							Metro Manila <br><br>
							<strong>Phone:</strong> +1 5589 55488 55<br>
							<strong>Email:</strong> info@example.com<br>
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
				&copy; Copyright <strong><span>PIVI</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
			</div>
		</div>
	</footer><!-- End Footer -->
	<!-- Modals -->
	<!-- Modal -->
	<div class="modal fade" id="pchi" tabindex="-1" aria-labelledby="pchi" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pchi">PCHI Companies</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>
@endsection
