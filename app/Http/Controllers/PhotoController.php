<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    //
	function store(Request $request) {
		// dd($request);
		$this->validate($request, [
			'cat' => 'required',
			'photo' => 'required'
			]);
		$cat = $request->input('cat');
		// dd($cat);
		$path = '';
		if ($cat == 'portrait') {
			$path = $request->file('photo')->store('public/images/portrait');
		}
		if ($cat == 'landscape') {
			$path = $request->file('photo')->store('public/images/landscape');
		}
		if ($cat == 'street') {
			$path = $request->file('photo')->store('public/images/street');
		}
		
		return view('dashboard', ['path' => $path]);
	}
}
