@extends('layouts.header')


@section('content')
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<div class="container" data-aos="zoom-out" data-aos-delay="100">
			<h1>Welcome to <span>Premium Infinite Ventures Inc.</span></h1>
			<h2>A holding company that represents a broad range of services and industries, with a widely diversified fields in
				technology, aggregate supplies, construction development and recurring revenue to provide world-class products and
				services to the Filipino people</h2>
			<div class="d-flex">
				<a href="#core" class="btn-get-started scrollto">Core Values</a>
				<!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
			</div>
		</div>
	</section><!-- End Hero -->
	<section id="holdings" class="holdings">
		<div class="section-title">
			<h2>Holdings</h2>
			<h3>Our <span>Holdings</span></h3>
		</div>
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-md-4 col-lg-4 d-flex align-items-center mb-2 mb-lg-0">
					<a href="{{ url('/pchi') }}">
						<div class="img-hover-zoom">
							<img src="{{ asset('img/holdings-logo/pchi-logo.jpg') }}" width="300" height="300">
						</div>
					</a>
					{{-- <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
							<img src="{{ asset('img/holdings-logo/pchi-logo.jpg') }}" data-bs-toggle="modal" data-bs-target="#pchi"
								width="300" height="300" alt=""> --}}
					{{-- <div class="icon"><i class='bx bxs-hard-hat'></i></div>
							<h4 class="title"><a href="{{ url('/pchi') }}">PCHI</a></h4>
							<p class="description">Premium Capital Holdings Inc. dolores et quas molestias excepturi</p> --}}
					{{-- </div> --}}
				</div>

				<div class="col-md-4 col-lg-4 d-flex align-items-center mb-2 mb-lg-0">
					<a href="{{ url('/ihdc') }}">
						<div class="img-hover-zoom">
							<img src="{{ asset('img/holdings-logo/ihdc-holdings.png') }}" width="300" height="300" alt="">
						</div>
					</a>
				</div>

				<div class="col-md-4 col-lg-4 d-flex align-items-center mb-2 mb-lg-0">
					<a href="{{ url('/pthc') }}">
						<div class="img-hover-zoom">
							<img src="{{ asset('img/holdings-logo/pthc-logo.png') }}" width="300" height="300" alt="">
						</div>
					</a>
				</div>
			</div>

		</div>
	</section><!-- End Featured Services Section -->
	<main id="main">
		<!-- ======= Featured Services Section ======= -->


		<!-- ======= Core Section ======= -->
		<section id="core" class="about portfolio-details section-bg ">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Core Values</h2>
					<h3>Our <span>Core Values</span></h3>
				</div>

				<div class="row">
					<div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
						{{-- <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt=""> --}}
						<div class="portfolio-details-slider swiper">
							<div class="swiper-wrapper align-items-center">

								<div class="swiper-slide">
									<img src="{{ asset('img/core-values/1.jpg') }}" alt="">
								</div>

								<div class="swiper-slide">
									<img src="{{ asset('img/core-values/2.jpg') }}" alt="">
								</div>

								<div class="swiper-slide">
									<img src="{{ asset('img/core-values/3.jpg') }}" alt="">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('img/core-values/4.jpg') }}" alt="">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('img/core-values/5.jpg') }}" alt="">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('img/core-values/6.jpg') }}" alt="">
								</div>

							</div>
							{{-- <div class="swiper-pagination"></div> --}}
						</div>
					</div>
					<div class="col-lg-6 content  flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
						<h3>INTEGRITY</h3>
						<p class="fst-italic">
							“To do good and be good at all times”
						</p>
						<hr>
						<h3>COMMITMENT</h3>
						<p class="fst-italic">
							“Never make excuses, only results”
						</p>
						<hr>
						<h3>HUMILITY AND GENUINE CONCERN</h3>
						<p class="fst-italic">
							“Simplicity in enriching lives of the people”
						</p>
						<hr>
						<h3>INNOVATION</h3>
						<p class="fst-italic">
							“There’s a way to do it better-find it” –Thomas Edison
						</p>
						<hr>
						<h3>PREMIUM SERVICES</h3>
						<p class="fst-italic">
							“Quality Services beyond expectations”
						</p>
						<hr>
						<h3>SYNERGY</h3>
						<p class="fst-italic">
							“Alone we can do so little: TOGETHER we can do so much”
						</p>
					</div>
				</div>

			</div>
		</section><!-- End About Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Services</h2>
					<h3>Check our <span>Services</span></h3>
					{{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
						autem.</p> --}}
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-user-helmet-safety"></i></div>
							<h5><a href="">Airport, Seaports and Shipyard Construction</a></h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-buildings"></i></div>
							<h5><a href="">Building, Land Development, Reclamation & Dredging </a></h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-compass-drafting"></i></i></div>
							<h5><a href="">Design & Build</a></h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-ship"></i></div>
							<h5><a href="">Dikes, Dams, River & Tide Embarkment</a></h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-warehouse"></i></div>
							<h5><a href="">Industrial Plant & Warehouse</a></h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-anchor"></i></div>
							<h5><a href="">Reclamation Dredging & Marine Vessel Services</a></h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-truck-pickup"></i></div>
							<h5><a href="">Precast, Aggregates and Cements</a></h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-file-signature"></i></div>
							<h5><a href="">Land Acquisition</a></h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-store"></i></div>
							<h5><a href="">E-commerce Marketplace</a></h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-browser"></i></div>
							<h5><a href="">Digital Solutions</a></h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-camera-cctv"></i></div>
							<h5><a href="">Electronic Distributor</a></h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-qrcode"></i></div>
							<h5><a href="">Digital Payment Channel</a></h5>
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
					<h3>Our <span>Teams</span></h3>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<ol class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-center align-items-start">
								<div class="mx-auto">
									<div class="fw-bold">
										<h4>Board of Directors</h4>
									</div>
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Engr. Francis Lloyd T. Chua</div>
								</div>
								<div class="me-2 ms-auto">
									Chairman
								</div>

							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Manuel A. Chua</div>
								</div>
								<div class="me-2 ms-auto">
									Director
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Theresa T. Chua</div>
								</div>
								<div class="me-2 ms-auto">
									Director
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Dominic Van T. Chua</div>
								</div>
								<div class="me-2 ms-auto">
									Director
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Cherry Ann T. Chua</div>
								</div>
								<div class="me-2 ms-auto">
									Director
								</div>
							</li>
						</ol>
					</div>
					<div class="col-lg-6">
						<ol class="list-group list-group-flush">
							<li class="list-group-item d-flex align-items-end">
								<div class="mx-auto">
									<div class="fw-bold">
										<h4>Executive Committee</h4>
									</div>
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-end">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Engr. Francis Lloyd T. Chua</div>
								</div>
								<div class="me-2 ms-auto">
									Chairman
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-end">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Engr. Noel Jesus P. Santiago</div>
								</div>
								<div class="me-2 ms-auto">
									Execom Member
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-end">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Engr. Alfredo L. Commendador</div>
								</div>
								<div class="me-2 ms-auto">
									Execom Member
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-end">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Francis A. Calumba</div>
								</div>
								<div class="me-2 ms-auto">
									Execom Member
								</div>
							</li>
						</ol>
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
					{{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
						autem.</p> --}}
				</div>

				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-6">
						<div class="info-box mb-4">
							<i class="bx bx-map"></i>
							<h3>Our Address</h3>
							<p>Corner, Pablo Ocampo Sr Ext Onyx &, Cabanillas, Makati, 1203 Metro Manila</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="info-box  mb-4">
							<i class="bx bx-envelope"></i>
							<h3>Email Us</h3>
							<p>info@premiuminfiniteventures.com</p>
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
						<iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=PMI%20tower&t=&z=13&ie=UTF8&iwloc=&output=embed"
							frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
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
@endsection
