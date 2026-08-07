@extends('layouts.front')
@section('title', 'CEO\'s Message')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>CEO's Message</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">CEO's Message</li>
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
								<img src="{{ asset('frontend/img/infrastructure/deepti-batra.JPG')}}">
							</div>
							<div class="card-body">
								<h4 class="card-title">Ms. Deepti Mahajan </h4>
								<p class="card-text">CEO, Dr IT Group of Colleges</p>
							</div>

						</div>
					</div>
					<!-- End Choose Left -->
				</div>
				<div class="col-lg-7 col-12">
					<!-- Start Choose Rights -->
					<span class="tag">About CEO</span>
					<h2 class="home_about_title">
						Ceo's Message
					</h2>
					<div class="choose-right text-center">

						<p class="text" align="justify">
							Welcome to DR IT Group of Colleges, Banur
							<br>
							At DR IT Group of Colleges, our mission is to nurture the leaders of tomorrow through excellence
							in education, innovation, and holistic development. We believe that every student has the
							potential to make a mark in their field, and our commitment is to provide an environment that
							fosters creativity, critical thinking, and practical learning.
							<br>
							As the CEO of DR IT Group of Colleges, I am immensely proud of the strides we have made in
							shaping the future of our students. We are dedicated to maintaining the highest academic
							standards, integrating modern technologies, and building a community that thrives on mutual
							respect, collaboration, and excellence.
							<br>
							Our focus is not only on imparting knowledge but also on empowering students with the skills and
							experiences that will guide them to success in their personal and professional lives. The world
							is changing rapidly, and so are we. Through our industry partnerships, state-of-the-art
							infrastructure, and dedicated faculty, we prepare our students to navigate these challenges and
							emerge as well-rounded professionals.
							<br>
							As we continue our journey, I invite you to explore our programs, our campus, and the vibrant
							community that makes DR IT Group of Colleges a place of opportunity and growth.
							Let’s work together to create a bright future for all.
							<br>
							Warm Regards,
							<br>
							<b>Deepti Mahajan</b>
							<br>
							<b>CEO, DR IT Group of Colleges, Banur</b>


						</p><br>


					</div>
					<!-- End Choose Rights -->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Feautes -->
@endsection