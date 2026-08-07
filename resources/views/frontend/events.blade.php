@extends('layouts.front')
@section('title', 'Events')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Events Information</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Events</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	<section class="news-section">
		<div class="container">

			<div class=" section-header section-title">
				<div>
					<span class="tag">WHAT'S NEW</span>
					<h2>Latest Events</h2>
				</div>


			</div>

			<div class="row g-4 mt-3">

				<!-- News Card -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="news-card">

						<img src="{{ asset('frontend/img/holi.jpeg') }}" class="img-fluid">

						<div class="news-content">

							<span class="news-tag">Celebration</span>

							<h5>Holi Celebration </h5>

							<p class="news-date">March 04, 2026</p>

							<p>Holi was celebrated with great enthusiasm at Dr. IT Group of Colleges, spreading colors of
								joy and unity. </p>

						</div>
					</div>
				</div>


				<div class="col-lg-4 col-md-6 mb-4">
					<div class="news-card">

						<img src="{{ asset('frontend/img/drit-01.jpg') }}" class="img-fluid">

						<div class="news-content">

							<span class="news-tag">Conference</span>

							<h5>International Conference </h5>

							<p class="news-date">March 12, 2026</p>

							<p>The International Conference on Sustainable Growth brought together experts and academicians
								for insightful discussions.</p>

						</div>
					</div>
				</div>


				<div class="col-lg-4 col-md-6 mb-4">
					<div class="news-card">

						<img src="{{ asset('frontend/img/lohri.jpg') }}" class="img-fluid">

						<div class="news-content">

							<span class="news-tag">Celebration</span>

							<h5>Lohri Celebration </h5>

							<p class="news-date">January 5, 2026</p>

							<p>Lohri was celebrated with traditional zeal, featuring a bonfire and cultural performances.
							</p>

						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="news-card">

						<img src="{{ asset('frontend/img/infosys.jpg') }}" class="img-fluid">

						<div class="news-content">

							<span class="news-tag">Collaboration</span>

							<h5>MoU Signing with Solitaire Infosys </h5>

							<p class="news-date">April 4, 2026</p>

							<p>The Memorandum of Understanding (MoU) was signed between our institution and Solitaire Infosys to foster collaboration in the field of education and research.
							</p>

						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="news-card">

						<img src="{{ asset('frontend/img/republic.jpg') }}" class="img-fluid">

						<div class="news-content">

							<span class="news-tag">Celebration</span>

							<h5>Republic Day Celebration  </h5>

							<p class="news-date">January 26, 2026</p>

							<p>Republic Day was celebrated with great enthusiasm at Dr. IT Group of Colleges, showcasing the spirit of unity and patriotism.
							</p>

						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="news-card">

						<img src="{{ asset('frontend/img/sukhmani.jpg') }}" class="img-fluid">

						<div class="news-content">

							<span class="news-tag">Celebration</span>

							<h5>Sukhmani Sahib Path  </h5>

							<p class="news-date">March 27, 2026</p>

							<p>A Sukhmani Sahib Path was organized to promote peace and spiritual well-being. The event created a calm and positive atmosphere on campus.
							</p>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Start Feautes -->
	<!-- <section class="Feautes section mt-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-12">
							<h2 class="mb-3">Events Information</h2>
						</div>
					</div>
					@forelse ($events as $event)

					<div class="row" id="event_row">
						<div class="col-md-2" id="event_title">
							<h4 class="mb-3">{{ \Carbon\Carbon::parse($event->start_date)->format('D')  }}</h4>
							<h4>{{ \Carbon\Carbon::parse($event->start_date)->format('d M')  }}</h4>
						</div>
						<div class="col-md-10" id="event_text">
							<h5 class="mb-3">{{ $event->title }}</h5>
							<p><b>Date: </b>{{ \Carbon\Carbon::parse($event->start_date)->format('d-m-Y')  }} To {{ \Carbon\Carbon::parse($event->end_date)->format('d-m-Y')  }}</p>
							<p><b>Detail: </b>{{ $event->description }}</p>
						</div>
					</div>

					 @empty
						<div class="row text-center" id="event_row">
						  <div class="col-my-3">
							<h4 class="mb-3">No Event Found</h4>
						</div>
						</div>
					@endforelse

				</div>
			</section> -->

@endsection