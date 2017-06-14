<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    //
	public function store(Request $request) {
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

	public function getAll(Request $request, $cat) {
		// dd($cat);
		if ($cat == 'portrait') {
			$pics = Storage::files('public/images/portrait');
			// dd($pics);
			$result = [];
			foreach ($pics as $pic) {
				array_push($result, Storage::url($pic));
			}
			// dd($result);
			return $result;
		}
		if ($cat == 'landscape') {
			dd(Storage::files('public/images/landscape'));
		}
		if ($cat == 'street') {
			dd(Storage::files('public/images/street'));
		}
	}
}
