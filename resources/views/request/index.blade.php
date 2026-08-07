@extends('layouts.back')
@section('title', 'Student Request')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Student Request</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('student_request') }}">Student Request</a></div>
      </div>
      <div id="export_table_filter"> @include('request.export')</div>
      <div id="registration_table_filter"> @include('request.filter')</div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                <div class="table-responsive">
                <table class="table table-striped" id="request" data-action="{{ route('request.datatable') }}">
                <thead>
                  <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Name</th>
                    <th scope="col">phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Course</th>
                    <th scope="col">Type</th>
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
