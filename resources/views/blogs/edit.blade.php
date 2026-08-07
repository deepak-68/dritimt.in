@extends('layouts.back')
@section('title', 'Edit Blog')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Edit Blog</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('blog') }}">Blogs</a></div>
        <div class="breadcrumb-item">Edit Blog</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Blog</h4>
                        <div class="card-header-form">
                            <a href="{{ url('blog') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('blog/update/'.$blog->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")

                            <div class="mb-3 row">
                                <label for="title" class="col-md-4 col-form-label text-md-end text-start">Title</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="image" class="col-md-4 col-form-label text-md-end text-start">Featured Image</label>
                                <div class="col-md-6">
                                  <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                                  @if ($blog->image)
                                    <div class="mt-2">
                                        <img src="{{ asset($blog->image) }}" width="120" style="object-fit: cover;">
                                    </div>
                                  @endif
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="status" class="col-md-4 col-form-label text-md-end text-start">Status</label>
                                <div class="col-md-6">
                                  <select class="form-control" id="status" name="status">
                                    <option value="published" {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
                                    <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                  </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="content" class="col-md-4 col-form-label text-md-end text-start">Content</label>
                                <div class="col-md-8">
                                  <textarea class="form-control summernote" id="content" name="content">{{ old('content', $blog->content) }}</textarea>
                                    @if ($errors->has('content'))
                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update Blog">
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
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 250
            });
        });
    </script>
@endpush
