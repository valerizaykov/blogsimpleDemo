<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Translation extends Controller
{
    //
	public function changeLocale(Request $request)
	{
		$this->validate($request, ['locale' => 'required|in:en,dk']);
		//print_r("locale:".$request->locale);die;
		//\Session::put('locale', $request->locale);
		session(['locale'=>$request->locale]);
		//session()->flash('locale',$request->locale);
		return redirect()->back();
	}
}
