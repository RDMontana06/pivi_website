@extends('layouts.header')


@section('content')
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
					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon"><i class="bx bxl-dribbble"></i></div>
							<h5><a href="">Construction</a></h5>
							<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-file"></i></div>
							<h5><a href="">Land Development</a></h5>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-tachometer"></i></div>
							<h5><a href="">Design & Build</a></h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-world"></i></div>
							<h5><a href="">Ship Building</a></h5>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-slideshow"></i></div>
							<h5><a href="">Ship Repair</a></h5>
							<p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-arch"></i></div>
							<h5><a href="">Ship Conversion</a></h5>
							<p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-arch"></i></div>
							<h5><a href="">Logistics</a></h5>
							<p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-arch"></i></div>
							<h5><a href="">Others</a></h5>
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
							<p>1423 The Mondrian Bldg., P. Ocampo Ext., Brgy. San Antonio, Makati City, Philippines 1203</p>
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
						<iframe class="mb-4 mb-lg-0"
							src="https://maps.google.com/maps?q=1423%20The%20Mondrian%20Bldg&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
