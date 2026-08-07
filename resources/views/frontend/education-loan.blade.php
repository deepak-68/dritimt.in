@extends('layouts.front')
@section('title', 'Education Loan')
@section('content')
	<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Education Loan</h2>
							<ul class="bread-list">
								<li><a href="{{url('/')}}">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Education Loan</li>
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
					<div class="col-lg-12 col-12 online_registration p-4">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<h3>Education Loan</h3>
							<p>We assist students in securing financial support for their studies through trusted banking partners.<br> Fill out the form below and our team will guide you through the process.</p>
							@if ($errors->any())
						     @foreach ($errors->all() as $error)
						         <div class="text-danger text-center">{{$error}}</div>
						     @endforeach
							 @endif
							 @if(session()->has('success'))
						    <div class="text-success text-center">
						        {{ session()->get('success') }}
						    </div>
						     @endif
						     @if(session()->has('error'))
						    <div class="text-danger text-center">
						        {{ session()->get('error') }}
						    </div>
						     @endif	
							<!-- Form -->
								<form class="form mt-3" method="post" action="{{ route('student.request') }}" accept-charset="UTF-8"><input name="_token" type="hidden" value="{{ csrf_token() }}"/>
									<input name="type" type="hidden" value="Loan"/>
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="name" placeholder="Name *" value="{{ old('name') }}" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="number" name="phone" id="phone" placeholder="Phone *" value="{{ old('phone') }}" required="">
												<span id="spnPhoneStatus"></span>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email *" value="{{ old('email') }}" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="address" placeholder="Address" value="{{ old('address') }}">
											</div>
										</div>
										<div class="col-lg-12">
										  <div class="form-group">
										   <select name="course" required="">
										   	<option value="">Select Course *</option>
										  	<option value="MBA In Finance" {{ old('course') == 'MBA In Finance' ? "selected" : "" }}>MBA In Finance </option>
											<option value="MBA In Marketing" {{ old('course') == 'MBA In Marketing' ? "selected" : "" }}>MBA In Marketing </option>
											<option value="MBA In Human Resource" {{ old('course') == 'MBA In Human Resource' ? "selected" : "" }}>MBA In Human Resource</option>
											<option value="MCA" {{ old('course') == 'MCA' ? "selected" : "" }}>MCA</option>
											<option value="BCA" {{ old('course') == 'BCA' ? "selected" : "" }}>BCA</option>
											<option value="BBA" {{ old('course') == 'BBA' ? "selected" : "" }}>BBA</option>
											<option value="BCom Honours" {{ old('course') == 'BCom Honours' ? "selected" : "" }}>BCom (Professionals)</option>
											<option value="BMS (ATH)" {{ old('course') == 'BMS (ATH)' ? "selected" : "" }}>BMS (ATH)</option>
											<option value="PGDCA" {{ old('course') == 'PGDCA' ? "selected" : "" }}>PGDCA</option>
											<option value="Diploma in Computer Engineering" {{ old('course') == 'Diploma in Computer Engineering' ? "selected" : "" }}>Diploma in Computer Engineering</option>
											<option value="Diploma in Electrical Enginerring" {{ old('course') == 'Diploma in Electrical Enginerring' ? "selected" : "" }}>Diploma in Electrical Enginerring </option>
											<option value="Diploma in Mechanical Engineering" {{ old('course') == 'Diploma in Mechanical Engineering' ? "selected" : "" }}>Diploma in Mechanical Engineering </option>
							    		</select>

											</select>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Submit</button>
											</div>
										</div>
									</div>
								</form>
								<!--/ End Form -->

						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
@endsection	