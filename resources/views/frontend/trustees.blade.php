@extends('layouts.front')
@section('title', 'Trustees')
@section('content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Trustees</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Trustees</li>
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
				<div class="col-12 text-center">
					<span class="tag">About Trustees</span>
					<h2 class="home_about_title">
						Guiding Minds Behind Us
					</h2>
				</div>
				<!-- <div class="col-lg-12 col-12 text-center">
						<img src="{{ asset('frontend/img/trustee.jpg')}}">

					</div> -->
				<div class="col-lg-3 mb-4">
					<div class="card card-trustees shadow d-flex text-center justify-center">
						<div class="img-card ">
							<img class=" w-100" src="{{ asset('frontend/img/chairman-sir.jpg')}}" alt="img" style="max-height:241px;">
						</div>
						<div class="card-body">
							<h5 class="card-title">CA (Dr.) M.K. Mahajan</h5>
						</div>

					</div>
				</div>
				<div class="col-lg-3 mb-4">
					<div class="card card-trustees shadow d-flex text-center justify-center">
						<div class="img-card">
							<img class=" w-100" src="{{ asset('frontend/img/infrastructure/rekha.jpg')}}" alt="img" style="max-height:241px;">
						</div>
						<div class="card-body">
							<h5 class="card-title">Mrs. Rekha Mahajan</h5>
						</div>

					</div>
				</div>
				<div class="col-lg-3 mb-4">
					<div class="card card-trustees shadow d-flex text-center justify-center">
						<div class="img-card ">
							<img class=" w-100" src="{{ asset('frontend/img/infrastructure/shilpa.jpg')}}" alt="img" style="max-height:241px;">
						</div>
						<div class="card-body">
							<h5 class="card-title">Mrs. Shilpa Mahajan</h5>
						</div>

					</div>
				</div>
				<div class="col-lg-3 mb-4">
					<div class="card card-trustees shadow d-flex text-center justify-center">
						<div class="img-card ">
							<img class=" w-100" src="{{ asset('frontend/img/infrastructure/deepti.jpg')}}" alt="img" style="max-height:241px;">
						</div>
						<div class="card-body">
							<h5 class="card-title">Mrs. Deepti Batra</h5>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Feautes -->
@endsection