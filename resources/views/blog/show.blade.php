@extends("layouts.blog")

@section("content")

	<div class="container">
		<!-- About -->
		<div class="section">
			<div class="section-header">
				<h4 class="">{{ $post->title }}</h4>
			</div>
			<div class="section-content">
				{!! $post->body !!}
			</div>
		</div>
	</div>

@endSection
