<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
	public $timestamps = false;
	
    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
    
    public function users()
    {
        return $this
            ->belongsToMany('App\Models\User', 'user_donne_reponse')
            ->withPivot('estJuste')
            ->withTimestamps();
    }
}