<!DOCTYPE html>
<html>
    <head>
        <title>@lang('messages.welcome')</title>
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    </head>
    <body> 
        <div class="container"> 
            <div class="content">
			<div class="linkstyle">
			     <h1>@lang('messages.user_page')</h1>
			<!--or <h1> {{ __('messages.welcome') }} </h1>
				<a href="{{ url('/create') }}">@lang('messages.create_user_link')</a>-->
			</div>
		    <table class = 'skiny3' border='1'>
			<tr>
			<th class = 'skiny3'>@lang('messages.name_th')</th>
			<th class = 'skiny3'>@lang('messages.password_th')</th>
			<th class = 'skiny3'>@lang('messages.email_th')</th>
			<th class = 'skiny3'>@lang('messages.created_at_th')</th>
                @foreach ($users as $user) 
				<tr> 
				    <td>
						{{$user->name}}
					</td>
					<td>
						{{$user->password}} 
					</td>
					<td>
						{{$user->email}} 
					</td>
					<td>
						{{$user->created_at}} 
					</td>
					<td>
						<a href="{{ URL::to('/delete/' . $user->id) }}">@lang('messages.del_link')</a>
					</td>
				</tr>	
				@endforeach
			</tr>
            </div>
			
        </div>
		{{ $users->links() }}
    </body>
</html>