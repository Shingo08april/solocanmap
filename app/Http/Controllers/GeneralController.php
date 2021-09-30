<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campsite;

class GeneralController extends Controller
{
    //
    public function about()
    {
        return view('general-user.about');
    }
    
    public function index()
    {
        $posts = Campsite::all();
        return view('toppage', ['posts' => $posts]);
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
