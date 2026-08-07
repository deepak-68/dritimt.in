@extends('layouts.front')
@section('title', 'UG, PG Admission 2026-27 | DR IT Group')
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .course-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .input-field {
            width: 90%;
        }

    </style>
 
@endpush

@section('content')

    <section class="main-banner-section custom-hero-wrapper">

        <div class="swiper customHeroSwiper">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide custom-hero-slide banner-slide-2">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6 hero-text">
                                <p class="welcome">ADMISSIONS OPEN 2026–27</p>

                                <h1 class="text-white">
                                    Build Your Future<br> With Excellence
                                </h1>

                                <h5 class="subtext">
                                    Empowering Minds, Creating Leaders
                                </h5>

                                <p class="text-white mb-2">
                                    Join Dr IT Group of Colleges and take the first step towards a successful career with
                                    quality education, modern infrastructure, and industry-focused learning.
                                </p>

                                <a href="{{ url('register-online') }}" class="btn btn-brochure">Apply Now</a>
                                <a href="tel:+919216798705" class="btn btn-brochure">Call Now</a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide custom-hero-slide banner-slide-1">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6 hero-text">
                                <p class="welcome">WELCOME TO DR IT GROUP OF COLLEGES</p>

                                <h1 class="text-white">
                                    Intelligence +<br> Character
                                </h1>

                                <h5 class="subtext">
                                    That Is The Goal Of True Education
                                </h5>

                                <p class="text-white mb-2">
                                    Dr IT Group of Colleges - Shaping Future Leaders
                                </p>

                                <a href="{{ url('register-online') }}" class="btn btn-brochure">Apply Now</a>
                                <a href="tel:+919216798705" class="btn btn-brochure">Call Now</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <!-- 🔥 Sticky Enquiry Form -->
        <div class="custom-enquiry-sticky">
            <div class="enquiry-box">
                <h5>Quick Enquiry</h5>
                <p class="text-cccc mb-2">We'll call you back shortly</p>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('enquiry.store') }}" method="POST">
                    @csrf

                    <input type="text" name="name" class="form-control input-field" placeholder="Your Name">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                    <input type="tel" name="phone" class="form-control input-field" placeholder="Phone Number"
                        maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>

                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                    <select class="form-control input-field" name="course" required>
                        <option value="">Select Course</option>
                        <option>BCA</option>
                        <option>BBA</option>
                        <option>B.Com (Hons)</option>
                        <option>B.Sc. MLS</option>
                        <option>B.Sc. Radiology</option>
                        <option>B.Tech (CSE)</option>
                        <option>B.Tech (ME)</option>
                        <option>B.Tech (EE)</option>
                        <option>B.Tech (AI & ML)</option>
                        <option>MBA</option>
                        <option>MCA</option>
                    </select>

                    <button type="submit" class="btn btn-brochure w-100">
                        Submit Enquiry
                    </button>
                </form>
            </div>
        </div>

    </section>
    
    <!-- about us section  -->
    <section class="about-section">
        <div class="container">

            <div class="row align-items-center">

                <!-- LEFT IMAGE -->
                <div class="col-lg-6 mb-4 mb-lg-0">

                    <div class="about-img">

                        <img src="{{ asset('frontend/img/about-2.jpg') }}" class="img-fluid">

                        <div class="experience-box">
                            <h4 class="text-white">25+</h4>
                            <span>Years of Excellence</span>
                        </div>

                    </div>

                </div>


                <!-- RIGHT CONTENT -->
                <div class="col-lg-6">

                    <span class="tag">ABOUT US</span>

                    <h2 class="home_about_title">
                        Where Learning Meets Opportunity
                    </h2>

                    <p class="home_about_text" align="justify">
                        When it comes to quality education, Dr. IT Group of Colleges stands as a trusted and reputed name.
                        The institution operates under the esteemed Dr. ITM Limited Group, an ISO 9001:2015 certified
                        organization, ensuring high standards in both education and management.
                        Dr. IT Group of Colleges is located in the serene, eco-friendly, and pollution-free environment of
                        Banur, near Chandigarh. This peaceful setting provides an ideal atmosphere for learning and
                        contributes to the overall development of students, making it a perfect place for academic
                        growth.<br>
                        The teaching-learning process at the institution is supported by modern infrastructure and
                        innovative methodologies. The focus is on delivering a balanced and holistic education that enhances
                        both <a href="/blog/academic-knowledge"> academic knowledge</a> and practical skills, preparing students for real-world challenges.
                        A key strength of Dr. IT Group of Colleges lies in its commitment to student success. The
                        institution not only imparts quality education but also actively supports students in securing job
                        opportunities. With dedicated placement assistance, students and their guardians can be assured of
                        strong career guidance and support for a successful future.


                    </p>



                    <div class="contact-box">

                        <span>Admission Helpline</span>
                        <h5><a href="tel:+919216798705">+91 92167-98705</a></h5>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- about chairman  -->
   



    <section class="courses-section">
        <div class="container">

            <div class="section-title text-center">
                <span class="tag">ACADEMIC PROGRAMS</span>
                <h2>Most Demanding & Popular Courses</h2>
            </div>

            <!-- Swiper -->
            <div class="swiper coursesSwiper">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <div class="course-card">
                            <img src="{{ asset('frontend/img/01.jpg') }}" class="img-fluid">
                            <div class="course-content">
                                <span class="badge badge-green">Postgraduate</span>
                                <h5>MCA</h5>
                                <p>It is a postgraduate track that concentrates on coming up.....</p>
                                <div class="course-footer">
                                    <span><i class="fa fa-clock"></i> 2 Years</span>
                                    <a href="{{url('post-graduate')}}">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="course-card">
                            <img src="{{ asset('frontend/img/course-04.jpg') }}" class="img-fluid">
                            <div class="course-content">
                                <span class="badge badge-blue">Undergraduate</span>
                                <h5>BBA</h5>
                                <p>These are a group of undergraduate courses that ....</p>
                                <div class="course-footer">
                                    <span><i class="fa fa-clock"></i> 3 Years</span>
                                    <a href="{{url('under-graduate')}}">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="course-card">
                            <img src="{{ asset('frontend/img/course-02.jpg') }}" class="img-fluid">
                            <div class="course-content">
                                <span class="badge badge-blue">Undergraduate</span>
                                <h5>BCA</h5>
                                <p>This is an undergraduate course through which the ....
                                </p>
                                <div class="course-footer">
                                    <span><i class="fa fa-clock"></i> 3 Years</span>
                                    <a href="{{url('under-graduate')}}">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="course-card">
                            <img src="{{ asset('frontend/img/course-03.jpg') }}" class="img-fluid">
                            <div class="course-content">
                                <span class="badge badge-blue">Undergraduate</span>
                                <h5>B.Sc (MLS)</h5>
                                <p>How it is laid out: Three years' training in .....</p>
                                <div class="course-footer">
                                    <span><i class="fa fa-clock"></i> 3 Years</span>
                                    <a href="{{url('under-graduate')}}">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="course-card">
                            <img src="{{ asset('frontend/img/course-10.jpg') }}" class="img-fluid">
                            <div class="course-content">
                                <span class="badge badge-blue">Undergraduate</span>
                                <h5>B.Tech (CSE)</h5>
                                <p>This program provides a strong foundation in .....</p>
                                <div class="course-footer">
                                    <span><i class="fa fa-clock"></i> 4 Years</span>
                                    <a href="{{url('under-graduate')}}">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="course-card">
                            <img src="{{ asset('frontend/img/course-11.jpg') }}" class="img-fluid">
                            <div class="course-content">
                                <span class="badge badge-blue">Undergraduate</span>
                                <h5>B.Tech (ME)</h5>
                                <p>Mechanical Engineering is one of the core .....</p>
                                <div class="course-footer">
                                    <span><i class="fa fa-clock"></i> 4 Years</span>
                                    <a href="{{url('under-graduate')}}">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="course-card">
                            <img src="{{ asset('frontend/img/course-12.jpg') }}" class="img-fluid">
                            <div class="course-content">
                                <span class="badge badge-blue">Undergraduate</span>
                                <h5>B.Tech (EE)</h5>
                                <p>The Electrical Engineering program focuses on the .....</p>
                                <div class="course-footer">
                                    <span><i class="fa fa-clock"></i> 4 Years</span>
                                    <a href="{{url('under-graduate')}}">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="course-card">
                            <img src="{{ asset('frontend/img/course-13.jpg') }}" class="img-fluid">
                            <div class="course-content">
                                <span class="badge badge-blue">Undergraduate</span>
                                <h5>B.Tech (AI & ML)</h5>
                                <p>This program is designed to meet the growing demand .....</p>
                                <div class="course-footer">
                                    <span><i class="fa fa-clock"></i> 4 Years</span>
                                    <a href="{{url('under-graduate')}}">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>


            </div>

        </div>
    </section>
    <!-- events section -->
    <section class="news-section">
        <div class="container">

            <div class=" section-header section-title">
                <div>
                    <span class="tag">WHAT'S NEW</span>
                    <h2>Latest Events</h2>
                </div>


            </div>

            <div class="row g-4 mt-3">

                <!-- News Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card">

                        <img src="{{ asset('frontend/img/holi.jpeg') }}" class="img-fluid">

                        <div class="news-content">

                            <span class="news-tag">Celebration</span>

                            <h5>Holi Celebration </h5>

                            <p class="news-date">March 04, 2026</p>

                            <p align="justify">Holi was celebrated with great enthusiasm at Dr. IT Group of Colleges,
                                spreading colors of
                                joy and unity. </p>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card">

                        <img src="{{ asset('frontend/img/drit-01.jpg') }}" class="img-fluid">

                        <div class="news-content">

                            <span class="news-tag">Conference</span>

                            <h5>International Conference </h5>

                            <p class="news-date">March 12, 2026</p>

                            <p align="justify">The International Conference on Sustainable Growth brought together experts
                                and academicians
                                for insightful discussions.</p>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card">

                        <img src="{{ asset('frontend/img/lohri.jpg') }}" class="img-fluid">

                        <div class="news-content">

                            <span class="news-tag">Celebration</span>

                            <h5>Lohri Celebration </h5>

                            <p class="news-date">January 5, 2026</p>

                            <p align="justify">Lohri was celebrated with traditional zeal, featuring a bonfire and cultural
                                performances.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
     <section class="govSocialSection">
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3 style="color:#fff;">Connect With Us</h3>
                        <h2 style="color:#fff;" class="title">Stay Updated Through Our Social Channels</h2> 
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <div class="govSocialContainer container">





            <div class="govSocialCard">
                <h3 class="govSocialTitle">Facebook</h3>
               <div class="govSocialFrame">
    <div id="fb-root"></div>

    <div class="fb-page"
        data-href="https://www.facebook.com/dritgroupofcolleges/"
        data-tabs="timeline"
        data-width="500"
        data-height="700"
        data-small-header="false"
        data-adapt-container-width="true"
        data-hide-cover="false"
        data-show-facepile="true">

        <blockquote
            cite="https://www.facebook.com/dritgroupofcolleges/"
            class="fb-xfbml-parse-ignore">

            <a href="https://www.facebook.com/dritgroupofcolleges/">
                DR IT Group of Colleges
            </a>

        </blockquote>
    </div>
