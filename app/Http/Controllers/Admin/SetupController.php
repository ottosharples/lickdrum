<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SetupFormRequest;
use App\Setup;

class SetupController extends Controller
{
    public function create() {
    	return view('backend.setups.create');
    }

    public function store(SetupFormRequest $request) {
    	$setup = new Setup(array(
    		'name' => $request->get('name'),
    		'html' => $request->get('html'),
    	));

    	$setup->save();

    	return redirect('/admin/setups/create')->with('status', 'Setup created successfully!');
    }
}
