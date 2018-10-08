<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Works;
use App\Models\Service;
use App\Models\ServiceHeader;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::find(1);
    	$serviceHeader = ServiceHeader::find(1);
        $works = Works::all();
        $services = Service::all();
        $contacts = Contact::find(1);

        return view('index', [
    		'about' => $about,
            'works' => $works,
            'services' => $services,
            'serviceHeader' => $serviceHeader,
            'contacts' => $contacts
    	]);
    }
}
