<?php

namespace App\Http\Middleware;

use Closure;

class CheckCreateForm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if($request->username=='' or $request->password=='')  
		{
			return redirect('create')->with(['message' => 'none of the fields can be empty']);
		}
        return $next($request);
    }
}
