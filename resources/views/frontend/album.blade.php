@extends('layouts.front')
@section('title', 'Album')
@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Photo Album</h2>
                        <ul class="bread-list">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Album</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- section for image gallery -->
    <section id="gx-album-page " class="Feautes section mt-5">

        <div class=" col-12 text-center ">
            <span class="tag">Dr. IT Album </span>
            <h2 class="home_about_title ">
                Capturing Moments, Creating Memories
            </h2>
        </div>
        </div>
        <div class="gx-container container mb-4">

            <!-- Album 1 -->
            <div class="gx-event-card">
                <div class="gx-cover">

                    <img src="{{asset('frontend/img/path/path-1.jpeg')}}" class="gx-cover-img">
                    <div class="gx-overlay">View Album</div>
                </div>

                <div class="gx-hidden">
                    <img src="{{asset('frontend/img/path/path-4.jpeg')}}">
                    <img src="{{asset('frontend/img/path/path-3.jpeg')}}">
                    <img src="{{asset('frontend/img/path/path-2.jpeg')}}">
                </div>

                <h4>Path</h4>
            </div>

            <!-- Album 2 -->
            <div class="gx-event-card">
                <div class="gx-cover">
                    <img src="{{asset('frontend/img/republic/republic-1.jpeg')}}" class="gx-cover-img">
                    <div class="gx-overlay">View Album</div>
                </div>

                <div class="gx-hidden">
                    <img src="{{asset('frontend/img/republic/republic-4.jpeg')}}">
                    <img src="{{asset('frontend/img/republic/republic-3.jpeg')}}">
                    <img src="{{asset('frontend/img/republic/republic-2.jpeg')}}">

                </div>

                <h4>Republic Day</h4>
            </div>

            <!-- Album 3 -->
            <div class="gx-event-card">
                <div class="gx-cover">

                    <img src="{{asset('frontend/img/staff/staff-1.jpeg')}}" class="gx-cover-img">
                    <div class="gx-overlay">View Album</div>
                </div>

                <div class="gx-hidden">
                    <img src="{{asset('frontend/img/staff/staff-1.jpeg')}}">
                    <img src="{{asset('frontend/img/staff/staff-3.jpeg')}}">
                    <img src="{{asset('frontend/img/staff/staff-2.jpeg')}}">
                </div>

                <h4>Staff</h4>
            </div>
            <!-- Album 3 -->
            <div class="gx-event-card">
                <div class="gx-cover">


                    <img src="{{asset('frontend/img/holi/1.jpeg')}}" class="gx-cover-img">
                    <div class="gx-overlay">View Album</div>
                </div>

                <div class="gx-hidden">
                    <img src="{{asset('frontend/img/holi/1.jpeg')}}">
                    <img src="{{asset('frontend/img/holi/3.jpeg')}}">
                    <img src="{{asset('frontend/img/holi/2.jpeg')}}">
                </div>

                <h4>Holi Celebration</h4>
            </div>
            <!-- Album 3 -->
            <div class="gx-event-card">
                <div class="gx-cover">



                    <img src="{{asset('frontend/img/conference/1.jpeg')}}" class="gx-cover-img">
                    <div class="gx-overlay">View Album</div>
                </div>

                <div class="gx-hidden">
                    <img src="{{asset('frontend/img/conference/4.jpeg')}}">
                    <img src="{{asset('frontend/img/conference/3.jpeg')}}">
                    <img src="{{asset('frontend/img/conference/2.jpeg')}}">
                </div>

                <h4>International Conference</h4>
                </div>
                <div class="gx-event-card">
                    <div class="gx-cover">




                        <img src="{{asset('frontend/img/Lohri/1.jpeg')}}" class="gx-cover-img">
                        <div class="gx-overlay">View Album</div>
                    </div>

                    <div class="gx-hidden">
                        <img src="{{asset('frontend/img/Lohri/4.jpeg')}}">
                        <img src="{{asset('frontend/img/Lohri/3.jpeg')}}">
                        <img src="{{asset('frontend/img/Lohri/2.jpeg')}}">
                    </div>

                    <h4>Lohri Celebration</h4>
                </div>
                <div class="gx-event-card">
                    <div class="gx-cover">




                       <img src="{{asset('frontend/img/mou_sign/1.jpeg')}}" class="gx-cover-img">
                        <div class="gx-overlay">View Album</div>
                    </div>

                    <div class="gx-hidden">
                        <img src="{{asset('frontend/img/mou_sign/1.jpeg')}}">
                        <img src="{{asset('frontend/img/mou_sign/2.jpeg')}}">
                        
                    </div>

                    <h4>Mou Signing</h4>
                </div>

            </div>

            <!-- Popup -->
            <div id="gx-popup">
                <span id="gx-close">×</span>
                <img id="gx-img">
                <div id="gx-prev">&#10094;</div>
                <div id="gx-next">&#10095;</div>
            </div>
    </section>
    <!-- Start Feautes -->
    <!-- <section class="Feautes section mt-5">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <iframe id="full-screen-me" src="https://dritm.com/drit-album"
                                                                                style="overflow:hidden;height:100%!important; width:100%; min-height:1500px;" frameborder="0"
                                                                                wmode="transparent"></iframe>
                                                                        </div>
                                                                        <div class="row" style="display:none;">
                                                                            <div class="img-container text-center">
                                                                                <a href="JavaScript:newPopup('gallery/independence2024.html');">
                                                                                    <img src="{{ asset('gallery/front/independence24.jpeg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/kasauli-trip-2024.html');">
                                                                                    <img src="{{ asset('gallery/front/Kasauli-Trip-2024.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/independence2022.html');">
                                                                                    <img src="{{ asset('gallery/front/independence2022.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/yoga2022.html');">
                                                                                    <img src="{{ asset('gallery/front/yogaday_2022.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/yoga2021.html');">
                                                                                    <img src="{{ asset('gallery/front/yogaday.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/BTTM-Students.html');">
                                                                                    <img src="{{ asset('gallery/front/bttm-1.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/trip.html');">
                                                                                    <img src="{{ asset('gallery/front/Trip-1.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/Spardha19.html');">
                                                                                    <img src="{{ asset('gallery/front/Sp1.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/Women-Day.html');">
                                                                                    <img src="{{ asset('gallery/front/WD-1.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/farewell19.html');">
                                                                                    <img src="{{ asset('gallery/front/FP-1.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/fresher19.html');">
                                                                                    <img src="{{ asset('gallery/front/Fresher-1.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/Independence_day.html');">
                                                                                    <img src="{{ asset('gallery/front/Ind19.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/industry-visit.html');">
                                                                                    <img src="{{ asset('gallery/front/Indv19.jpg')}}" />
                                                                                </a>
                                                                                <a href="JavaScript:newPopup('gallery/national-conference.html');">
                                                                                    <img src="{{ asset('gallery/front/NConf.jpg')}}" />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <div class="button text-center mb-5">
                                                                    <a href="{{url('photos')}}" class="btn" style="color: #FFF;">More >></a>
                                                                </div> -->

    <!--/ End Feautes -->
@endsection
@push('scripts')
    <script>
        window.onload = function () {

            const cards = document.querySelectorAll(".gx-event-card");

            const popup = document.getElementById("gx-popup");
            const popupImg = document.getElementById("gx-img");

            const next = document.getElementById("gx-next");
            const prev = document.getElementById("gx-prev");
            const close = document.getElementById("gx-close");

            let images = [];
            let index = 0;

            cards.forEach(card => {

                const cover = card.querySelector(".gx-cover");
                const hiddenImgs = card.querySelectorAll(".gx-hidden img");

                cover.onclick = function () {
                    images = Array.from(hiddenImgs);
                    index = 0;

                    popup.style.display = "flex";
                    popupImg.src = images[index].src;
                };

            });

            next.onclick = function () {
                index = (index + 1) % images.length;
                popupImg.src = images[index].src;
            };

            prev.onclick = function () {
                index = (index - 1 + images.length) % images.length;
                popupImg.src = images[index].src;
            };

            close.onclick = function () {
                popup.style.display = "none";
            };

        };
    </script>
@endpush