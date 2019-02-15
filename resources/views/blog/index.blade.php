@extends("layouts.blog")

@section("content")

	<div class="container">
		@foreach ($posts as $post)
			<div class="section">
				<div class="">
					<h4 class="">
						<a href="{{ route('posts.show', $post->slug) }}">
							{{ $post->title }}
						</a>
					</h4>
				</div>
				@if ($post->excerpt)
					<div class="section-content">
						{!! $post->excerpt !!}
					</div>
				@endIf
			</div>
		@endForeach
	</div>

@endSection
