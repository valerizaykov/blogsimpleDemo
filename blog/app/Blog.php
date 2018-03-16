<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
	public $timestamps = false;
	public function users()
    {
        return $this->belongsTo('App\User' ,'user_id');
    }
}
