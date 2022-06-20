@extends('layouts.header')
@section('content')
	<main id="main" data-aos="fade-up">

		<!-- ======= Breadcrumbs ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Premium Technology Holdings Corp.</h2>
					<ol>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>PTHC</li>
					</ol>
				</div>

			</div>
		</section><!-- End Breadcrumbs -->

		<section id="portfolio-details" class="portfolio-details">
			<div class="container">

				<div class="row gy-4">
					<div class="col-lg-4">
						<div class="portfolio-details-slider swiper">
							<div class="swiper-wrapper align-items-center">

								<div class="swiper-slide">
									<img src="{{ asset('img/about_pchi/1.png') }}" alt="">
								</div>

								<div class="swiper-slide">
									<img src="{{ asset('img/about_pchi/2.png') }}" alt="">
								</div>

								<div class="swiper-slide">
									<img src="{{ asset('img/about_pchi/3.png') }}" alt="">
								</div>

							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="portfolio-info">
							<h3>About PTHC</h3>
							<ul>
								<li><strong>E-COMMERCE</strong></li>
								<p>
									A trailblazer in the industry and the first Filipino-made e-commerce marketplace business solution that seeks to
									revolutionize the Philippine online and technology where everyone can easily access and experience, the fastest,
									most accurate, and most reliable quality e-commerce platform.

								</p>
								<li><strong>DIGITAL SOLUTIONS</strong></li>
								<p>
									Manned by individuals with a strong sense of commitment, professionalism, and corporate intelligence in
									Information Technology which aims to connect and to upgrade the level of technological interaction of businesses
									and consumers through the advancement of our technological services in website development, office system
									solutions, digital marketing and infra solutions that gives real time quality services.
								</p>
								<li><strong>ELECTRONICS DISTRIBUTOR</strong></li>
								<p>
									Focus in advancing the needs of the present and foresee the needs of tomorrow as a one source supplier and
									distributor of quality, durable, smart and reliable electronics and gadgets in the Philippines.
								</p>
								<li><strong>DIGITAL PAYMENT GATEWAY CHANNEL</strong></li>
								<p>
									We seek to provide a digital platform where customers are provided with a variety of options to pay and online
									business owners with more opportunities to collect payment for products or services that bridges the gap between
									and among online customers, and business owners and to primarily provide ease and convenience in their
									day-to-day financial transactions.
								</p>
							</ul>
						</div>

					</div>

				</div>

			</div>
		</section><!-- End Portfolio Details Section -->

	</main><!-- End #main -->
@endsection
