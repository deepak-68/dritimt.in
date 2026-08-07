@extends('layouts.front')
@section('title', 'JagadGuru ji')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>About JagadGuru ji</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Jagadguru ji's Message</li>
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
			<div class="row d-flex flex-wrap">
				<div class="col-lg-6  text-center col-md-12 mb-4">
					<img id="jagad-guru-img" src="{{ asset('frontend/img/Jagadguru.jpg')}}">

				</div>
				<div class="col-lg-6  text-center col-md-12">
					<span class="tag">About JagadGuru Ji</span>
					<h2 class="home_about_title">
						JagadGuru Ji
					</h2>
					<p align="justify">Jagadguru Shankaracharya Jyotishpeethadhishwar Swami Shri Madhavashram Ji Maharaj of
						Badrikashram (Himalaya) is a revered spiritual leader known for his profound wisdom, simplicity, and
						dedication to the upliftment of society through knowledge and values. He has been a guiding force in
						promoting the importance of education that not only nurtures spiritual growth but also equips
						individuals with practical skills essential for modern life. Through his blessings and vision, he
						continues to inspire institutions and individuals to work towards the holistic development of
						students and society. His teachings emphasize discipline, service, and the integration of
						traditional values with contemporary education for a better and progressive future.</p>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Feautes -->
@endsection