</div>
            </div>

            <div class="govSocialCard">
                <h3 class="govSocialTitle">Instagram</h3>
                <div class="govSocialFrame">
                   <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DVLYe_9D3C0/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DVLYe_9D3C0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DVLYe_9D3C0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by DR IT GROUP OF COLLEGES (@dritgroupofcolleges)</a></p></div></blockquote>



                </div>
            </div>
            <div class="govSocialCard">
                <h3 class="govSocialTitle">LinkedIn</h3>
                <div class="govSocialFrame">
                 <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:7475846899393064960?collapsed=1" height="669" width="504" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                </div>
            </div>

        </div>
    </section>



    
    <!-- our recruiters -->
    <section class="recruiters-section">
        <div class="container">

            <div class="text-center section-header section-title">
                <span class="tag">PLACEMENT</span>
                <h2>Our Recruiters</h2>
                <p>Top companies that hire our graduates</p>
            </div>

            <div class="row g-3 justify-content-center">

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img src="{{ asset('frontend/img/recruiter/ACC.png') }}"
                                alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img
                                src="{{ asset('frontend/img/recruiter/AMBUJA.png') }}" alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img src="{{ asset('frontend/img/recruiter/BAJAJ.png') }}"
                                alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img src="{{ asset('frontend/img/recruiter/BHEL.jpg') }}"
                                alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img
                                src="{{ asset('frontend/img/recruiter/Federel.png') }}" alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img
                                src="{{ asset('frontend/img/recruiter/Godrej.png') }}" alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img src="{{ asset('frontend/img/recruiter/HCL.png') }}"
                                alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">

                        <div class="tag  bg-theme rounded-circle"><img src="{{ asset('frontend/img/recruiter/HDFC.png') }}"
                                alt="img">
                        </div>

                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img src="{{ asset('frontend/img/recruiter/Magma.png') }}"
                                alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img src="{{ asset('frontend/img/recruiter/Pepsi.jpg') }}"
                                alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img
                                src="{{ asset('frontend/img/recruiter/Vardhman.jpg') }}" alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="recruiter-card">
                        <div class="tag  bg-theme rounded-circle"><img
                                src="{{ asset('frontend/img/recruiter/Vodafone.png') }}" alt="img">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- placement section -->
    <section class="placement-section">
        <div class="container">

            <div class="section-header section-title ">
                <div>
                    <span class="tag">CAREER SUCCESS</span>
                    <h2 class="text-white">Placement Highlights</h2>
                </div>


            </div>


            <!-- Placement Stats -->
            <div class="row g-4 mt-2">

                <div class="col-lg-3 col-md-6">
                    <div class="placement-stat">
                        <div class="icon">🎓</div>
                        <h4 class="text-white"><span class="counter text-white" data-target="2000">0</span>+</h4>
                        <p class="text-cccc">Students Enrolled</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="placement-stat">
                        <div class="icon">🏢</div>
                        <h4 class="text-white"><span class="counter text-white" data-target="150">0</span>+</h4>
                        <p class="text-cccc">Faculty Members</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="placement-stat">
                        <div class="icon">📈</div>
                        <h4 class="text-white"><span class="counter text-white" data-target="950">0</span>+</h4>
                        <p class="text-cccc">Placement Rate</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="placement-stat">
                        <div class="icon">🏆</div>
                        <h4 class="text-white"><span class="counter text-white" data-target="100">0</span>+</h4>
                        <p class="text-cccc">Recruiting Companies</p>
                    </div>
                </div>

            </div>


            <!-- Student Placements -->
            <div class="row g-4 mt-4">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card">

                        <div class="stars">★★★★★</div>

                        <div class="student">
                            <div class="avatar">RS</div>

                            <div>
                                <h6 class="text-cccc">Rahul Sharma</h6>
                                <p class="text-cccc">MCA 2024</p>
                            </div>
                        </div>

                        <p class="company">HCL Technologies - ₹6.5 LPA</p>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="placement-card">

                        <div class="stars">★★★★★</div>

                        <div class="student">
                            <div class="avatar">PM</div>

                            <div>
                                <h6 class="text-cccc">Priya Mehta</h6>
                                <p class="text-cccc">BCA 2024</p>
                            </div>
                        </div>

                        <p class="company">Goldman - ₹7 LPA</p>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="placement-card">

                        <div class="stars">★★★★★</div>

                        <div class="student">
                            <div class="avatar">AS</div>

                            <div>
                                <h6 class="text-cccc">Arjun Singh</h6>
                                <p class="text-cccc">BCA 2023</p>
                            </div>
                        </div>

                        <p class="company">Wipro - ₹4.5 LPA</p>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- campus highlights -->

    <section class="campus-section">
        <div class="container">

            <div class="text-center section-header section-title">
                <span class="tag">INFRASTRUCTURE</span>
                <h2>Campus Highlights</h2>

                <p>Experience world-class facilities designed to foster learning and creativity.</p>
            </div>

            <div class="row g-4 mt-4">

                <!-- Campus Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="campus-card">

                        <img src="{{ asset('frontend/img/infrastructure/class.jpg') }}" class="img-fluid">

                        <div class="campus-content">

                            <h6>Classrooms</h6>

                            <p>Spacious, well-equipped classrooms that create comfortable learning environment.</p>

                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="campus-card">

                        <img src="{{ asset('frontend/img/infrastructure/library.jpg') }}" class="img-fluid">

                        <div class="campus-content">

                            <h6> Library</h6>

                            <p>A resource-rich library offering books, journals, and digital materials for academic growth.
                            </p>

                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="campus-card">

                        <img src="{{ asset('frontend/img/infrastructure/CL.jpg') }}" class="img-fluid">

                        <div class="campus-content">

                            <h6>Computer Labs</h6>

                            <p>Modern computer labs with advanced systems and high-speed internet for practical learning.
                            </p>

                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="campus-card">

                        <img src="{{ asset('frontend/img/infrastructure/Semi.jpg') }}" class="img-fluid">

                        <div class="campus-content">

                            <h6>Seminar</h6>

                            <p>A fully equipped seminar hall for interactive sessions, workshops, and presentations.</p>

                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="campus-card">

                        <img src="{{ asset('frontend/img/infrastructure/GYM.jpg') }}" class="img-fluid">

                        <div class="campus-content">

                            <h6>GYM</h6>

                            <p>A well-maintained gym with modern equipment to promote fitness and well-being.</p>

                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="campus-card">

                        <img src="{{ asset('frontend/img/infrastructure/OA.jpg') }}" class="img-fluid">

                        <div class="campus-content">

                            <h6>Open Air Theatre</h6>

                            <p>A vibrant open-air theatre for cultural events, performances, and student activities.</p>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
