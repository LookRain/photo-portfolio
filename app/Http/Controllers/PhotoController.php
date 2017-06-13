<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
	function store(Request $request) {
		// dd($request);
		$path = $request->file('photo')->store('images');
		return back();
	}
}
