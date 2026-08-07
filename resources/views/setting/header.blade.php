@extends('layouts.back')
@section('title', 'Header Aetting')
@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/select2/dist/css/select2.min.css') }}">
@endpush
@section('content')
@php
    $user=Auth::user();
@endphp
<section class="section">
    <div class="section-header">
      <h1>Header Setting</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Setting</a></div>
        <div class="breadcrumb-item">Header</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" action="{{ url('header/headerupdate/'.$header->id) }}">
                @csrf
                @method("PUT")
              <div class="card-body">
                <div class="mb-3 row">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start">Phone</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="phone" name="phone" value="{{ $header->phone }}">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="news" class="col-md-4 col-form-label text-md-end text-start">News</label>
                    <div class="col-md-6">
                      <textarea class="form-control" id="news" name="news" style="width:600px; height:350px !important;">{{ $header->news }}</textarea>
                        @if ($errors->has('news'))
                            <span class="text-danger">{{ $errors->first('news') }}</span>
                        @endif
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

