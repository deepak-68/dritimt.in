@extends('layouts.front')
@section('title', ' Principal / Director\'s Message')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Principal / Director's Message</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Director's Message</li>
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
				<div class="col-lg-4 col-12 mb-4">
					<!-- Start Choose Left -->
					<div class="choose-left">
						<div class="card card-ca shadow d-flex text-center justify-center">
							<div class="img-card">
								<img src="{{ asset('frontend/img/principal.jpeg')}}">
							</div>
							<div class="card-body">
								<h4 class="card-title">Dr. Yogesh Chabra</h4>
								<p class="card-text">Principal, Dr IT Group of Colleges</p>
							</div>

						</div>
					</div>
					<!-- End Choose Left -->
				</div>
				<div class="col-lg-8 col-12">
					<!-- Start Choose Rights -->
					<!-- Start Choose Rights -->
					<span class="tag">About Principal</span>
					<h2 class="home_about_title">
						Principal’s Message
					</h2>
					<div class="choose-right">
						<p align="justify">
							At Dr IT Group of Colleges, we are committed to delivering quality education that empowers
							students to achieve academic excellence and build successful careers. Backed by Dr ITM Limited
							Group, the institution stands as a trusted name in higher education.
							<br>
							Located in the serene and eco-friendly surroundings of Banur near Chandigarh, our campus
							provides an ideal environment for focused learning and overall development. We believe that the
							right atmosphere plays a vital role in shaping confident and capable individuals.
							<br>
							Our teaching-learning process is driven by modern infrastructure and innovative methodologies
							that ensure a balanced blend of theoretical knowledge and practical exposure. We focus on
							nurturing skills, creativity, and critical thinking to prepare students for real-world
							challenges.
							<br>
							At Dr IT Group of Colleges, we go beyond academics by emphasizing career readiness. With
							dedicated placement support and industry-oriented training, we ensure that students are
							well-prepared to secure rewarding opportunities and succeed in their professional journey.
							We remain committed to guiding our students towards excellence and helping them build a strong
							foundation for a bright and successful future.

						</p><br>
						<b>-- Dr. Yogesh Chabra</b>
					</div>
					<!-- End Choose Rights -->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Feautes -->
@endsection