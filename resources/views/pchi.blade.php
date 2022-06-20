@extends('layouts.header')
@section('content')
	<main id="main" data-aos="fade-up">

		<!-- ======= Breadcrumbs ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Premium Capital Holdings Inc.</h2>
					<ol>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>PCHI</li>
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
							<h3>About PCHI</h3>
							<ul>
								<li><strong>CONSTRUCTION SERVICES</strong></li>
								<p>
									We deliver its unique brand of Engineering Excellence in projects for both PPP and private sectors. As an
									infrastructure conglomerate, its scope of work includes architectural work, BIM, MEPF, Line and Grade,
									Earthworks, and property development.
									We produce premium services by building a quality, detailed, and modern outlook in every project. In today's
									highly competitive business world, we continually adapt and innovate on equipment and technology to provide the
									best results and build a better world.

								</p>
								<li><strong>LAND ACQUISITION</strong></li>
								<p>
									We envision to be a world-class developer of premium developments, forefront in sustainable and innovation to
									inspire and elevate the quality of life of every Filipino through thoughtfully designed real-estate.
								</p>
								<li><strong>SHIPYARD SERVICES</strong></li>
								<p>
									We provide the first shipyard in Eastern Visayas and the first to utilize marine airbag technology in Visayas
									province. Build ships with premium quality and innovative designs which are cost effective and affordable to
									Philippine market. Prompts delivery of vessels, ship building products and ship repair mechanical works and
									services.
								</p>
							</ul>
						</div>

					</div>

				</div>

			</div>
		</section><!-- End Portfolio Details Section -->

	</main><!-- End #main -->
@endsection
