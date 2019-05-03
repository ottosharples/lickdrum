<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;

class TagsController extends Controller
{
    public static function store($request) {
    	$tags = $request->get('tags');
    	$tagsArray = explode(',', $tags);

    	$id_array = array();

    	foreach ($tagsArray as $tagString) {
    		$tag = Tag::firstOrCreate(['name' => $tagString]);
    		$id = array();
	    	array_push($id_array, $tag->id);
    	}

    	return $id_array;
    }
}
