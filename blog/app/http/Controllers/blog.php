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
		$blogs = \App\Blog::paginate(3);
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
   public function edit($id)
   {
	   $blogs = \App\Blog::find($id);
	   $users=\App\User::all();
	   return view('editform',['blogs'=>$blogs],['users' => $users]);
	   
   }
   public function store(CheckBlog $request,$id=0)
   {
	   //$user_id = Auth::id();
	   //print_r($request->all());die;
	   $user_id = $request->user;
	   //print_r($id);die;
	   if($id==0)
	   {
		   $blog = \App\Blog::insert(
		     ['title' => $request->title,
			 'description' => $request->description,
			 'user_id' => $user_id]);
	   }
	   else
	   {
		   $blogs = \App\Blog::find($id);
		   $blogs->title = $request->title;
		   $blogs->description = $request->description;
		   $blogs->user_id = $user_id;
		   $blogs->save();
		   
	   }		   
		return redirect('/blog');
   }
   public function delete($id)
   {
	   $blogs = \App\Blog::find($id)->delete();
	   return redirect('/blog');
   }
}
