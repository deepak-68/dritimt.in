@extends('layouts.back')
@section('title', 'Online Registration')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Online Registration</h1>
      <div class="section-header-breadcrumb">
          	  
          
          
        <div class="breadcrumb-item active"><a href="{{ route('registration') }}">Registration</a></div>
      </div>
      <div id="export_table_filter"> @include('registration.export')</div>
      <div id="registration_table_filter"> @include('registration.filter')</div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                <div class="table-responsive">
                <table class="table table-striped" id="registration" data-action="{{ route('registration.datatable') }}">
                    <thead>
                         <tr>
                            <th scope="col">S#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Category</th>
                            <th scope="col">Course</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                          </tr>
                    </thead>
                 
                
                </table>
              </div>
             </div>
            </div>
        </div>
    </div>
</section>
@endsection
