@extends('layouts.front')
@section('title', 'AICTE Approval Letter')
@section('content')
	<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>AICTE Approval letter</h2>
							<ul class="bread-list">
								<li><a href="{{url('/')}}">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">AICTE Approval letter</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
						


	
		<section class="Feautes section mt-5">
			<div class="container">
			   <div class="table table-responsive">
			<table class="table table-bordered text-center">
			    <thead>
			        <tr>
			            <th>S.No.</th>
			            <th>Particulars</th>
			            <th>Download</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td style="vertical-align: middle !important;">1. </td>
			            <td style="vertical-align: middle !important;">AICTE Approval letter  2025-26</td>
			            <td style="vertical-align: middle !important;"><a href="https://www.dritimt.in/frontend/pdf/DR%20IT%20IMT%20EOA%20Report%202025-2026.PDF" target="_blank"><button class="btn primary" type="button">View</button></a></td>
			        </tr>
			        <tr>
			            <td style="vertical-align: middle !important;">2. </td>
			            <td style="vertical-align: middle !important;">AICTE Approval letter  2024-25</td>
			            <td style="vertical-align: middle !important;">	<a href="https://www.dritimt.in/frontend/pdf/LOA%20Report%202024-2025.PDF" target="_blank"><button class="btn primary" type="button"> View</button></a></td>
			        </tr>
			    </tbody>
			</table>
			</div>
			</div>
		</section>
@endsection