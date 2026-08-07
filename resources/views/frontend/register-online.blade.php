@extends('layouts.front')
@section('title', 'Online Registration')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Online Registration</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Online Registration</li>
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
					<span class="tag">Online Registration</span>
					<h2 class="home_about_title mb-4">
						Register Yourself with us to get<br> the best education and a bright future.
					</h2>
				</div>

				<div class="col-lg-12 col-12 online_registration">
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
					<form class="form mt-5" method="post" action="{{ route('student.store') }}" accept-charset="UTF-8">
						<input name="_token" type="hidden" value="{{ csrf_token() }}" />
						<h4 class="text-center mb-4">
							Registration Form
						</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="name">Name <span class="text-danger">*</span></label>
									<input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}"
										required="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="father_name">Father Name <span class="text-danger">*</span></label>
									<input type="text" name="father_name" id="father_name" placeholder="Father Name"
										value="{{ old('father_name') }}" required="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="mother_name">Mother Name <span class="text-danger">*</span></label>
									<input type="text" name="mother_name" id="mother_name" placeholder="Mother Name"
										value="{{ old('mother_name') }}" required="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="gender">Gender <span class="text-danger">*</span></label>
									<select name="gender" id="gender" required="">
										<option value="">---- Choose ----</option>
										<option value="Male" {{ old('gender') == 'Male' ? "selected" : "" }}>Male</option>
										<option value="Female" {{ old('gender') == 'Female' ? "selected" : "" }}>Female
										</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="dob">Date of Birth <span class="text-danger">*</span></label>
									<input type="date" name="dob" id="dob" data-date="" data-date-format="DD MM YYYY"
										value="{{ old('dob') }}">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="phone">Phone <span class="text-danger">*</span></label>
									<input type="number" name="phone" id="phone" placeholder="Phone"
										value="{{ old('phone') }}" required=""><span id="spnPhoneStatus"></span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="email">Email <span class="text-danger">*</span></label>
									<input type="email" name="email" id="email" placeholder="Email"
										value="{{ old('email') }}" required="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="category">Category <span class="text-danger">*</span></label>
									<select name="category" id="category" required="">
										<option value="">---- Choose ----</option>
										<option value="SC/ST" {{ old('category') == 'SC/ST' ? "selected" : "" }}>SC/ST
										</option>
										<option value="OBC" {{ old('category') == 'OBC' ? "selected" : "" }}>OBC</option>
										<option value="GEN" {{ old('category') == 'GEN' ? "selected" : "" }}>GEN</option>
										<option value="OTHER" {{ old('category') == 'OTHER' ? "selected" : "" }}>OTHER
										</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="hostel">Hostel Accommodation <span class="text-danger">*</span></label>
									<select name="hostel" id="hostel" required="">
										<option value="">---- Choose ----</option>
										<option value="Yes" {{ old('hostel') == 'Yes' ? "selected" : "" }}>Yes</option>
										<option value="No" {{ old('hostel') == 'No' ? "selected" : "" }}>No</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="bus_facility">Bus Facility <span class="text-danger">*</span></label>
									<select name="bus_facility" id="bus_facility" required="">
										<option value="">---- Choose ----</option>
										<option value="Yes" {{ old('bus_facility') == 'Yes' ? "selected" : "" }}>Yes</option>
										<option value="No" {{ old('bus_facility') == 'No' ? "selected" : "" }}>No</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="last_exam_passes">Last Passed Exam <span
											class="text-danger">*</span></label>
									<input type="text" name="last_exam_passes" id="last_exam_passes"
										placeholder="Last Passed Exam" value="{{ old('last_exam_passes') }}" required="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="rank">JET/JEE/AIEEE/IIT Rank</label>
									<input type="text" name="rank" id="rank" placeholder="Rank" value="{{ old('rank') }}"
										required="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="Course">Course <span class="text-danger">*</span></label>
									<select name="course" id="Course" required="">
										 <option value="" selected="selected">---- Choose ----</option>
										<!--<option value="BCA" {{ old('course') == 'BCA' ? "selected" : "" }}>BCA</option>
										<option value="BBA" {{ old('course') == 'BBA' ? "selected" : "" }}>BBA</option>
										<option value="MBA In Finance" {{ old('course') == 'MBA' ? "selected" : "" }}>MBA In
											Finance </option>
										<option value="MBA In Marketing" {{ old('course') == 'MBA In Marketing' ? "selected" : "" }}>MBA In Marketing </option>
										<option value="MBA In Human Resource" {{ old('course') == 'MBA In Human Resource' ? "selected" : "" }}>MBA In Human Resource</option>
										<option value="MCA" {{ old('course') == 'MCA' ? "selected" : "" }}>MCA</option>
										<option value="BCom Honours" {{ old('course') == 'BCom Honours"' ? "selected" : "" }}>
											BCom (Honours)</option>
										<option value="Diploma in Computer Engineering" {{ old('course') == 'Diploma in Computer Engineering' ? "selected" : "" }}>Diploma in Computer Engineering
										</option>
										<option value="Diploma in Electrical Enginerring" {{ old('course') == 'Diploma in Electrical Enginerring' ? "selected" : "" }}>Diploma in Electrical Enginerring
										</option>
										<option value="Diploma in Mechanical Engineering" {{ old('course') == 'Diploma in Mechanical Engineering' ? "selected" : "" }}>Diploma in Mechanical Engineering
										</option> -->

                                        <option value="BCA" {{ old('course') == 'BCA' ? "selected" : "" }}>BCA</option>
                                        <option value="BBA " {{ old('course') == 'BBA ' ? "selected" : "" }}>BBA </option>
                                        <option value="B.Com(hons)" {{ old('course') == 'B.Com(hons)' ? "selected" : "" }}>B.Com (Hons)</option>
                                        <option value="B.Sc. MLS" {{ old('course') == 'B.Sc. MLS' ? "selected" : "" }}>B.Sc. MLS</option>
                                        <option value="B.Sc. Radiology" {{ old('course') == 'B.Sc. Radiology' ? "selected" : "" }}>B.Sc. Radiology</option>
                                        <option value="B.Tech (CSE)" {{ old('course') == 'B.Tech (CSE)' ? "selected" : "" }}>B.Tech (CSE)</option>
                                        <option value="B.Tech (ME)" {{ old('course') == 'B.Tech (ME)' ? "selected" : "" }}>B.Tech (ME)</option>
                                        <option value="B.Tech (EE)" {{ old('course') == 'B.Tech (EE)' ? "selected" : "" }}>B.Tech (EE)</option>
                                        <option value="B.Tech (AI & ML)" {{ old('course') == 'B.Tech (AI & ML)' ? "selected" : "" }}>B.Tech (AI & ML)</option>
                                        <option value="MBA" {{ old('course') == 'MBA' ? "selected" : "" }}>MBA</option>
                                        <option value="MCA" {{ old('course') == 'MCA' ? "selected" : "" }}>MCA</option>
									</select>

								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label for="address">Address</label>
									<textarea name="address" id="address"
										placeholder="Your Address">{{ old('address') }}</textarea>
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