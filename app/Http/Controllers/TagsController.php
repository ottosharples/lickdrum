<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function serve($name) {
    	$tag = Tag::where('name', $name)->firstOrFail();
    	$boofs = $tag->beats()->get();
    	$beats = array();
    	$licks = array();
    	foreach ($boofs as $beat) {
    		$category = $beat->tags()->get();
    		$category_id = $category[0]->id;
    		if($category_id === 1) {
    			array_push($beats, $beat);
    		} else {
    			array_push($licks, $beat);
    		}
    	}
    	return view('tag', compact('beats', 'licks', 'tag'));
    }
}
