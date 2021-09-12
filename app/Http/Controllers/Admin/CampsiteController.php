<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampsiteController extends Controller
{
    //
    public function add()
    {
        return view('admin.campsite.create');
    }
    
    public function create(Request $request)
  {
      // admin/news/createにリダイレクトする
      return redirect('admin/campsite/create');
  }  
}

