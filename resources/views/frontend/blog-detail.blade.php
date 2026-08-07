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
				<div class="col-12">
					<div class="blog-detail">
						@if ($blog->image)
							<div class="blog-detail-img mb-4">
								<img src="{{ asset($blog->image) }}" class="img-fluid w-100" alt="{{ $blog->title }}">
							</div>
						@endif
						<p class="text-muted">
							<i class="icofont-calendar"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}
							@if($blog->user)
								&nbsp;|&nbsp; <i class="icofont-user"></i> {{ $blog->user->name }}
							@endif
						</p>
						<h2 class="mb-3">{{ $blog->title }}</h2>
						<div class="blog-content">
							{!! $blog->content !!}
						</div>
						<div class="mt-4">
							<a href="{{ route('blogs') }}" class="btn btn-primary">&larr; Back to Blogs</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
