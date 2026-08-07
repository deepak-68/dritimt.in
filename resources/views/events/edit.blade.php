@extends('layouts.back')
@section('title', 'Edit Event')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Manage User</h1>
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
                        <h4>Edit Event</h4>
                        <div class="card-header-form">
                                <a href="{{ url('event') }}" class="btn btn-primary my-2"><i class="bi bi-plus-circle"></i>Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('event/update/'.$event->id) }}" method="post">
                            @csrf
                            @method("PUT")

                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end text-start">event</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $event->title }}">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>

                          <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" id="description" name="description" value="{{ $event->description }}">
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end text-start">Start date</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ $event->start_date }}" required>
                                    @if ($errors->has('start_date'))
                                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end text-start">End date</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ $event->end_date }}" required>
                                    @if ($errors->has('end_date'))
                                        <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update Event">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')
    <script src="{{ asset('backend/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

@endpush
