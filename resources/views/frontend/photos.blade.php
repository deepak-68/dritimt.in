@extends('layouts.front')
@section('title', 'Photos')
@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Photo</h2>
                        <ul class="bread-list">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Photos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->


    <!-- Start Feautes -->
    <section id="gx-album-page " class="Feautes section mt-5">

        <div class=" col-12 text-center ">
            <span class="tag">Dr. IT Photos </span>
            <h2 class="home_about_title ">
                Capturing Moments, Creating Memories
            </h2>
        </div>
        <div class="zxg-gallery-container container mb-4">


            <div class="zxg-gallery-grid">

                <div class="zxg-gallery-card" onclick="openAlbum(0)">
                    <img src="{{asset ('frontend/img/staff/staff-1.jpeg')}}">
                    <div class="zxg-gallery-overlay">
                        <!-- <h4>Office Life</h4> -->
                        <button>View Photos</button>
                    </div>
                </div>

                <div class="zxg-gallery-card" onclick="openAlbum(1)">
                   <img src="{{asset ('frontend/img/republic/republic-1.jpeg')}}">
                    <div class="zxg-gallery-overlay">
                        <!-- <h4>Team Events</h4> -->
                        <button>View Photos</button>
                    </div>
                </div>

                <div class="zxg-gallery-card" onclick="openAlbum(2)">
                   <img src="{{asset ('frontend/img/path/path-1.jpeg')}}">
                    <div class="zxg-gallery-overlay">
                        <!-- <h4>Work Culture</h4> -->
                        <button>View Photos</button>
                    </div>
                </div>
                <div class="zxg-gallery-card" onclick="openAlbum(2)">
                   <img src="{{asset ('frontend/img/holi/3.jpeg')}}">
                    <div class="zxg-gallery-overlay">
                        <!-- <h4>Work Culture</h4> -->
                        <button>View Photos</button>
                    </div>
                </div>
                <div class="zxg-gallery-card" onclick="openAlbum(2)">
                   <img src="{{asset ('frontend/img/conference/2.jpeg')}}">
                    <div class="zxg-gallery-overlay">
                        <!-- <h4>Work Culture</h4> -->
                        <button>View Photos</button>
                    </div>
                </div>
                <div class="zxg-gallery-card" onclick="openAlbum(2)">
                  <img src="{{asset ('frontend/img/Lohri/1.jpeg')}}">
                    <div class="zxg-gallery-overlay">
                        <!-- <h4>Work Culture</h4> -->
                        <button>View Photos</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- MODAL -->
        <div class="zxg-gallery-modal" id="zxgModal">
            <span class="zxg-gallery-close" onclick="closeModal()">✕</span>
            <span class="zxg-gallery-prev" onclick="prevImage()">❮</span>
            <img id="zxgModalImage">
            <span class="zxg-gallery-next" onclick="nextImage()">❯</span>
        </div>
    </section>
    <!--/ End Feautes -->
@endsection
@push('scripts')
    <script>
        const albums = [
            [
                "https://dritimt.in/frontend/img/staff/staff-1.jpeg",
                "https://dritimt.in/frontend/img/republic/republic-1.jpeg",
                "https://dritimt.in/frontend/img/path/path-1.jpeg",
                "https://dritimt.in/frontend/img/holi/3.jpeg",
                "https://dritimt.in/frontend/img/conference/2.jpeg",
                "https://dritimt.in/frontend/img/Lohri/1.jpeg",
               
            ],
            [
                "https://dritimt.in/frontend/img/staff/staff-1.jpeg",
                "https://dritimt.in/frontend/img/republic/republic-1.jpeg",
                "https://dritimt.in/frontend/img/path/path-1.jpeg",
                "https://dritimt.in/frontend/img/holi/3.jpeg",
                "https://dritimt.in/frontend/img/conference/2.jpeg",
                "https://dritimt.in/frontend/img/Lohri/1.jpeg",
            ],
            [
                "https://dritimt.in/frontend/img/staff/staff-1.jpeg",
                "https://dritimt.in/frontend/img/republic/republic-1.jpeg",
                "https://dritimt.in/frontend/img/path/path-1.jpeg",
                "https://dritimt.in/frontend/img/holi/3.jpeg",
                "https://dritimt.in/frontend/img/conference/2.jpeg",
                "https://dritimt.in/frontend/img/Lohri/1.jpeg",
            ]
        ];

        let currentAlbum = [];
        let currentIndex = 0;

        function openAlbum(index) {
            currentAlbum = albums[index];
            currentIndex = 0;
            document.getElementById("zxgModal").style.display = "flex";
            showImage();
        }

        function closeModal() {
            document.getElementById("zxgModal").style.display = "none";
        }

        function showImage() {
            document.getElementById("zxgModalImage").src = currentAlbum[currentIndex];
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % currentAlbum.length;
            showImage();
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + currentAlbum.length) % currentAlbum.length;
            showImage();
        }
    </script>
@endpush