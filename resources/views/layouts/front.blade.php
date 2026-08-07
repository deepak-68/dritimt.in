<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <link rel="icon" href="{{ asset('frontend/img/favidrit.jpg')}}" sizes="32x32">
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- General CSS Files -->
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css')}}">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
  <!-- icofont CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/icofont.css')}}">
  <!-- Slicknav -->
  <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/owl-carousel.css')}}">
  <!-- Datepicker CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/datepicker.css')}}">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css')}}">
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">

  <!-- Medipro CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/custom.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
  @if(Request::segment(1) == 'press')
    <link rel="stylesheet" href="{{ asset('frontend/css/popup-lightbox.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/popup-lightbox.min.css')}}">
  @endif
  @stack('styles')
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DXKD4D3');</script>
  <!-- End Google Tag Manager -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108006346-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-108006346-1');
  </script>
  <meta name="google-site-verification" content="8og9zy8u-xomP6nUU7G52vaRLNI4q6tGPqEE10-M2-4">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  
  <style>
    .highlight-menu a {
      color: #c62828;
      font-weight: 700;
      display: inline-block;
      animation: shakeText 1s infinite;
    }

    @keyframes shakeText {
      0% {
        transform: translateX(0);
      }

      25% {
        transform: translateX(-2px);
      }

      50% {
        transform: translateX(2px);
      }

      75% {
        transform: translateX(-2px);
      }

      100% {
        transform: translateX(0);
      }
    }
  </style>
     <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '963737626724295');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=963737626724295&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>

