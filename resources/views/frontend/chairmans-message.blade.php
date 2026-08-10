@extends('layouts.front')
@section('title', 'Chairman’s Message')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Chairman’s Message</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Chairman’s Message</li>
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
				<div class="col-lg-5 col-12 mb-4">
					<!-- Start Choose Left -->
					<div class="choose-left">
						<div class="card card-ca shadow d-flex text-center justify-center">
							<div class="img-card">
								<img src="{{ asset('frontend/img/chairman-sir.jpg')}}">
							</div>
							<div class="card-body">
								<h4 class="card-title">CA (Dr.) M.K. Mahajan</h4>
								<p class="card-text">Chairman, Dr IT Group of Colleges</p>
							</div>

						</div>
					</div>
					<!-- End Choose Left -->
				</div>
				<div class="col-lg-7 col-12">
					<!-- Start Choose Rights -->
					<span class="tag">About Chairman</span>
					<h2 class="home_about_title">
						Chairman’s Message
					</h2>
					<div class="choose-right text-center">

						<p class="text" align="justify">
							At Dr IT Group of Colleges, we firmly believe that education is the most powerful tool to shape
							not only successful careers but also responsible and enlightened individuals. Our vision is to
							create a dynamic learning environment where knowledge, innovation, and values come together to
							prepare students for the challenges of an ever-evolving world.
							<br>
							In today’s competitive and fast-changing global landscape, education must go beyond textbooks
							and classrooms. It should inspire curiosity, encourage critical thinking, and develop the
							ability to adapt and lead. At our institution, we are committed to delivering an education that
							is both academically rigorous and practically relevant, enabling students to transform their
							ideas into meaningful contributions to society.
							<br>
							We place equal emphasis on intellectual growth and character building. Along with professional
							competence, we strive to instill strong moral and ethical values such as integrity, respect,
							empathy, and social responsibility. We believe that true success is achieved when knowledge is
							guided by wisdom and values, and when individuals use their capabilities for the greater good.
							Our institution is equipped with modern infrastructure, advanced learning resources, and a team
							of dedicated faculty members who are passionate about mentoring and guiding students. Through
							innovative teaching methodologies, industry exposure, and skill-based learning, we ensure that
							our students are well-prepared to meet global standards and excel in their chosen fields.
							<br>
							At Dr IT Group of Colleges, we also focus on fostering a culture of innovation, creativity, and
							continuous improvement. We encourage students to think independently, take initiative, and
							explore new possibilities. Our goal is to nurture future leaders, entrepreneurs, and
							professionals who are confident, competent, and capable of making a positive impact in the
							world.
							<br>
							I urge all students to make the most of the opportunities available to them. Stay dedicated,
							remain curious, and never hesitate to take the first step towards your dreams. Success does not
							come to those who wait—it comes to those who act with determination and purpose.
							<br>
							As we continue our journey of excellence, we remain committed to providing quality education and
							shaping bright futures. I extend my heartfelt blessings and best wishes to all students and
							members of the Dr IT family for their continued success and growth.

						</p><br>


					</div>
					<!-- End Choose Rights -->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Feautes -->
@endsection