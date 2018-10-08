<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function index()
    {

    	return view('dashboard.contacts.contacts');
    }
}
