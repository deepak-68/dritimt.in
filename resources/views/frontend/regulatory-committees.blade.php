@extends('layouts.front')
@section('title', 'Regulatory Committees')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Regulatory Committees</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Regulatory Committees</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->


	<!-- Start Feautes -->
	<section class="Feautes section mt-5">
		<div class="container regulatory">
			<div class="row">
				<div class=" col-12 text-center ">
					<span class="tag">Regulatory Committees </span>
					<h2 class="home_about_title mb-4">
						Regulatory Committees
					</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-12 text-center">
					
					<table class="table">
						<thead style="background-color:#f5812d; color: #fff;">
							<tr>
								<th colspan="2" class="text-center">Dr.IT School of Business</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">Grievance Redressal Committee</td>
								<td><a href="{{ asset('frontend/pdf/upload/DR.-it-school-Grievence.pdf')}}" target="_blank"> View</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">Anti Ragging Committee and Anti Ragging Squad</td>
								<td><a href="{{ asset('frontend/pdf/upload/DR.-it-school-Anti-Ragging.pdf')}}" target="_blank"> View</a></td>
							</tr>
							<tr>
								<td class="text-left">SC/ST Committee</td>
								<td><a href="{{ asset('frontend/pdf/upload/DR.-it-school-SC-ST.pdf')}}" target="_blank"> View</a></td>
							</tr>
							<tr>

								<td class="text-left">Internal Complaint Committee</td>
								<td><a href="{{ asset('frontend/pdf/upload/DR.-it-school-Internal-Complaint.pdf')}}" target="_blank"> View</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-12 text-center">
					<table class="table">
						<thead style="background-color:#f5812d; color: #fff;">
							<tr>
								<th colspan="2" class="text-center">Dr. IT Insititue Of Management &amp; Technology</th>


							</tr>
						</thead>
						<tbody>
							<tr>

								<td class="text-left">Grievance Redressal Committee</td>
								<td><a href="{{ asset('frontend/pdf/upload/Grievance-Redressal-Committee-ITMT.pdf')}}" target="_blank">
										View</a></td>
							</tr>
							<tr>

								<td class="text-left">Anti Ragging Committee and Anti Ragging Squad</td>
								<td><a href="{{ asset('frontend/pdf/upload/Anti-Ragging-Committee-ITMT.pdf')}}" target="_blank"> View</a>
								</td>
							</tr>
							<tr>

								<td class="text-left">SC/ST Committee</td>
								<td><a href="{{ asset('frontend/pdf/upload/SC-ST-OBC Committee-ITMT.pdf')}}" target="_blank"> View</a></td>
							</tr>
							<tr>

								<td class="text-left">Internal Complaint Committee</td>
								<td><a href="{{ asset('frontend/pdf/upload/Internal-Complaint-Committee-ITMT.pdf')}}" target="_blank">
										View</a></td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</section>
	<!--/ End Feautes -->
@endsection