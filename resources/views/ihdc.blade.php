@extends('layouts.header')
@section('content')
	<main id="main" data-aos="fade-up">

		<!-- ======= Breadcrumbs ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Industry Holdings & Development Corporation</h2>
					<ol>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>IHDC</li>
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
							<h3>About IHDC</h3>
							<ul>
								<li><strong>PRECAST, AGGREGATES AND CEMENTS</strong></li>
								<p>
									One of the leading and largest suppliers, our company aims to make a positive impact through a sustainable and
									socio-economic business approach to be able to cater to the growing market of construction materials.
									Our products include Aggregates, Pre-cast, Cement and Asphalt. We are proud of our extensive work of logistics
									capabilities that can offer widest customer reach for both our locals and international clients.
								</p>
								<li><strong>FREIGHT FORWARDER</strong></li>
								<p>
									We envision to be a world-class developer of premium developments, forefront in sustainable and innovation to
									inspire and elevate the quality of life of every Filipino through thoughtfully designed real-estate.
								</p>
							</ul>
						</div>

					</div>

				</div>

			</div>
		</section><!-- End Portfolio Details Section -->

	</main><!-- End #main -->
@endsection
