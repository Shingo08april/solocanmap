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
    
    public function show(Request $request)
    {
         $campsite = Campsite::find($request->id);
      if (empty($campsite)) {
        abort(404);    
      }
        return view('general-user.campsite.show', ['campsite'=>$campsite]);
    }
    
    /*public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $news = News::find($request->id);
      if (empty($news)) {
        abort(404);    
      }
      return view('admin.news.edit', ['news_form' => $news]);
  }*/
}
