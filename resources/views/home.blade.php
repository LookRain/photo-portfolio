@extends('layouts.master')

@section('content')

<div id="front">
	
	<nav class="nav" id="nav">
		<div class="nav-left">
			<a class="nav-item">
				LookRain Photography
			</a>
		</div>

		<span class="nav-toggle">
		</span>
		<div class="nav-right nav-menu is-active">
			<router-link to='/show/portrait' class="nav-item">
				Portrait
			</router-link>
			<router-link to='/show/landscape' class="nav-item">
				Landscape
			</router-link>
			<router-link to='/show/street' class="nav-item">
				Street
			</router-link>
		</div>
	</nav>
	<router-view :key="$route.params.cat"></router-view>

</div>
@endsection