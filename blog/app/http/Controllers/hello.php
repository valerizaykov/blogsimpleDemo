<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hello extends Controller
{
	public function index()
    {
        return 'hello world Valeri from controller : )';
    }
	public function show($name='')
	{
		if($name==''){
			return 'hello world Valeri(def value) : )';
		}
		else{
			return view('hello',array('name' => $name));
		}
	}
		
    
}
