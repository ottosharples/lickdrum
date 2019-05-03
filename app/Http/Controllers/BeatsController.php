<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beat;
use App\Tag;
use Illuminate\Support\Facades\Storage;

class BeatsController extends Controller
{
    public function index() {
    	 $beats = Tag::whereId(1)->firstOrFail()->beats;
    	 $licks = Tag::whereId(2)->firstOrFail()->beats;

    	 return view('beats', compact('beats', 'licks'));
    }

    public function show($slug) {
    	$beat = Beat::whereSlug($slug)->firstOrFail();
    	$tags = $beat->tags;
    	$setup = $beat->setup()->get();

    	$image = Storage::url($beat->image);
        $pdf = Storage::url($beat->pdf);

    	return view('beat', compact('beat', 'tags', 'setup', 'image', 'pdf'));
    }

    public function search() {
        $search = \Request::get('search');

        $boofs = Beat::where('title', 'like', '%'.$search.'%')->orderBy('title')->get();
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
        return view('beats', compact('beats', 'licks'));
    }
}