@push('scripts')

    </script>
    <script async src="//www.instagram.com/embed.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v23.0">
    </script>
    
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".customHeroSwiper", {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
        // counter
        const counters = document.querySelectorAll(".counter");

        counters.forEach((counter) => {
            counter.innerText = "0";

            const updateCounter = () => {
                const target = +counter.getAttribute("data-target");
                const count = +counter.innerText;

                const increment = target / 100;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);

                    setTimeout(updateCounter, 20);
                } else {
                    counter.innerText = target;
                }
            };

            updateCounter();
        });

    </script>
    <script>
        setTimeout(function () {
            let alertBox = document.querySelector('.alert');
            if (alertBox) {
                alertBox.style.transition = "0.5s";
                alertBox.style.opacity = "0";
                setTimeout(() => alertBox.remove(), 500); // remove after fade
            }
        }, 4000); // 4 seconds
    </script>
    <script>
        document.querySelector("form").addEventListener("submit", function (e) {
            let name = document.querySelector("[name='name']").value.trim();
            let phone = document.querySelector("[name='phone']").value.trim();

            let nameRegex = /^[A-Za-z\s]{3,50}$/;
            let phoneRegex = /^[6-9]\d{9}$/;

            if (!nameRegex.test(name)) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Name',
                    text: 'Only letters allowed (min 3 characters)'
                });
                return;
            }

            if (!phoneRegex.test(phone)) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Phone Number',
                    text: 'Enter valid 10-digit number starting with 6-9'
                });
                return;
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".coursesSwiper", {
            slidesPerView: 4,
            spaceBetween: 25,
            loop: true,

            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                320: { slidesPerView: 1 },
                576: { slidesPerView: 2 },
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 },
                1200: { slidesPerView: 4 }
            }
        });

    </script>
  
@endpush