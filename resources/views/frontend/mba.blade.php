@extends('layouts.front')
@section('title', 'Business Administration')
@section('content')
	<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>MCA</h2>
							<ul class="bread-list">
								<li><a href="{{url('/')}}">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Business Administration</li>
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
					<div class="col-lg-12 col-12 text-center">
						<h2><span>Business Administration</span></h2>
						<img src="{{ asset('frontend/img/MBM.jpg')}}" class="my-3 ">
						
						<h2 class="mt-3"><span>Masters of Business Administration(MBA)</span></h2>
						<p class="text-left">Dr IT School of Business offers, full-time two years degree course in Masters of Business Administration; spread over 4 semesters. The course is approved by All India Council for Technical Education (AICTE) & affiliated to I.K. Gujral Punjab Technical University (IKGPTU), Jalandhar (Punjab). Dr IT Group of Institutes is one of the top MBA colleges in the region & located near Chandigarh. Our MBA program is for the candidates who aspire to build a successful career in the global business arena. Combining best career opportunities, academic excellence and real-world industrial experience, our MBA program will leave a positive impact on your management career. This program is highly practical that runs under the guidance of well qualified and experienced faculty. The course imparts skills of management; develops managerial and administrative skills; fosters leadership qualities, and inculcates professional ethics and human values. Compulsory training and project work are the highlights of all specializations.</p>

						<h2 class="text-left mt-3"><span>Eligibility Criteria for Admission:</span></h2>
						<p class="text-left">Those candidates who have any recognized Bachelor’s Degree of minimum 3 years duration in any discipline are eligible for admission.</p>

						<h2 class="mt-3"><span>Admission Procedure:</span></h2>
						<p class="text-left">Admissions are on the basis of Graduation Marks/ MAT conducted by AIMA or CAT score. For management quota seats,<a href="{{url('register-online')}}"> Register Online</a></p>

                        <h2 class="text-left mt-3"><span>Specializations Offered in MBA</span></h2>
						<img src="{{ asset('frontend/img/FMH.jpg')}}" class="my-3 ">

						<h2 class="text-left mt-3"><span>Finance</span></h2>
						<img src="{{ asset('frontend/img/FinHR.FMH')}}" class="my-3 ">
						<p class="text-left">This specialization provides skills in financial analysis and covers areas like international finance, banking and insurance operations, global capital markets, management control system and financial engineering. The program is based upon case studies and interaction with business executives and financial analysts as regular feature, as well as visits to financial organizations and stock market.</p>

						<h2 class="text-left mt-3"><span>Marketing</span></h2>
						<img src="{{ asset('frontend/img/MktHR.jpg')}}" class="my-3 ">
						<p class="text-left">This specialization provides skills in areas like service marketing, international marketing, sales and distribution management, logistics management and customer relationship management. The program is based upon case studies and interaction with business icons as well as visits to industrial units, as regular feature.</p>

						<h2 class="text-left mt-3"><span>Human Resource</span></h2>
						<img src="{{ asset('frontend/img/MBAHR.jpg')}}" class="my-3 ">
						<p class="text-left">This specialization covers subjects like organization development, international human resource management, industrial relations including labor laws, people management and leadership as well as stress managements. The module includes case studies and interaction with business and industrial executives as well as visits to business/industrial units as regular feature. Experts from universities and research organizations are invited for expert tips to the students about the manner in which employees and workers should be guided, counseled and handled for getting best possible results.</p>
					</div>
					
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
@endsection		