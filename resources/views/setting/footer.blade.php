@extends('layouts.back')
@section('title', 'Footerer Setting')
@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/select2/dist/css/select2.min.css') }}">
@endpush
@section('content')
@php
    $user=Auth::user();
@endphp
<section class="section">
    <div class="section-header">
      <h1>Footer Setting</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Setting</a></div>
        <div class="breadcrumb-item">Footer</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" action="{{ url('footer/footerupdate') }}">
                @csrf
                @method("PUT")
              <div class="card-body">
                <div class="mb-3 row">
                    <label for="name" class="col-md-3 col-form-label text-md-end text-start">{{ ucfirst($footer[0]->title); }}</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="name" name="link[{{ $footer[0]->id; }}]" value="{{ $footer[0]->link; }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="news" class="col-md-3 col-form-label text-md-end text-start">{{ ucfirst($footer[1]->title); }}</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="name" name="link[{{ $footer[1]->id; }}]" value="{{ $footer[1]->link; }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="news" class="col-md-3 col-form-label text-md-end text-start">{{ ucfirst($footer[2]->title); }}</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="name" name="link[{{ $footer[2]->id; }}]" value="{{ $footer[2]->link; }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="news" class="col-md-3 col-form-label text-md-end text-start">{{ ucfirst($footer[3]->title); }}</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="name" name="link[{{ $footer[3]->id; }}]" value="{{ $footer[3]->link; }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="news" class="col-md-3 col-form-label text-md-end text-start">{{ ucfirst($footer[4]->title); }}</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="name" name="link[{{ $footer[4]->id; }}]" value="{{ $footer[4]->link; }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="news" class="col-md-3 col-form-label text-md-end text-start">{{ ucfirst($footer[5]->title); }}</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="name" name="link[{{ $footer[5]->id; }}]" value="{{ $footer[5]->link; }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="news" class="col-md-3 col-form-label text-md-end text-start">{{ ucfirst($footer[6]->title); }}</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="name" name="link[{{ $footer[6]->id; }}]" value="{{ $footer[6]->link; }}">
                    </div>
                </div>
                <input type="hidden" name="from" value="profile">
              </div>
              <div class="card-footer text-left">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form>
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

