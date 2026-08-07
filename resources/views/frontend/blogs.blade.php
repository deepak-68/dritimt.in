@extends('layouts.front')
@section('title', 'Blogs')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Blogs & News</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Blogs</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	<section class="news-section">
		<div class="container">

			<div class=" section-header section-title">
				<div>
					<span class="tag">LATEST POSTS</span>
					<h2>Our Blogs</h2>
				</div>
			</div>

			<div class="row g-4 mt-3">
				@forelse ($blogs as $blog)
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="news-card">
						<a href="{{ route('blog.detail', $blog->slug) }}">
							@if ($blog->image)
								<img src="{{ asset($blog->image) }}" class="img-fluid" alt="{{ $blog->title }}">
							@else
								<img src="data:image/svg+xml;charset=UTF-8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22600%22 height=%22400%22%3E%3Crect width=%22100%25%22 height=%22100%25%22 fill=%22%23eef2f6%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-family=%22Arial%22 font-size=%2220%22 fill=%22%2394a3b8%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3ENo Image%3C/text%3E%3C/svg%3E" class="img-fluid" alt="{{ $blog->title }}">
							@endif
						</a>
						<div class="news-content">
							<span class="news-tag">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</span>
							<h5><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a></h5>
							<p>{!! \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) !!}</p>
							<a href="{{ route('blog.detail', $blog->slug) }}" class="btn btn-primary btn-sm">Read More</a>
						</div>
					</div>
				</div>
				@empty
				<div class="col-12 text-center">
					<h4>No Blog Found</h4>
				</div>
				@endforelse
			</div>

			<div class="d-flex justify-content-center mt-4">
				{{ $blogs->links() }}
			</div>
		</div>
	</section>

@endsection
