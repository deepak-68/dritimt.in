@extends('layouts.front')
@section('title', 'Contact Us')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Contact Us</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Contact Us</li>
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
				<div class="col-lg-7 col-12">
					<!-- Start Choose Left -->
					<div class="choose-left">
						<h2>Our Campus</h2>
						<ul class="tatsu-module tatsu-list mt-5">
							<li class="tatsu-list-content">
								<i class="tatsu-icon fa fa-home" style="color:rgba(245,0,8,1);"></i>
								<span class="tatsu-list-inner">
									<p>Chandigarh-Patiala Highway Banur, Near Chandigarh.</p>
								</span>
							</li>
							<li class="tatsu-list-content">
								<i class="tatsu-icon fa fa-phone" style="color:rgba(245,0,8,1);"></i>
								<span class="tatsu-list-inner">
									<p>Phone: +91-92167-98705</p>
								</span>
							</li>
							<li class="tatsu-list-content">
								<i class="tatsu-icon fa fa-envelope " style="color:rgba(245,0,8,1);"></i>
								<span class="tatsu-list-inner">
									<p>Email id:- <a class="style2" href="mailto:info@dritimt.in"><span
												class="style11">info@dritimt.in</span></a></p>
								</span>
							</li>
						</ul>
						<br>
						<h3>Regd. & Corporate Office:</h3>
						<br>
						<ul class="tatsu-module tatsu-list">
							<li class="tatsu-list-content"><i class="tatsu-icon fa fa-home "
									style="color:rgba(245,0,8,1);"></i><span class="tatsu-list-inner">
									<p> SCO 61, Madhya Marg, Sector 26,Chandigarh – 160 019, (INDIA)</p>
								</span></li>
							<li class="tatsu-list-content"><i class="tatsu-icon fa fa-phone "
									style="color:rgba(245,0,8,1);"></i><span class="tatsu-list-inner">
									<p>Ph.:+91-172 2790019, 2792481</p>
								</span></li>
							<div class="tatsu-module tatsu-text-inner   clearfix"
								style=" margin-right:auto; margin-left:auto;" data-animation="fadeIn">
								<br>
								<h3>Admission Helpline :</h3>
								<br>
							</div>
							<ul class="tatsu-module tatsu-list">

								<li class="tatsu-list-content">
									<i class="tatsu-icon fa fa-phone " style="color:rgba(245,0,8,1);"></i>
									<span class="tatsu-list-inner">
										<p>+91-92167-98705</p>
									</span>
								</li>
								<li class="tatsu-list-content">
									<i class="tatsu-icon fa fa-envelope " style="color:rgba(245,0,8,1);"></i>
									<span class="tatsu-list-inner">
										<p>Email:- admission@dritimt.in</p>
									</span>
								</li>
							</ul>
							<div class="tatsu-module tatsu-text-inner   clearfix"
								style=" margin-right:auto; margin-left:auto;" data-animation="fadeIn">
								<br>
								<h3>Counseling Center:</h3>
								<br>
							</div>
							<ul class="tatsu-module tatsu-list">
								<li class="tatsu-list-content">
									<i class="tatsu-icon fa fa-home " style="color:rgba(245,0,8,1);"></i>
									<span class="tatsu-list-inner">
										<p>New Delhi:- 721, Indra Parkash Building, 21 Barakhamba Road, New Delhi – 110001,
										</p>
									</span>
								</li>
								<li class="tatsu-list-content"><i class="tatsu-icon fa fa-phone "
										style="color:rgba(245,0,8,1);"></i><span class="tatsu-list-inner">
										<p>(M).:+91-81784-32369,+91-98711-96447</p>
									</span>
								</li>
							</ul>
							<ul class="tatsu-module tatsu-list">
								<li class="tatsu-list-content">
									<i class="tatsu-icon fa fa-home " style="color:rgba(245,0,8,1);"></i>
									<span class="tatsu-list-inner">
										<p>NOIDA :- C 56A/10 &amp; 11, Sector 62,Noida (U.P.) 201301</p>
									</span>
								</li>
								<li class="tatsu-list-content">
									<i class="tatsu-icon fa fa-phone " style="color:rgba(245,0,8,1);"></i>
									<span class="tatsu-list-inner">
										<p>(M):- +91-98993-96810</p>
									</span>
								</li>
							</ul>
							</span>
							</li>
						</ul>
					</div>
					<!-- End Choose Left -->
				</div>
				<div class="col-lg-5 col-12">
					<!-- Start Choose Rights -->
					<div class="choose-right">
						<a href="{{url('register-online')}}"><button class="btn primary" type="button">Apply
								now</button></a><br><br>
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3436.5565654649517!2d76.68155077557263!3d30.533575674681007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fc2fedc4aec5f%3A0x392d09b30a9bc491!2sDr%20IT%20Group!5e0!3m2!1sen!2sin!4v1715081045342!5m2!1sen!2sin"
							width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<!-- End Choose Rights -->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Feautes -->
@endsection