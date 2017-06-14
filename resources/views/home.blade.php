@extends('layouts.master')

@section('content')
<style>
	#fixed-footer
	{
		position:fixed;
		bottom:0px;
		left:0px;
		right:0px;
		height:250px;
		margin-bottom:0px;
	}
</style>
<div id="front">
	
	<nav class="nav">
		<div class="nav-left">
			<a class="nav-item">
				LookRain Photography
			</a>
		</div>

		<span class="nav-toggle">
		</span>
		<div class="nav-right nav-menu is-active">
			<a class="nav-item">
				Portrait
			</a>
			<a class="nav-item">
				Landscape
			</a>
			<a class="nav-item">
				Street
			</a>
		</div>
	</nav>
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
	<div class="box" id="fixed-footer">

		<my-slider></my-slider>
	</div>
</div>
@endsection