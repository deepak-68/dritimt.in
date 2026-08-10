@extends('layouts.front')
@section('title', 'The Trust')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>The Trust</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Trust</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->


	<!-- Start Feautes -->
	<section class="trust-modern-section">
		<div class="trust-wrap">

			<!-- Title -->

			<div class="text-center">
				<span class="tag">The Trust</span>
				<h2 class="home_about_title mb-4">
					Our Legacy & Vision
				</h2>
			</div>



			<!-- Trustees -->
			<div class="trustees-row">

				<div class="trustee-card">
					<div class="trustee-img-box">
						<img src="{{ asset('frontend/img/mother.jpg') }}" alt="">
					</div>
					<h4>Late Smt. Kaushalya Devi</h4>
					<span>(Mother)</span>
				</div>

				<div class="trustee-card">
					<div class="trustee-img-box">
						<img src="{{ asset('frontend/img/father.jpg') }}" alt="">
					</div>
					<h4>Late Shri Bodh Raj</h4>
					<span>(Father)</span>
				</div>

			</div>

			<!-- Content -->
			<!-- Content -->
			<div class="trust-content">

				<div class="trust-box">
					<p align="justify">
						Dr. (CA) M.K. Mahajan is the founder of Smt. Kaushalaya Devi Memorial Educational and Charitable
						Trust (Registered), established in the loving memory of his mother, Smt. Kaushalaya Devi, and to
						fulfill the noble vision of his father, Late Shri Bodh Raj Mahajan. The trust reflects his deep
						commitment towards education, service, and social upliftment.
					</p>
				</div>

				<div class="trust-box">
					<p align="justify">
						Dr IT Group of Colleges, functioning under the aegis of the trust, is promoted by Dr ITM Limited,
						an ISO 9001:2008 certified company with a strong presence in Chandigarh, Mohali, Noida, Greater
						Noida, Jaipur, and other regions. The group is actively engaged in IT, ITES, management,
						consultancy, and professional education.
					</p>
				</div>

				<div class="trust-box">
					<p align="justify">
						The campus at Banur (Patiala), near Chandigarh, provides a high-quality educational environment with
						state-of-the-art infrastructure and modern teaching methodologies. The institution focuses on
						holistic development by integrating intellectual, moral, and spiritual learning in a vibrant
						academic atmosphere.
					</p>
				</div>

				<div class="trust-box">
					<p align="justify">
						Under the dynamic leadership of Dr Mahajan and experienced academic guidance, the institution
						ensures continuous innovation in teaching and learning. It aims to develop students into confident
						individuals capable of facing global challenges while upholding strong ethical and cultural values.
					</p>
				</div>

				<div class="trust-box">
					<p align="justify">
						Dr IT Group of Colleges is dedicated to imparting quality education in management and technology,
						combined with strong human values. The institution nurtures professionals who are skilled,
						compassionate, and innovative, empowering them to contribute meaningfully to society and shape a
						better future.
					</p>
				</div>

			</div>

		</div>
	</section>

	<!--/ End Feautes -->
@endsection