<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Works;
use App\Models\Service;
use App\Models\ServiceHeader;
use App\Models\Contact;

use App\User;
use Mail;
use App\Mail\FeedBack;

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

    public function email(Request $request)
    {
        $data = $request->all();

        $user = new User();

        $user->email = 'abstractcloud9@gmail.com';

        // Класс Mail для отправки писем в laravel, метод to кому отправляем, метод send сама отправка письма класс нашего письма
        Mail::to($user)->send(new FeedBack());
    }
}
