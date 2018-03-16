<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;
//use Illuminate\Http\Request;

class LocaleSet
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
		 //$locale = Session::get('locale', Config::get('app.locale'));
		
		if (Session::has('locale')) {
            $locale = Session::get('locale', Config::get('app.locale'));
			//$locale = session('locale');
			//print_r($locale);die;
        } else {
            $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
            //print_r($locale);die;
            if ($locale != 'dk' && $locale != 'en') {
                $locale = 'en';
            }
        }
        //print_r("locale:".session('locale')) ;
        App::setLocale(Session::get('locale'));
		
        return $next($request);
    }
}
