@extends('layouts.front')
@section('title', 'Under Graduate')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Under Graduate</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Under Graduate</li>
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
					<span class="tag">Under Graduate Courses </span>
					<h2 class="home_about_title mb-4">
						Under Graduate Programs
					</h2>
				</div>
			</div>

			<div class="row g-4">

				<!-- BBA Course Card -->
				<div class="col-lg-4 col-md-6  mb-4 ">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-04.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>BBA (Bachelor of Business Administration)</h5>
							<p>Duration: 3 Years</p>

							<button class="btn btn-primary" onclick="openModal(
									'BBA (Bachelor of Business Administration)',
									'3 Years',
									'+12th / Diploma',
									`The Bachelor of Business Administration (BBA) program at Dr IT Group of Colleges is designed to develop strong foundational skills in business management, including Marketing, Finance, Human Resource, and Operations. Approved by AICTE and affiliated with I.K. Gujral Punjab Technical University (IKGPTU), the course focuses on building problem-solving abilities, leadership qualities, and effective resource management skills. With a practical and industry-oriented approach, the program prepares students for diverse career opportunities in sectors like FMCG, banking, and corporate management.`
								)">
								View Details
							</button>
						</div>
					</div>
				</div>
				<!-- B Com Course Card -->
				<div class="col-lg-4 col-md-6  mb-4 ">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-05.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>B Com (Bachelors of Commerce (hons) )</h5>
							<p>Duration: 3 Years</p>

							<button class="btn btn-primary" onclick="openModal(
								'B Com  (Bachelors of Commerce (hons))',
								'3 Years',
								'10+2 examination',
								`The Bachelor of Commerce (Honours) program at Dr IT Group of Colleges is designed to develop strong expertise in accounting, finance, and business management. Affiliated with I.K. Gujral Punjab Technical University (IKGPTU), the course equips students with essential skills in financial management, analytical thinking, and decision-making. With a practical and industry-oriented approach, it prepares students for diverse career opportunities in sectors such as banking, finance, and corporate management, as well as for entrepreneurial ventures.`
							)">
								View Details
							</button>
						</div>
					</div>
				</div>
				<!-- BCA Course Card -->
				<div class="col-lg-4 col-md-6  mb-4 ">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-06.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>BCA (Bachelor of Computer Applications )</h5>
							<p>Duration: 3 Years</p>

							<button class="btn btn-primary" onclick="openModal(
								'BCA  (Bachelor of Computer Applications)',
								'3 Years',
								'10+2 examination',
								`The Bachelor of Computer Applications (BCA) program at Dr IT Group of Colleges is designed to provide strong foundations in Information Technology and computer applications with a focus on practical learning. Approved by AICTE and affiliated with I.K. Gujral Punjab Technical University (IKGPTU), the course equips students with up-to-date technical knowledge and industry-relevant skills. It prepares students for careers in the IT sector as software developers, system engineers, web developers, and other technology-driven roles in both private and public sectors.`
							)">
								View Details
							</button>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6  mb-4 ">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-07.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>BCA (LE)</h5>
							<p>Duration: 3 Years</p>

							<button class="btn btn-primary" onclick="openModal(
								'BCA  (LE)',
								'3 Years',
								'10+2 in science stream with min. 50%',
								`The BCA (Lateral Entry) program allows diploma holders to directly enter the second year, providing an accelerated pathway to a degree in computer applications. The curriculum is designed to strengthen advanced programming skills, software development techniques, and system design concepts. This program enables students to enhance their technical expertise and adapt to the rapidly evolving IT industry with confidence.`
							)">
								View Details
							</button>
						</div>
					</div>
				</div>
				<!-- BSC mls Course Card -->
				<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-08.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>B.Sc(MLS)</h5>
							<p>Duration: 3 Years</p>

							<button class="btn btn-primary" onclick="openModal(
								'B.Sc(MLS)',
								'3 Years',
								' 10+2 with Physics & Chemistry',
								`The Bachelor of Science in Medical Laboratory Sciences (B.Sc. MLS) at Dr IT Group of Colleges is a three-year undergraduate program focused on the diagnosis and analysis of diseases through advanced laboratory techniques. Approved by AICTE and affiliated with I.K. Gujral Punjab Technical University (IKGPTU), the course combines theoretical knowledge with hands-on practical training in areas such as clinical chemistry, microbiology, hematology, and immunology. It prepares students for rewarding careers in hospitals, diagnostic labs, and healthcare sectors, with opportunities to grow into specialized and managerial roles.`
							)">
								View Details
							</button>
						</div>
					</div>
				</div>
				<!-- B.Sc(RIT) -->
				<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-09.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>B.Sc(RIT)</h5>
							<p>Duration: 4 Years</p>

							<button class="btn btn-primary" onclick="openModal(
								'B.Sc(RIT)',
								'4 Years',
								' 10+2 in science stream with min. 50%',
								`The B.Sc. Medical Imaging Technology program at Dr IT Group of Colleges is designed to provide in-depth knowledge and practical skills in modern diagnostic imaging techniques. The course prepares students to work with advanced technologies such as X-ray, MRI, CT scan, and ultrasound under professional supervision. With a strong focus on practical training and healthcare applications, it opens up diverse career opportunities in hospitals, diagnostic centers, and medical institutions as radiology technologists, imaging specialists, and technicians.`
							)">
								View Details
							</button>
						</div>
					</div>
				</div>

				<!-- Repeat More Cards -->
				<!---->
				<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-02.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>B.Tech (Computer Science Engineering)</h5>
							<p>Duration: 4 Years</p>

							<button class="btn btn-primary" onclick="openModal(
								'B.Tech (Computer Science Engineering)',
								'4 Years',
								' 10+2 in science stream with min. 50%',
								`This program provides a strong foundation in computer science and engineering principles. It covers areas such as programming, data structures, algorithms, artificial intelligence, and software engineering. With a focus on innovation and problem-solving, students are prepared for careers in software development, IT services, and emerging technology sectors, as well as for higher studies and research.`
							)">
								View Details
							</button>
						</div>
					</div>
				</div>
				<!---->
				<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-11.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>B.Tech (Mechanical Engineering)</h5>
							<p>Duration: 4 Years</p>

							<button class="btn btn-primary" onclick="openModal(
								'B.Tech (Mechanical Engineering)',
								'4 Years',
								' 10+2 in science stream with min. 50%',
								`Mechanical Engineering is one of the core engineering disciplines that focuses on the design, analysis, and manufacturing of mechanical systems. The program provides in-depth knowledge of thermodynamics, mechanics, and production engineering. Students gain practical exposure through workshops and projects, preparing them for careers in manufacturing, automotive, energy, and industrial sectors.`
							)">
								View Details
							</button>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-12.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>B.Tech (Electrical Engineering)</h5>
							<p>Duration: 4 Years</p>

							<button class="btn btn-primary" onclick="openModal(
								'B.Tech (Electrical Engineering)',
								'4 Years',
								' 10+2 in science stream with min. 50%',
								`The Electrical Engineering program focuses on the study of electrical systems, power generation, transmission, and distribution. It equips students with knowledge of electrical machines, circuits, and modern technologies. The program prepares students for diverse career opportunities in power plants, industries, infrastructure projects, and government sectors.`
							)">
								View Details
							</button>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
					<div class="course-card">
						<img src="{{ asset('frontend/img/course-13.jpg') }}" alt="Course">

						<div class="course-content">
							<h5>B.Tech (Artificial Intelligence & Machine Learning)</h5>
							<p>Duration: 4 Years</p>

							<button class="btn btn-primary" onclick="openModal(
								'B.Tech (Artificial Intelligence & Machine Learning)',
								'4 Years',
								' 10+2 in science stream with min. 50%',
								`This program is designed to meet the growing demand for professionals in artificial intelligence and machine learning. It focuses on data analysis, deep learning, automation, and intelligent systems. Students are trained to develop smart solutions and innovative technologies, opening career opportunities in cutting-edge industries such as AI development, data science, and robotics.`
							)">
								View Details
							</button>
						</div>
					</div>
				</div>

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