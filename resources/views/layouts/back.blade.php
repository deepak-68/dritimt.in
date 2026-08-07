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
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/fontawesome/css/all.min.css')}}">

   <!-- CSS Libraries -->
   <link rel="stylesheet" href="{{ asset('backend/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
   <link rel="stylesheet" href="{{ asset('backend/assets/modules/summernote/summernote-bs4.css')}}">
   <link rel="stylesheet" href="{{ asset('backend/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{ asset('backend/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/js/daterangepicker/daterangepicker.css')}}">
    @stack('styles')
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('inc.topbar')
        @include('inc.sidebar')
        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            @yield('content')

          </section>
        </div>
      </div>

  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('backend/assets/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/popper.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/tooltip.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/moment.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/stisla.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/sweetalert/sweetalert.min.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('backend/assets/modules/jquery.sparkline.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/chart.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('backend/assets/js/scripts.js')}}"></script>
  <script src="{{ asset('backend/assets/js/custom.js')}}"></script>
  
    @if(Request::segment(1) == 'registration')
        <script src="{{ asset('backend/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/moment/moment.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('backend/assets/js/registration/registration.js') }}" type="module"></script>
    @endif
    @if(Request::segment(1) == 'contact')
        <script src="{{ asset('backend/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/moment/moment.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('backend/assets/js/contact/contact.js') }}" type="module"></script>
    @endif
    @if(Request::segment(1) == 'grievancelist')
            <script src="{{ asset('backend/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/moment/moment.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('backend/assets/js/grievance/grievance.js') }}" type="module"></script>
    @endif
   @if(Request::segment(1) == 'student_request')
        <script src="{{ asset('backend/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/moment/moment.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('backend/assets/js/request/request.js') }}" type="module"></script>
    @endif
  <script>
    @if (session('success'))
        swal("Success!", "{{ session('success') }}", "success");
    @endif
    @if (session('error'))
        swal("Error!", "{{ session('error') }}", "error");
    @endif
  </script>
  @stack('scripts')
</body>
</html>
