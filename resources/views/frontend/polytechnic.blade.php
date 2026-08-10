@extends('layouts.front')
@section('title', 'Polytechnic')
@section('content')
	<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Diploma</h2>
							<ul class="bread-list">
								<li><a href="{{url('/')}}">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Polytechnic</li>
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
						<h2><span>Diploma in Computer Science Engineering</span></h2>
						<img src="{{ asset('frontend/img/CSEP.jpg')}}" class="my-3 ">
						<p class="text-left">Computer Science engineering (CSE) deals with design, implementation, and management of information system of both software & hardware processes. A computer scientist specializes in the theory of computation and design of computational systems. The diploma in Computer Science Engineering at Dr IT College of Polytechnic is approved by AICTE and is affiliated to Punjab State Board of Technical Education and Industrial Training. The course duration is three years divided into 6 semesters.</p>

						<h2 class="mt-3"><span>Recruitment</span></h2>
						<p class="text-left">After the completion of the diploma in Computer Science Engineering, the students are able to work as software engineer, hardware engineer, networking engineer, software tester, App developer, web designer etc. These jobs are available in both public as well as private sector.</p>

						<h2 class="mt-3"><span>Eligibility Criteria</span></h2>
						<p class="text-left">(i) 10th pass students from any recognized Board/Council/University with Science, Mathematics and English as compulsory subject are eligible for admission.<br><br>
						(ii) 10th pass students with Science, Maths and English as compulsory.</p>
					</div>
					
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
@endsection		