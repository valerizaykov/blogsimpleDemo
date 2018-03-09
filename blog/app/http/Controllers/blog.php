<?php
namespace App\Http\Controllers;
use App\Http\Requests\CheckBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Form;
class blog extends Controller
{
   public function index()
   {
		$blogs = \App\Blog::simplePaginate(3);
		//po drugiq nachin ako e sus zaqwka vmesto sys model
		/*$blogs = DB::table('blogs')
            ->join('users', 'users.id', '=', 'blogs.user_id')
            ->select('users.name', 'blogs.*')
            ->get();*/
		return view('blog', ['blogs' => $blogs]);
   }
   public function create()
   {
	   $users=\App\User::all();
	   return view('blogform',['users' => $users]);
   }
   public function store(CheckBlog $request)
   {
	   //$user_id = Auth::id();
	   $user_id = $request->user;
	   $blog = \App\Blog::insert(
		     ['title' => $request->title,
			 'description' => $request->description,
			 'user_id' => $user_id]);
			 
		return redirect('/blog');
   }
   public function delete($id)
   {
	   $blogs = \App\Blog::find($id)->delete();
	   return redirect('/blog');
   }
}
