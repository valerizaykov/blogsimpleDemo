<html>
<body>
<form action = "/store" method='post'>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
User name:<br>
<input type = "text" name="username">
<br>
Password:<br>
<input type = "password" name="password">
<br>
Confirm Password:<br>
<input type = "password" name="password_confirmation">
<br>
<input type="submit" value="Submit">
</form>
<!--@if (session('message'))
	{{ session('message') }}
@endif	-->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
</body>
</html>