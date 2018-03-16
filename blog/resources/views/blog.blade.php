@extends('layouts.app')
@section('content')
    <head>
        <title>@lang('messages.welcome')</title>
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    </head>
    <body> 
	{{ Form::open(['method' => 'POST', 'route' => 'changelocale', 'class' => 'form-inline navbar-select']) }}
	 {{ csrf_field() }}
    <div class="form-group @if($errors->first('locale')) has-error @endif">
        <span aria-hidden="true"><i class="fa fa-flag"></i></span>
        {{ Form::select(
            'locale',
            ['en' => 'EN', 'dk' => 'DK'],
            \App::getLocale(),
            [
                'id'       => 'locale',
                'class'    => 'form-control',
                'required' => 'required',
                'onchange' => 'this.form.submit()',
            ]
        ) }}
        <small class="text-danger">{{ $errors->first('locale') }}</small>
    </div>

    <div class="btn-group pull-right sr-only">
        {{ Form::submit("Change", ['class' => 'btn btn-success']) }}
    </div>

	{{Form::close()}}
        <div class="container"> 
		@auth
            <div class="content">
			<div class="linkstyle">
			     <h1>Blog Page</h1>
				 <a class="btn btn-primary" href="{{ url('blog/create') }}">@lang('messages.create_blog_link')</a>
			</div>
		    <table class = 'skiny3' border='1'>
			<tr>
			<th class = 'skiny3'>@lang('messages.title')</th>
			<th class = 'skiny3'>@lang('messages.description')</th>
			<th class = 'skiny3'>@lang('messages.user')</th>
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
					<td>
						<a  class="btn btn-primary" href="{{ URL::to('blog/edit/' . $blog->id) }}">@lang('messages.Edit')</a>
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
