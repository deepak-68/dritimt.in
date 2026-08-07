@extends('layouts.back')
@section('title', 'Manage Blogs')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Manage Blogs</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Blogs</div>
      </div>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4></h4>
              <div class="card-header-form">
                @can('create-blog')
                    <a href="{{ url('blog/create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Blog</a>
                @endcan
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Published Date</th>
                    <th scope="col">Action</th>
                  </tr>
                  @forelse ($blogs as $blog)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>
                      @if($blog->image)
                        <img src="{{ asset($blog->image) }}" width="60" height="45" style="object-fit: cover;">
                      @else
                        <span class="text-muted">No Image</span>
                      @endif
                    </td>
                    <td>{{ $blog->title }}</td>
                    <td>
                      <span class="badge badge-{{ $blog->status == 'published' ? 'success' : 'warning' }}">{{ ucfirst($blog->status) }}</span>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ url('blog/edit/'.$blog->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="{{ url('blog/delete/'.$blog->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this blog?');"><i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
                @empty
                    <td colspan="6">
                        <span class="text-danger">
                            <strong>No Blog Found!</strong>
                        </span>
                    </td>
                @endforelse
                </table>
                {{ $blogs->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
