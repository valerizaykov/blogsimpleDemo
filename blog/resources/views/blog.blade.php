@extends('layouts.app')
@section('content')
    <head>
        <title>@lang('messages.welcome')</title>
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    </head>
    <body> 
        <div class="container"> 
		@auth
            <div class="content">
			<div class="linkstyle">
			     <h1>Blog Page</h1>
				 <a class="btn btn-primary" href="{{ url('blog/create') }}">Create Blog</a>
			</div>
		    <table class = 'skiny3' border='1'>
			<tr>
			<th class = 'skiny3'>blog title</th>
			<th class = 'skiny3'>description</th>
			<th class = 'skiny3'>user</th>
			<th class = 'skiny3'>@lang('messages.created_at_th')</th>
                @foreach ($blogs as $blog) 
				<tr> 
				    <td>
						{{$blog->title}}
					</td>
					<td>
						{{$blog->description}} 
					</td>
					<td>
						{{$blog->users->name}} 
					</td>
					<td>
						{{$blog->date_created}} 
					</td>
					<td>
						<a  class="btn btn-primary" href="{{ URL::to('blog/delete/' . $blog->id) }}">@lang('messages.del_link')</a>
					</td>
				</tr>	
				@endforeach
			</tr>
            </div>
				{{ $blogs->links() }}	
		@endauth	
        </div>
 
    </body>
@endsection
