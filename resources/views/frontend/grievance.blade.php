@extends('layouts.front')
@section('title', 'Grievance')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Grievance</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Grievance</li>
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
				<div class=" col-12 text-center">
					<span class="tag">Online Grievance</span>
					<h2 class="home_about_title mb-4">
						Submit Your Grievance with us to get<br> it resolved promptly.
					</h2>
				</div>
				<div class="col-lg-12 col-12 text-center online_registration">
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
					<form class="form mt-5" method="post" action="{{ route('student.grievance') }}" accept-charset="UTF-8">
						<h4 class="text-center mb-4">
							Grievance Form
						</h4>
						<input name="_token" type="hidden" value="{{ csrf_token() }}" />
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" name="name" placeholder="Name *" value="{{ old('name') }}"
										required="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" name="registration_no" placeholder="Registration No"
										value="{{ old('registration_no') }}" required="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="number" name="phone" id="phone" placeholder="Phone *"
										value="{{ old('phone') }}" required="">
									<span id="spnPhoneStatus"></span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="email" name="email" placeholder="Email *" value="{{ old('email') }}"
										required="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<select name="course" required="">
										<option value="">Select Course *</option>
										<option value="BCA" {{ old('course') == 'BCA' ? "selected" : "" }}>BCA</option>
										<option value="BBA " {{ old('course') == 'BBA ' ? "selected" : "" }}>BBA </option>
										<option value="B.Com(hons)" {{ old('course') == 'B.Com(hons)' ? "selected" : "" }}>
											B.Com (Hons)</option>
										<option value="B.Sc. MLS" {{ old('course') == 'B.Sc. MLS' ? "selected" : "" }}>B.Sc.
											MLS</option>
										<option value="B.Sc. Radiology" {{ old('course') == 'B.Sc. Radiology' ? "selected" : "" }}>B.Sc. Radiology</option>
										<option value="B.Tech (CSE)" {{ old('course') == 'B.Tech (CSE)' ? "selected" : "" }}>
											B.Tech (CSE)</option>
										<option value="B.Tech (ME)" {{ old('course') == 'B.Tech (ME)' ? "selected" : "" }}>
											B.Tech (ME)</option>
										<option value="B.Tech (EE)" {{ old('course') == 'B.Tech (EE)' ? "selected" : "" }}>
											B.Tech (EE)</option>
										<option value="B.Tech (AI & ML)" {{ old('course') == 'B.Tech (AI & ML)' ? "selected" : "" }}>B.Tech (AI & ML)</option>
										<option value="MBA" {{ old('course') == 'MBA' ? "selected" : "" }}>MBA</option>
										<option value="MCA" {{ old('course') == 'MCA' ? "selected" : "" }}>MCA</option>
									</select>

									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<select name="year" required="">
										<option value="">Year *</option>
										<option value="1st Year" {{ old('year') == '1st Year' ? "selected" : "" }}>1st Year
										</option>
										<option value="2nd Year" {{ old('year') == '2nd Year' ? "selected" : "" }}>2nd Year
										</option>
										<option value="3rd Year" {{ old('year') == '3rd Year' ? "selected" : "" }}>3rd Year
										</option>
										<option value="4th Year" {{ old('year') == '4th Year' ? "selected" : "" }}>4th Year
										</option>
									</select>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="complaint" placeholder="Description of the complaint In Detils *"
										required="">{{ old('complaint') }}</textarea>
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

			</div>
		</div>
	</section>
	<!--/ End Feautes -->
@endsection