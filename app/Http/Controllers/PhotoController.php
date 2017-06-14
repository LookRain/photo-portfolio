<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    //
	function store(Request $request) {
		// dd($request);
		$path = $request->file('photo')->store('public/images');
		dd($path);
		return view('dashboard', ['path' => $path]);
	}
}
