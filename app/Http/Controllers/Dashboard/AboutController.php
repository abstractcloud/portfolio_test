<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
    	$about = About::find(1);
    	
    	return view('dashboard.about.about', [
    		'about' => $about
    	]);
    }

    public function store(Request $request)
    {
    	$data = $request->all();

    	About::find(1)->update($data);

    	return back();
    }
}
