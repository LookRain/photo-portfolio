@extends('layouts.master')

@section('content')
<div class="is-flex" id="front" style="justify-content: center;"><h1 class="title">the gallery</h1></div>
<section class="section">
	<div class="container">

		@foreach(Storage::files('public/images') as $link)

		<img src="{{ Storage::url($link) }}" alt="" style=" max-height: 100%; max-width: 100%;">
		@endforeach
	</div>
</section>
@endsection