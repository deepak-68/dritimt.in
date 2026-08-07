@extends('layouts.back')
@section('title', 'Add New Event')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Add Event</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Event</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit User</h4>
                        <div class="card-header-form">
                            <a href="{{ route('event') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('event/store') }}" method="post">
                            @csrf

                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end text-start">Title</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control  @error('name') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end text-start">Start date</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" required>
                                    @if ($errors->has('start_date'))
                                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end text-start">End date</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" required>
                                    @if ($errors->has('end_date'))
                                        <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Event">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

