@extends('layouts.front')
@section('title', 'Press')
@section('content')
	<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Press Release</h2>
							<ul class="bread-list">
								<li><a href="{{url('/')}}">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Press</li>
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
				<div class="img-container text-center">
                 <img src="{{ asset('frontend/press/pressduss1.jpg')}}" alt="Press Release" />
                 <img src="{{ asset('frontend/press/press102021.jpg')}}" alt="Press Release"/>
                 <img src="{{ asset('frontend/press/press82021.jpg')}}" alt="Press Release"/>

                <img src="{{ asset('frontend/press/press92021.jpg')}}" alt="Press Release" />
                <img src="{{ asset('frontend/press/press72021.jpg')}}" alt="Press Release" />
                 <img src="{{ asset('frontend/press/press62021.jpg')}}" alt="Press Release"/>

                 <img src="{{ asset('frontend/press/press32021.jpg')}}" alt="Press Release"/>
                <img src="{{ asset('frontend/press/press42021.jpg')}}" alt="Press Release" />
                <img src="{{ asset('frontend/press/press52021.jpg')}}" alt="Press Release" />

                 <img src="{{ asset('frontend/press/press12021.jpg')}}" alt="Press Release"/>
                 <img src="{{ asset('frontend/press/press2021.jpg')}}" alt="Press Release"/>
                <img src="{{ asset('frontend/press/press22021.jpg')}}" alt="Press Release" />

                <img src="{{ asset('frontend/press/press3.jpeg')}}" alt="Press Release"/>
                 <img src="{{ asset('frontend/press/press4.jpeg')}}" alt="Press Release"/>
                <img src="{{ asset('frontend/press/press5.jpeg')}}" alt="Press Release" />

                <img src="{{ asset('frontend/press/press6.jpeg')}}" alt="Press Release"/>
            </div>

					
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
@endsection	