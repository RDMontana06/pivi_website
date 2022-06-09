@extends('layouts.header')
@section('content')
	<main id="main" data-aos="fade-up">

		<!-- ======= Breadcrumbs ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Premium Capital Holdings Inc.</h2>
					<ol>
						<li><a href="index.html">Home</a></li>
						<li>PCHI</li>
					</ol>
				</div>

			</div>
		</section><!-- End Breadcrumbs -->

		<section id="portfolio-details" class="portfolio-details">
			<div class="container">

				<div class="row gy-4">

					<div class="col-lg-8">
						<div class="portfolio-details-slider swiper">
							<div class="swiper-wrapper align-items-center">

								<div class="swiper-slide">
									<img src="{{ asset('img/portfolio/portfolio-details-1.jpg') }}" alt="">
								</div>

								<div class="swiper-slide">
									<img src="{{ asset('img/portfolio/portfolio-details-2.jpg') }}" alt="">
								</div>

								<div class="swiper-slide">
									<img src="{{ asset('img/portfolio/portfolio-details-3.jpg') }}" alt="">
								</div>

							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>

					<div class="col-lg-4">
						{{-- <div class="portfolio-info">
							<h3>Holdings information</h3>
							<ul>
								<li><strong>Category</strong>: Web design</li>
								<li><strong>Client</strong>: ASU Company</li>
								<li><strong>Project date</strong>: 01 March, 2020</li>
								<li><strong>PCHI Website</strong>: <a href="#">www.example.com</a></li>
							</ul>
						</div> --}}
						<div class="portfolio-description">
							<h2>This is an example of portfolio detail</h2>
							<p>
								Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia.
								Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium
								nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
							</p>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Portfolio Details Section -->

	</main><!-- End #main -->
@endsection