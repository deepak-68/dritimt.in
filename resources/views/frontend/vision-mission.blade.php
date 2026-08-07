@extends('layouts.front')
@section('title', 'Vision and Mission')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Vision and Mission</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Vision and Mission</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->


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

@endsection