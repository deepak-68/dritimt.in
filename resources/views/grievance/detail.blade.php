@extends('layouts.back')
@section('title', 'Grievance Details')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Grievance Details</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('grievancelist') }}">Back</a></div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
               <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->name }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Registration No:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->registration_no }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Phone:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->phone }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Email:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->email }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Course:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->course }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Year:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->year }}</div>
                </div>
                 <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Complaint :</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->complaint  }}</div>
                </div>
                 <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Date:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ !empty($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') : '';   }}</div>
                </div>
             </div>
            </div>
        </div>
    </div>
</section>
@endsection
