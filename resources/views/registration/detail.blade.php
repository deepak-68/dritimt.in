@extends('layouts.back')
@section('title', 'Student Details')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Student Details</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('registration') }}">Back</a></div>
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
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Father Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->father_name }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Mother Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->mother_name }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Gender:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->gender }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Date of  birth:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->dob }}</div>
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
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Category:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->category }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Hostel:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->hostel }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Bus Facility:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->bus_facility }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Last Exam Pass:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->last_exam_passes }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Course:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->course }}</div>
                </div>
                <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Rank:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->rank }}</div>
                </div>
                 <div class="mb-3 row">
                    <label for="roles" class="col-md-4 col-form-label ml-2"><strong>Address:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">{{ $data->address }}</div>
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