<body>


  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DXKD4D3" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Header Area -->
  <header class="header">
    <!-- Topbar -->
    <div class="topbar">
      <marquee class="hedlines" style="" scrollamount="2" scrolldelay="5" direction="left" onmouseover="this.stop()"
        onmouseout="this.start()">
        Feedback Facility is available for <a href="https://forms.gle/jMd6vTUWJD9ywQRn6"
          target="_blank"><u>students</u></a> and <a href="https://forms.gle/9AwPsfp5C9mmez2NA"
          target="_blank"><u>Faculty members</u></a> on AICTE website.&nbsp;&nbsp;&nbsp;
        Top/Best Educational Institute Near Chandigarh – Dr IT
        Group.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leading Group of Colleges near Chandigarh that
        provides state of the art infrastructure
        with excellent facilities.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Best results in region with numerous students as university merit holders.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        A+ Ranking in academic excellence.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Qualified and Experienced Faculty.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Excellent tie-ups with Domestic and Multinational
        Companies.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Excellent Placement Record.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </marquee>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-12">
            <!-- Contact -->
            <ul class="top-link">
              <li><a href="{{url('/nirf')}}">NIRF</a></li>
              <li><a href="{{url('grievance')}}">Grievance</a></li>
              <li><a href="{{url('contact-us')}}">Contact Us</a></li>
              <li><a href="{{url('register-online')}}">Apply Now</a></li>
              <li><a href="{{url('milestone')}}">Milestone</a></li>
              <li><a href="{{ url('events') }}">News/Events</a></li>
              <li class="highlight-menu">
                <a href="https://dritm.com/exam_portal/index.php/login" target="_blank">
                  MBA Scholarship Cum Test
                </a>
                <!--<a href="https://dritm.com/exam_portal/index.php/login" target="_blank"> 
                        MBA SCHOLARSHIP TEST
                    </a>-->
              </li>
            </ul>
            <!-- End Contact -->
          </div>
          <div class="col-lg-4 col-md-5 col-12">
            <!-- Top Contact -->
            <ul class="top-contact"><b>Admission Helpline</b>
              <li><i class="fa fa-phone"></i> <a href="tel:+91 92167 98705"> +91 92167-98705</a></li>

            </ul>
            <!-- End Top Contact -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
      <div class="container">
        <div class="inner">
          <div class="row">
            <div class="col-xl-2 col-lg-12 col-md-12 col-12 p-0">
              <!-- Start Logo -->
              <div class="logo">
                <a href="<?php echo url('/'); ?>"><img src="{{ asset('frontend/img/drit-main.png')}}" alt="#"></a>
              </div>
              <!-- End Logo -->
              <!-- Mobile Nav -->
              <div class="mobile-nav"> </div>

              <!-- End Mobile Nav -->
            </div>
            <!--<div class="col-xl-1 col-lg-12 col-md-12 col-12 p-0">
                <div class="logo">
                  <a href="<?php echo url('/'); ?>"><img src="{{ asset('frontend/img/logo.png')}}" style="width: 90px; height: auto;" alt="#"></a>
                </div>
                <div class="mobile-nav"></div>
              </div>-->
            <div class="col-xl-10 vcol-lg-12 col-md-12 col-12 align-items-center d-flex">
              <!-- Main Menu -->
              <div class="main-menu">

                <nav class="navigation">
                  <ul class="nav menu">
                    <li class="active"><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li><a href="#">About Us <i class="icofont-rounded-down"></i></a>
                      <ul class="dropdown">
                        <li><a href="{{url('JagadGuruji')}}">Jagad Guru ji</a></li>
                        <li><a href="{{url('chairmans-message')}}">Chairman 's Message</a></li>
                        <li><a href="{{url('ceo-message')}}">CEO 's Message</a></li>
                        <li><a href="{{url('trustees')}}">Trustees</a></li>
                        <li><a href="{{url('directors-message')}}"> Principal / Director's Message</a></li>
                        <li><a href="{{url('vision-mission')}}">Vision and Mission</a></li>
                        <li><a href="{{url('trust')}}">The Trust</a></li>
                        <li><a href="{{url('school_of_business')}}">Dr. IT School of Business</a></li>
                        <li><a href="{{url('school_of_management')}}">Dr. IT School of MGT & TECH</a></li>
                        <li><a href="{{url('regulatory-committees')}}">Regulatory Committees</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('register-online')}}">Admission </a></li>
                    <li><a href="#">Academic<i class="icofont-rounded-down"></i></a>
                      <ul class="dropdown">
                        <li><a href="{{url('post-graduate')}}">Post Graduate</a></li>
                        <li><a href="{{url('under-graduate')}}">Under Graduate</a></li>
                        <!--<li><a href="{{url('polytechnic')}}">Diploma Polytechnic</a></li>-->
                      </ul>
                    </li>
                    <li><a href="{{url('infrastructure')}}">Infrastructure </a></li>
                    <li><a href="{{url('placement')}}">Placement </a></li>
                    <li><a href="{{url('alumni')}}">Alumni </a></li>
                    <li><a href="#">Gallery<i class="icofont-rounded-down"></i></a>
                      <ul class="dropdown">
                        <li><a href="{{url('album')}}">Album</a></li>
                        <li><a href="{{url('photos')}}">Photos</a></li>
                        <li><a href="{{url('videos')}}">Videos</a></li>
                        <li><a href="{{url('press')}}">Press</a></li>
                      </ul>
                    </li>
                    <!--<li><a href="#">News/Events</a></li>-->

                    <a href="{{ asset('frontend/pdf/drit-2026.pdf') }}" target="_blank"><button class="btn primary"
                        type="button">Get Brochure</button></a>
                  </ul>

                </nav>
                <div class="menu-overlay"></div>

              </div>

              <!--/ End Main Menu -->
            </div>
          </div>

        </div>

      </div>

    </div>
    <!--/ End Header Inner -->

  </header>
  <!-- End Header Area -->

  <div id="app">
    @yield('content')
  </div>
  <div id="btntest1302">
    <i class="bi bi-x-circle-fill"></i>
    <h6 class="text-center">DrIT Admission open<br> 2026-27 </h6>
    <a href="{{url('register-online')}}">
      <h5 class="text-center">Apply Now!</h5>
    </a>
  </div>
  <footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-footer">
              <!-- Start Logo -->
              <div class="logo">
                <a href="<?php echo url('/'); ?>"><img src="{{ asset('frontend/img/drit-white.png')}}" alt="#"></a>
              </div>
              <!-- End Logo -->
              <p>Dr IT Group (under the umbrella of the Trust) is promoted by Dr ITM Limited, an ISO 27001:2013
                certified company, with facilities in Chandigarh, Mohali, Noida, Greater Noida, Jaipur and Auckland (New
                Zealand), specializing in the field of information technology.</p>
              <!-- Social -->
              <ul class="social">
                <!-- <li><a href="https://api.whatsapp.com/send?phone=+919216798705"><i class="icofont-whatsapp"></i></a>
                </li> -->
                <li><a href="https://www.facebook.com/www.dritimt.in/?ref=br_rs"><i class="icofont-facebook"></i></a>
                </li>
                <!-- <li><a href="https://plus.google.com/u/0/109961940336468221726"><i class="icofont-google-plus"></i></a>
                </li> -->
                <li><a href="https://twitter.com/dritgroup"><i class="icofont-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/results?search_query=Dr+IT+Group&amp;sm=3"><i
                      class="icofont-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/dr_it_group_of_colleges"><i class="icofont-instagram"></i></a>
                </li>
                <li><a href="https://www.linkedin.com/in/dr-it-group"><i class="icofont-linkedin"></i></a></li>
              </ul>
              <!-- End Social -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-footer f-link">
              <h2>Quick Links</h2>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <li><a href="{{url('/')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
                  <li><a href="{{url('/about')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
                  <li><a href="{{url('/contact-us')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact
                      Us</a>
                  </li>
                  <li><a href="{{url('/register-online')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Online
                      Registration</a></li>
                  <li><a
                      href="https://www.google.com/maps?ll=30.534462,76.68408&z=16&t=m&hl=en&gl=IN&mapclient=embed&cid=3662721972021021721"
                      target="blank"><i class="fa fa-caret-right" aria-hidden="true"></i>Site Map</a></li>
                  </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <ul>
                    <li><a href="{{ asset('frontend/pdf/Addmission-Form.pdf')}}" target="blank"><i
                          class="fa fa-caret-right" aria-hidden="true"></i>Admission Form</a></li>
                    <li><a href="{{url('education-loan')}}"><i class="fa fa-caret-right"
                          aria-hidden="true"></i>Education Loan</a></li>
                    <li><a href="{{url('scholarship')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Scholarship
                      </a></li>
                    <!--li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Regulatory committees</a></li-->
                    <li><a href="{{ asset('frontend/img/itimt-anti-ragging.pdf')}}" target="blank"><i class="fa fa-caret-right" aria-hidden="true"></i>Anti
                        Ragging</a></li>
                    <li><a href="{{url('aicte-approval-letter')}}"><i class="fa fa-caret-right"
                          aria-hidden="true"></i>AICTE Approval Letter</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-12">
            <div class="single-footer f-link">
              <h2>Important Links</h2>
              <ul>
                <li><a href="https://www.aicte-india.org" target="blank"><i class="fa fa-caret-right"
                      aria-hidden="true"></i>AICTE</a></li>
                <li><a href="https://ptu.ac.in" target="blank"><i class="fa fa-caret-right"
                      aria-hidden="true"></i>IKGPTU</a></li>
                <li><a href="http://www.punjabteched.com" target="blank"><i class="fa fa-caret-right"
                      aria-hidden="true"></i>PSBTEIT</a></li>
                <li><a href="https://swayam.gov.in" target="blank"><i class="fa fa-caret-right"
                      aria-hidden="true"></i>Swayam</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-footer">
              <h2>Find Us Here</h2>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3436.5565654649517!2d76.68155077557263!3d30.533575674681007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fc2fedc4aec5f%3A0x392d09b30a9bc491!2sDr%20IT%20Group!5e0!3m2!1sen!2sin!4v1715081045342!5m2!1sen!2sin"
                width="600" height="250" style="border:0;" allowfullscreen=""
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="copyright-content">
              <p>© Copyright <?php echo date('Y'); ?> <a href="{{ url('/') }}">Dr IT Group of Colleges</a> | Designed &
                developed by <a href="https://vibrantick.in/" target="_blank">Vibrantick Infotech Solutions</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Copyright -->
  </footer>
  <!--/ End Footer Area -->

  <!-- jquery Min JS -->
  <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
  <!-- jquery Migrate JS -->
  <script src="{{ asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
  <!-- jquery Ui JS -->
  <script src="{{ asset('frontend/js/jquery-ui.min.js')}}"></script>
  <!-- Easing JS -->
  <script src="{{ asset('frontend/js/easing.js')}}"></script>
  <!-- Color JS -->
  <script src="{{ asset('frontend/js/colors.js')}}"></script>
  <!-- Popper JS -->
  <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
  <!-- Bootstrap Datepicker JS -->
  <script src="{{ asset('frontend/js/bootstrap-datepicker.js')}}"></script>
  <!-- Jquery Nav JS -->
  <script src="{{ asset('frontend/js/jquery.nav.js')}}"></script>
  <!-- Slicknav JS -->
  <script src="{{ asset('frontend/js/slicknav.min.js')}}"></script>
  <!-- ScrollUp JS -->
  <script src="{{ asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
  <!-- Niceselect JS -->
  <script src="{{ asset('frontend/js/niceselect.js')}}"></script>
  <!-- Tilt Jquery JS -->
  <script src="{{ asset('frontend/js/tilt.jquery.min.js')}}"></script>
  <!-- Owl Carousel JS -->
  <script src="{{ asset('frontend/js/owl-carousel.js')}}"></script>
  <!-- counterup JS -->
  <script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
  <!-- Steller JS -->
  <script src="{{ asset('frontend/js/steller.js')}}"></script>
  <!-- Wow JS -->
  <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
  <!-- Magnific Popup JS -->
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <!-- Counter Up CDN JS -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
  <!-- Main JS -->
  <script src="{{ asset('frontend/js/main.js')}}"></script>
  <script src="{{ asset('frontend/js/custom.js')}}"></script>
  <!-- Gallery JS -->
  @if(Request::segment(1) == 'press')
    <script src="{{ asset('frontend/js/jquery.popup.lightbox.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.popup.lightbox.js')}}"></script>
  @endif
  <script type='text/javascript'>//<![CDATA[
    $(document).ready(function () {
      $('#phone').blur(function (e) {
        if (validatePhone('phone')) {
          $('#spnPhoneStatus').html('Valid Mobile Number');
          $('#spnPhoneStatus').css('color', 'green');
          return true;
        }
        else {
          $('#spnPhoneStatus').html('Invalid Mobile Number');
          $('#spnPhoneStatus').css('color', 'red');
          return false;
        }
      });

      function validatePhone(phone) {
        var a = document.getElementById(phone).value;
        var filter = /[1-9]{1}[0-9]{9}/;
        if (filter.test(a) && a.length == 10) {
          return true;
        }
        else {
          return false;
        }
      }
    });
  </script>
  <script>
    $(document).ready(function () {

      $(".img-container").popupLightbox({
        width: 600,
        height: 750
      });


    });
  </script>
  <script type="text/javascript">
    // Popup window code*** scrept for POP Up Window
    function newPopup(url) {
      popupWindow = window.open(
        url, 'popUpWindow', 'height=600,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @stack('scripts')
</body>

</html>