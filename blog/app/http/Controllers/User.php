<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
	public function index()
   {
		//$blogs = \App\User;
		return redirect('/blog');
   }
}
