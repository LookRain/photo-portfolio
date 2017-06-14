@extends('layouts.master')

@section('content')
<div class="is-flex" id="front" style="justify-content: center;"><h1 class="title">the gallery</h1></div>
<section class="section">
	<div class="container">
		<div class="box">
			<h1 class="title">Portrait</h1>
			@foreach(Storage::files('public/images/portrait') as $link)
			<img src="{{ Storage::url($link) }}" alt="" style=" max-height: 100%; max-width: 100%;">
			@endforeach
		</div>

		<div class="box">
			<h1 class="title">Landscape</h1>
			@foreach(Storage::files('public/images/landscape') as $link)
			<img src="{{ Storage::url($link) }}" alt="" style=" max-height: 100%; max-width: 100%;">
			@endforeach
		</div>

		<div class="box">
			<h1 class="title">Street</h1>
			@foreach(Storage::files('public/images/street') as $link)
			<img src="{{ Storage::url($link) }}" alt="" style=" max-height: 100%; max-width: 100%;">
			@endforeach
		</div>
		
	</div>
</section>
@endsection