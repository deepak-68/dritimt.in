@extends('layouts.front')
@section('title', 'Post Graduate (MBA/MCA)')

@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Post Graduate (MBA/MCA)</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Post Graduate</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	<section class="pg-courses py-5">
		<div class="container">


			<div class="row">
				<div class=" col-12 text-center ">
					<span class="tag">Post Graduate Courses </span>
					<h2 class="home_about_title mb-4">
						Postgraduate Programs
					</h2>
				</div>
			</div>

			<div class="row g-4">

				<!-- MCA Course Card -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-02.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>MCA (Master of Computer Applications)</h5>
							<p>Duration: 2 Years</p>

							<button class="btn btn-primary" onclick="openModal(
						'MCA (Master of Computer Applications)',
						'2 Years',
						'Graduation degree',
						`The Master of Computer Applications (MCA) program at Dr IT Group of Colleges is a postgraduate course designed to prepare students for dynamic careers in the field of Computer Science and Information Technology. Approved by AICTE and affiliated with I.K. Gujral Punjab Technical University (IKGPTU), the program offers both regular (3 years) and lateral entry (2 years) options. It focuses on practical, project-based learning, enhancing students’ logical thinking, problem-solving abilities, and technical expertise. With guidance from experienced faculty and exposure to the latest industry trends, students are equipped to excel in roles such as Software Engineer, Web Developer, System Analyst, and more in the rapidly evolving digital world.`
					)">
								View Details
							</button>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-13.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>MCA (Lateral Entry)</h5>
							<p>Duration: 1 Years</p>

							<button class="btn btn-primary" onclick="openModal(
						'MCA (Master of Computer Applications)',
						'1 Years',
						'Graduation degree',
						`The MCA (Lateral Entry) program is designed for students who wish to fast-track their postgraduate education in computer applications. It provides advanced knowledge in software technologies, application development, and system management, enabling students to quickly adapt to the demands of the IT industry and enhance their career prospects.`
					)">
								View Details
							</button>
						</div>
					</div>
				</div>
				<!-- MBA Course Card -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-03.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>MBA (Master of Business Administration)</h5>
							<p>Duration: 2 Years</p>

							<button class="btn btn-primary" onclick="openModal(
					'MBA (Master of Business Administration)',
					'2 Years',
					'Graduation degree',
					`The Master of Business Administration (MBA) program at Dr IT Group of Colleges is a two-year postgraduate course designed to build strong managerial, leadership, and decision-making skills. Approved by AICTE and affiliated with I.K. Gujral Punjab Technical University (IKGPTU), the program combines academic excellence with practical exposure through industry-oriented training and projects. Guided by experienced faculty, the course focuses on developing business acumen, professional ethics, and real-world problem-solving abilities. Students are prepared for successful careers in the global business environment with specializations such as Finance and Human Resource.`
				)">
								View Details
							</button>
						</div>
					</div>
				</div>

				<!-- Repeat More Cards -->

			</div>
		</div>
	</section>


	<!--MCA Modal -->
	<div id="courseModal" class="custom-modal">
		<div class="modal-box">

			<span class="close-btn" onclick="closeModal()">&times;</span>

			<h3 id="modalTitle"></h3>

			<div class="info-grid">
				<div class="info-card">
					<span>Duration</span>
					<strong id="modalDuration"></strong>
				</div>

				<div class="info-card">
					<span>Eligibility</span>
					<strong id="modalEligibility"></strong>
				</div>
			</div>

			<div class="section p-0 mb-2">
				<h4>About Course</h4>
				<p id="modalDesc" align="justify"></p>
			</div>

			<button href="{{url('register-online')}}" class="btn btn-primary">Apply Now</button>

		</div>
	</div>


@endsection
@push('scripts')

	<script>
		

		function closeModal() {
			document.getElementById("courseModal").style.display = "none";
		}

		/* Close when clicking outside */
		window.onclick = function (event) {
			let modal = document.getElementById("courseModal");
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		function openModal(title, duration, eligibility, desc) {
			document.getElementById("courseModal").style.display = "block";

			document.getElementById("modalTitle").innerText = title;
			document.getElementById("modalDuration").innerText = duration;
			document.getElementById("modalEligibility").innerText = eligibility;
			document.getElementById("modalDesc").innerText = desc;
		}
	</script>
@endpush