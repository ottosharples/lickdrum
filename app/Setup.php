<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    protected $guarded = ['id'];

    public function beats() {
    	return $this->belongsToMany('App\Beat');
    }
}
