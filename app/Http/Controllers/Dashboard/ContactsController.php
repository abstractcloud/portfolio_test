<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
    	$contacts = Contact::find(1);

    	return view('dashboard.contacts.contacts', [
    		'contacts' => $contacts
    	]);
    }

    public function store(Request $request)
    {
    	$data = $request->all();

    	$contacts = Contact::find(1);
    	$contacts->update($data);
    	
    	return view('dashboard.contacts.contacts', [
    		'contacts' => $contacts
    	]);
    }
}
