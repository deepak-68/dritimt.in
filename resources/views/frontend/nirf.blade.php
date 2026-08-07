@extends('layouts.front')
@section('title', 'NIRF')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>NIRF</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">NIRF</li>
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
					<span class="tag">NIRF </span>
					<h2 class="home_about_title mb-4">
						NIRF Rankings & Accreditation - 2021
					</h2>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-12 text-center">
					
					<a href="{{ asset('frontend/pdf/Dr_IT Business school_jalalapur20210203OVERALL.pdf')}}" target="blank">
						<img src="{{ asset('frontend/img/college_1.jpg')}}" width="600" height="172">
					</a>
					
				</div>
				<div class="col-lg-6 col-12 text-center">
					
					<a href="{{ asset('frontend/pdf/Dr_ IT Business school_Jalalapur20210203MANAGEMENT.pdf')}}"
						target="blank">
						<img src="{{ asset('frontend/img/manage.jpg')}}" width="600" height="172">
					</a>
					
					
				</div>
				<div class="col-lg-6 col-12 text-center">
					
					<a href="{{ asset('frontend/pdf/Dr_IT Business school_jalalapur20210203OVERALL.pdf')}}" target="blank">
						<img src="{{ asset('frontend/img/overall.jpg')}}" width="600" height="172">
					</a>
					
					
				</div>

			</div>
		</div>
	</section>
	<!--/ End Feautes -->
@endsection