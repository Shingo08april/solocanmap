<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function about()
    {
        return view('general-user.about');
    }
    
    public function index()
    {
        return view('toppage');
    }
    
    public function list()
    {
        return view('general-user.campsite.list');
    }
    
    public function show()
    {
        return view('general-user.campsite.show');
    }
}
