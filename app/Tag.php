<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [''];

    public function beats() {
    	return $this->belongsToMany('App\Beat')->withTimestamps();
    }
}
