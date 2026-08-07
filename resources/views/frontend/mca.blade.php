@extends('layouts.front')
@section('title', 'Masters of Computer Application (MCA)')
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
								<li class="active">Masters of Computer Application (MCA)</li>
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
						<h2><span>Masters of Computer Application (MCA)</span></h2>
						<img src="{{ asset('frontend/img/MCAPG.jpg')}}" class="my-3 ">
						<p class="text-left">Dr IT Group of Institutes offers, Master of Computer Application (3 years) and Masters of Computer Applications-Lateral entry (2 years) as post-graduation courses in Computer Applications. This course prepares the students for the best & excellent job opportunities in the digital world & Information technology. The course is approved by All India Council for Technical Education (AICTE) and is affiliated to I.K. Gujral Punjab Technical University (IKGPTU), Jalandhar (Punjab). Dr IT Group of Institutes is one of the top/leading institutions near Chandigarh & is most preferred by students for Computer Science, Applications & IT education. In this digital age, the biggest of the businesses in the world are related to Computer Science & IT. Masters of Computer Applications of this institute provides excellent learning environment with best practical & project oriented exposure to students as per curriculum and industry requirement under the supervision and guidance of well qualified and experienced faculty. Computer Science and Application is a very dynamic field in which new technology is being invented with each passing day. Coping with this ever changing environment is not easy. But equipped with the most advanced syllabus MCA makes the students ready for the future. MCA is one of the most practical courses which enhances logical thinking and problem solving capabilities of students and that is what is required in the Industry.MCA students are most preferred by leading industries on attractive salary packages for different job profiles – Software Engineer, Web Developer, Web Designer, System Engineer, System Administrator, Programmer etc.</p>

						<h2 class="mt-3"><span>Eligibility for MCA (3 year Duration)</span></h2>
						<p class="text-left">Candidates with 3-Years Bachelor’s degree (completed) in any discipline with Mathematics/Statistics/Business Mathematics/Business Statistics/Quantitative Techniques at 10+2 level or at Graduation level.</p>

						<h2 class="mt-3"><span>Eligibility for MCA-LEET (2 year Duration)</span></h2>
						<p class="text-left">Under this program, Admission is directly offered to students in 2nd year of MCA. Graduation in BCA or BSC.(IT/Computer Science) from a recognized University/Institute.</p>

						<h2 class="mt-3"><span>Admission Procedure</span></h2>
						<p class="text-left">Online registration/admission through our website <a href="www.dritimt.in" target="blank"> www.dritimt.in</a>.</p>
						<p class="text-left">Offline registration/admission guidance is also available through our admission helpline.<a href="{{url('register-online')}}"> Register Online</a></p>
					</div>
					
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
@endsection		