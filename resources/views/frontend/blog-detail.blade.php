@extends('layouts.front')
@section('title', $blog->title)
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>{{ $blog->title }}</h2>
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li><a href="{{ route('blogs') }}">Blogs</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">{{ $blog->title }}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	<section class="blog-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12 mb-3">
					<div class="blog-card">
						@if ($blog->image)
							<div class="blog-card-img">
								<img src="{{ asset($blog->image) }}" class="img-fluid w-100" alt="{{ $blog->title }}">
							</div>
						@endif
						<div class="blog-card-body">
							<div class="blog-meta">
								@if ($blog->user)
								<span class="meta-chip"><i class="icofont-user"></i> {{ $blog->user->name }}</span>
								@endif
								<span class="meta-chip"><i class="icofont-calendar"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</span>
								<span class="meta-chip"><i class="icofont-clock-time"></i> {{ ceil(str_word_count(strip_tags($blog->content)) / 200) }} min read</span>
							</div>
							<h1 class="blog-title">{{ $blog->title }}</h1>
							<div class="blog-content">
								{!! $blog->content !!}
							</div>
							<div class="blog-share">
								<span>Share:</span>
								<a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"><i class="fa fa-facebook"></i></a>
								<a class="tw" target="_blank" href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}"><i class="fa fa-twitter"></i></a>
								<a class="wa" target="_blank" href="https://api.whatsapp.com/send?text={{ urlencode($blog->title . ' - ' . url()->current()) }}"><i class="fa fa-whatsapp"></i></a>
								<a class="ln" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"><i class="fa fa-linkedin"></i></a>
							</div>
							<div class="mt-4">
								<a href="{{ route('blogs') }}" class="btn btn-primary">&larr; Back to Blogs</a>
							</div>
						</div>
					</div>
				</div>
				{{-- <div class="col-lg-6 col-md-6 col-12 mb-3">
					<div class="blog-sidebar">
						<div class="blog-widget">
							<h4>Recent Posts</h4>
							<div class="recent-posts">
								@forelse ($recentBlogs as $recent)
								<div class="recent-item">
									<a href="{{ route('blog.detail', $recent->slug) }}">
										@if ($recent->image)
											<img src="{{ asset($recent->image) }}" alt="{{ $recent->title }}">
										@else
											<img src="data:image/svg+xml;charset=UTF-8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22600%22 height=%22400%22%3E%3Crect width=%22100%25%22 height=%22100%25%22 fill=%22%23eef2f6%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-family=%22Arial%22 font-size=%2220%22 fill=%22%2394a3b8%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3ENo Image%3C/text%3E%3C/svg%3E" alt="{{ $recent->title }}">
										@endif
									</a>
									<div>
										<a class="recent-title" href="{{ route('blog.detail', $recent->slug) }}">{{ $recent->title }}</a>
										<div class="recent-date">{{ \Carbon\Carbon::parse($recent->created_at)->format('M d, Y') }}</div>
									</div>
								</div>
								@empty
								<p class="text-muted">No recent posts.</p>
								@endforelse
							</div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>

@endsection
