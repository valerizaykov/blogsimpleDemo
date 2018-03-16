@extends('layouts.app')

@section('content')
<script class="jsbin" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {    // add listener for document ready
    $('#user').change(function() {     //add a listener for change
      var selectedValue = $(this).find(":selected").text();
      $('#inputuser').val(selectedValue);
    });

  });
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Blog</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('store', $blogs->id) }}" >
																					  
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title"
								
								@if (!$errors->has('title')) 
									value="{{$blogs->title}}"  
								@else
									value="{{ old('title') }}"
								@endif>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" rows="4" >{{$blogs->description}}  </textarea>
							
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
					    <div class="form-group{{ $errors->has('User') ? ' has-error' : '' }}">
                            <label for="User" class="col-md-4 control-label">User</label>
                            <div class="col-md-6">
                               <select name="user" id="user">
							    @foreach($users as $user)
								    <option value="{{ $user->id}}">{{ $user->name}}</option>
								 @endforeach
								</select>
								<input id="inputuser" type="text" class="form-control" name="inputuser">
                            </div>
							
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
