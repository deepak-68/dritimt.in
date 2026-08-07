@extends('layouts.front')
@section('title', 'About Us')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>About Us</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->




	<!-- about us section  -->
	<section class="about-section">
		<div class="container">

			<div class="row align-items-center">

				<!-- LEFT IMAGE -->
				<div class="col-lg-6 mb-4 mb-lg-0">

					<div class="about-img">

						<img src="{{ asset('frontend/img/about-2.jpg') }}" class="img-fluid">

						<div class="experience-box">
							<h4 class="text-white">25+</h4>
							<span>Years of Excellence</span>
						</div>

					</div>

				</div>


				<!-- RIGHT CONTENT -->
				<div class="col-lg-6">

					<span class="tag">ABOUT US</span>

					<h2 class="home_about_title">
						Why Students Choose Us for <br>
						Gaining Their Knowledge
					</h2>

					<p class="home_about_text" align="justify">
						About Dr IT Group of Colleges When it comes to quality education, Dr IT Group of Colleges is a
						strong brand the ISO 9001-2015 certified Dr ITM Limited Group is the parent of Dr IT Group of
						Colleges.

						Facilities and location: Dr IT Group of Colleges is situated in a pristine environmentally friendly,
						pollution-free area, Banur near Chandigarh, It is a perfect place for quality education to be
						imparted for the overall development of human beings.
						<br><br>
						The Teaching-learning process is supported with disruption infrastructure and innovative
						methodology. Through these we aim at balanced development in students. Our special features Dr IT
						Group of Colleges carry the ISO 9001-2015 certification.

						We operate in a world - class infrastructure. The distinctive characteristic of Dr IT Group of
						Colleges is that it not only imparts education but also helps the students get jobs. So, finding a
						job will not be a problem anymore. We assure the students and their guardians of all our assistance
						in getting work.

					</p>







				</div>

			</div>
		</div>
	</section>
	<!-- end about section -->
	<!-- Start Feautes -->
	
	<!-- Start Feautes -->
	<section class="mv-section">
		<div class="mv-container">
			<span class="tag">Mission &amp; Vision</span>
			<h2 class="home_about_title mb-4">
				Vision That Inspires,<br> Mission That Delivers
			</h2>

			<div class="mv-wrapper">

				<!-- Mission -->
				<div class="mv-card mv-card-mission">
					<div class="mv-icon"><i class="icofont-bullseye"></i></div>
					<h3>Mission</h3>
					<p>
						To create globally competent, ethical, and innovative professionals through excellence in education.
					</p>
				</div>

				<!-- Vision -->
				<div class="mv-card mv-card-vision">
					<div class="mv-icon"><i class="icofont-eye-alt"></i></div>
					<h3>Vision</h3>
					<p>
						To deliver quality education with practical skills, innovation, and strong moral values for holistic
						student development.
					</p>
				</div>

				<!-- Values -->
				<div class="mv-card mv-card-values">
					<div class="mv-icon"><i class="icofont-handshake-deal"></i></div>
					<h3>Values</h3>
					<p>
						Excellence, Integrity, Innovation, Discipline, Inclusivity, and Social Responsibility.
					</p>
				</div>

			</div>
		</div>
	</section>
	<!-- end mission vision -->


	<section class="about-section">
		<div class="container">

			<div class="row align-items-center">


				<!-- RIGHT CONTENT -->
				<div class="col-lg-6">

					<span class="tag">BENEFITS</span>

					<h2 class="home_about_title">
						Why  Choose Us 
					</h2>

					<p class="home_about_text" align="justify">
						About Dr IT Group of Colleges When it comes to quality education, Dr IT Group of Colleges is a
						strong brand the ISO 9001-2015 certified Dr ITM Limited Group is the parent of Dr IT Group of
						Colleges.

						Facilities and location: Dr IT Group of Colleges is situated in a pristine environmentally friendly,
						pollution-free area, Banur near Chandigarh, It is a perfect place for quality education to be
						imparted for the overall development of human beings.
						<br><br>
						The Teaching-learning process is supported with disruption infrastructure and innovative
						methodology. Through these we aim at balanced development in students. Our special features Dr IT
						Group of Colleges carry the ISO 9001-2015 certification.

						We operate in a world - class infrastructure. The distinctive characteristic of Dr IT Group of
						Colleges is that it not only imparts education but also helps the students get jobs. So, finding a
						job will not be a problem anymore. We assure the students and their guardians of all our assistance
						in getting work.

					</p>







				</div>
				<!-- LEFT IMAGE -->
				<div class="col-lg-6 mb-4 mb-lg-0">

					<div class="about-img">

						<img src="{{ asset('frontend/img/course-04.jpg') }}" class="img-fluid w-100">

						

					</div>

				</div>



			</div>
		</div>
	</section>
@endsection