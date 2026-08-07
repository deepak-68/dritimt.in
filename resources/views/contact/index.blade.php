@extends('layouts.back')
@section('title', 'Contact')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Contact</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('contact') }}">Contact</a></div>
      </div>
      <div id="export_table_filter"> @include('contact.export')</div>
      <div id="registration_table_filter"> @include('contact.filter')</div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                <div class="table-responsive">
                <table class="table table-striped" id="contact" data-action="{{ route('contact.datatable') }}">
                <thead>
                  <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Name</th>
                    <th scope="col">phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subjetc</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </thead>
                </table>
              </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection
