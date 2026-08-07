@extends('layouts.front')
@section('title', 'Alumni')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Alumni</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Alumni</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Feautes -->
	<section class="Feautes section mt-5">
		<div class="container">
			<div class="row">
				<div class=" col-12 text-center ">
					<span class="tag">Our Alumni </span>
					<h2 class="home_about_title mb-4">
						Once Our Students,<br> Forever Our Pride
					</h2>

				</div>
			</div>
		</div>
		<div class="container ">
			<div class="row g-4">

				<!-- Card Start -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="placement-card-page h-100">

						<div class="student-img">
							<img src="{{ asset('frontend/img/upload/alumni-tarvinder.jpg') }}" alt="Student">
						</div>

						<div class="placement-content-page p-4">
							<h4>TARVINDER SINGH , MANAGER</h4>
							<p class="course">META 3 INFOTECH</p>

							
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="placement-card-page h-100">

						<div class="student-img">
							<img src="{{ asset('frontend/img/upload/alumni-mitali.jpg') }}" alt="Student">
						</div>

						<div class="placement-content-page p-4">
							<h4>MITALI , SOCIAL MEDIA EXECUTIVE</h4>
							<p class="course">YCENETWORK</p>

							
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="placement-card-page h-100">

						<div class="student-img">
							<img src="{{ asset('frontend/img/upload/alumni-parveen.jpg') }}" alt="Student">
						</div>

						<div class="placement-content-page p-4">
							<h4>NAAZO  PRAVEEN  , ASSOCIATE</h4>
							<p class="course">JEENA SEEKHO HEALTH CARE</p>

							
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="placement-card-page h-100">

						<div class="student-img">
							<img src="{{ asset('frontend/img/upload/alumni-sanjana.jpg') }}" alt="Student">
						</div>

						<div class="placement-content-page p-4">
							<h4>SANJANA   , OPERATOR </h4>
							<p class="course">G S ALLOY INDUSTRIES</p>

							
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="placement-card-page h-100">

						<div class="student-img">
							<img src="{{ asset('frontend/img/upload/alumni-simranpreet.jpg') }}" alt="Student">
						</div>

						<div class="placement-content-page p-4">
							<h4>SIMRANPREET , OPERATOR </h4>
							<p class="course">SOOD PLASTIC     </p>

							
						</div>

					</div>
				</div>
				<!-- Card End -->

			</div>
		</div>

	</section>
	<!--/ End Feautes -->
	
@endsection