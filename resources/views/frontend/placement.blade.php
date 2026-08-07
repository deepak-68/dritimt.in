@extends('layouts.front')
@section('title', 'Our Placements')
@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Placement</h2>
                        <ul class="bread-list">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Placement</li>
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
                <div class=" col-12 text-center ">
                    <span class="tag">Our Placements </span>
                    <h2 class="home_about_title mb-4">
                        Where Talent Meets Opportunity
                    </h2>

                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row g-4">

                <!-- Card Start -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card-page h-100">

                        <div class="student-img">
                            <img src="{{ asset('frontend/img/upload/alumni-tarvinder.jpg') }}" alt="Student">
                        </div>

                        <div class="placement-content-page p-4">
                            <h4>TARVINDER SINGH , MANAGER</h4>
                            <p class="course">META 3 INFOTECH</p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card-page h-100">

                        <div class="student-img">
                            <img src="{{ asset('frontend/img/upload/alumni-mitali.jpg') }}" alt="Student">
                        </div>

                        <div class="placement-content-page p-4">
                            <h4>MITALI , SOCIAL MEDIA EXECUTIVE</h4>
                            <p class="course">YCENETWORK</p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card-page h-100">

                        <div class="student-img">
                            <img src="{{ asset('frontend/img/upload/alumni-parveen.jpg') }}" alt="Student">
                        </div>

                        <div class="placement-content-page p-4">
                            <h4>NAAZO PRAVEEN , ASSOCIATE</h4>
                            <p class="course">JEENA SEEKHO HEALTH CARE</p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card-page h-100">

                        <div class="student-img">
                            <img src="{{ asset('frontend/img/upload/alumni-sanjana.jpg') }}" alt="Student">
                        </div>

                        <div class="placement-content-page p-4">
                            <h4>SANJANA , OPERATOR </h4>
                            <p class="course">G S ALLOY INDUSTRIES</p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card-page h-100">

                        <div class="student-img">
                            <img src="{{ asset('frontend/img/upload/alumni-simranpreet.jpg') }}" alt="Student">
                        </div>

                        <div class="placement-content-page p-4">
                            <h4>SIMRANPREET , OPERATOR </h4>
                            <p class="course">SOOD PLASTIC </p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card-page h-100">

                        <div class="student-img">
                            <img src="{{ asset('frontend/img/upload/simran-joshi.jpg') }}" alt="Student">
                        </div>

                        <div class="placement-content-page p-4">
                            <h4>SIMRAN JOSHI  </h4>
                            <p class="course">HINDUSTAN UNILEVER </p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card-page h-100">

                        <div class="student-img">
                            <img src="{{ asset('frontend/img/upload/navjot.jpg') }}" alt="Student">
                        </div>

                        <div class="placement-content-page p-4">
                            <h4>NAVJOT KAUR  </h4>
                            <p class="course">SOLITAIRE INFOSYS </p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card-page h-100">

                        <div class="student-img">
                            <img src="{{ asset('frontend/img/upload/brijesh.jpg') }}" alt="Student">
                        </div>

                        <div class="placement-content-page p-4">
                            <h4>BRIJESH  </h4>
                            <p class="course">AIRTEL </p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card-page h-100">

                        <div class="student-img">
                            <img src="{{ asset('frontend/img/upload/jyoti.jpg') }}" alt="Student">
                        </div>

                        <div class="placement-content-page p-4">
                            <h4>JYOTI NADAR  </h4>
                            <p class="course">VODAFONE </p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card-page h-100">

                        <div class="student-img">
                            <img src="{{ asset('frontend/img/upload/santosh.jpg') }}" alt="Student">
                        </div>

                        <div class="placement-content-page p-4">
                            <h4>SANTOSH BAHADUR  </h4>
                            <p class="course">QUESS CORP </p>


                        </div>

                    </div>
                </div>
                <!-- Card End -->

            </div>
        </div>

    </section>
    <!--/ End Feautes -->
    <!-- Start Recruiters -->
    <!-- <section class="portfolio section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2>Our Recruiters</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="owl-carousel portfolio-slider" id="recruiters_slider">
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/ACC.png')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/AMBUJA.png')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/BAJAJ.png')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/BHEL.jpg')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/Federel.png')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/Godrej.png')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/HCL.png')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/HDFC.png')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/Magma.png')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/Pepsi.jpg')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/Vardhman.jpg')}}" alt="#">
                                </div>
                                <div class="single-pf">
                                    <img src="{{ asset('frontend/img/recruiter/Vodafone.png')}}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
    <!--/ End Recruiters -->
@endsection