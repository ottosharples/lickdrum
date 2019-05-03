<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Beat;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Requests\BeatFormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Setup;
use App\Tag;
use App\Http\Requests\BeatEditFormRequest;

class BeatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beats = Beat::all();
        return view('backend.beats.index', compact('beats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setups = Setup::all();

        return view('backend.beats.create', compact('setups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $tags = TagsController::store($request);

        $imgPath = $request->file('img')->store('imgs');
        $pdfPath = $request->file('pdf')->store('pdfs');

        $beat = new Beat(array(
            'title' => $request->get('title'),
            'video_slug' => $request->get('slug'),
            'image' => $imgPath,
            'pdf' => $pdfPath,
            'slug' => Str::slug($request->get('title'), '-'),
            'user_id' => $user_id,
            'setup_id' => $request->get('setup'),
        ));

        $beat->save();
        $beat->tags()->sync($tags);

        return redirect('/admin/beats/create')->with('status', 'The beat has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beat = Beat::whereId($id)->firstOrFail();
        $selectedTags = implode(',', $beat->tags->pluck('name')->toArray());
        $setups = Setup::all();
        $selSetup = $beat->setup()->get();
        $selSetup = $selSetup->pluck('id');
        return view('backend.beats.edit', compact('beat', 'selectedTags', 'setups', 'selSetup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BeatEditFormRequest $request, $id)
    {
        $beat = Beat::whereId($id)->firstOrFail();
        $beat->title = $request->get('title');
        $beat->video_slug = $request->get('slug');
        $beat->setup_id = $request->get('setup');

        $tags = TagsController::store($request);

        if (!empty($request->file('img'))) {
            $imgPath = $request->file('img')->store('imgs');
            $beat->image = $imgPath;
        }

        if (!empty($request->file('pdf'))) {
            $imgPath = $request->file('pdf')->store('pdf');
            $beat->image = $imgPath;
        }

        $beat->save();
        $beat->tags()->sync($tags);

        return redirect(action('Admin\BeatsController@edit', $id))->with('status', 'Beat was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
