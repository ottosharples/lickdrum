<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beat extends Model
{
    protected $guarded = ['id'];

    public function tags() {
    	return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function setup() {
    	return $this->belongsTo('App\Setup');
    }
}
