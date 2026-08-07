@extends('layouts.front')
@section('title', 'Anti Ragging')
@section('content')
	<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Anti Ragging</h2>
							<ul class="bread-list">
								<li><a href="{{url('/')}}">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Anti Ragging</li>
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
				    <div class="col-lg-3 col-3 text-center mt-5">
				        <h2 class="mb-3">Anti Ragging</h2>
				        </div>
					<div class="col-lg-3 col-3 text-center">
						<a href="{{ asset('frontend/img/itimt-anti-ragging.pdf')}}" target="blank">
						<img src="{{ asset('frontend/img/pdf-icon.jpg')}}" style="width:150px;">
						</a>
						
					</div>
					
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
@endsection