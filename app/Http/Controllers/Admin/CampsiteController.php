<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campsite;
use App\Image;

class CampsiteController extends Controller
{
    //
    public function add()
    {
        return view('admin.campsite.create');
    }
    
    public function create(Request $request)
    {
        // Validationを行う
        
        $this->validate($request, Campsite::$rules);
        $camp = new Campsite;
        $camp->fill($request->except(["_token", "images"]));
        $camp->save();

        if (isset($request->images)) {
          foreach( $request->file("images") as $image){
             $path = $image->store('public/image');
             $image_path = basename($path);
             $image = new Image;
             $image->image_path = $image_path;
             $image->campsite_id = $camp->id;
             $image->save();
          }
        }
        
        
        return redirect('admin/campsite/create');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Campsite::where('campsite_name', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Campsite::all();
        }
        return view('admin.campsite.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
  public function edit(Request $request)
  {
      $campsite = Campsite::find($request->id);
      if (empty($campsite)) {
        abort(404);    
      }
      return view('admin.campsite.edit', ['campsite_form' => $campsite]);
  }


  public function update(Request $request)
  {
      $this->validate($request, Campsite::$rules);
      
      $campsite = Campsite::find($request->id);
      
      $campsite_form = $request->all();
      //dd($campsite_form);
    
      
      $image = Image::find('campsite_id'. $campsite->id);
      if (isset($request->images)) {
          foreach( $request->file("images") as $index => $image){
            // if ($request->remove == 'true') {
            //     $campsite_form['image_path'] = null;
            // } elseif ($request->file('image')) {
          if ($image) {
                $path = $image->store('public/image');
                $image_path = basename($path);
                $image = $campsite->images[$index];
                $image->image_path = $image_path;
                $image->campsite_id = $campsite->id;
                $image->save();
            } else {
                $campsite_forms_form['image_path'] = $campsite->image_path;
            }
          }
      }
 
      unset($campsite_form['remove']);
      unset($campsite_form['_token']);
      unset($campsite_form['images']);

      $campsite->fill($campsite_form)->save();
      return redirect('admin/campsite');
  }
  
  public function delete(Request $request)
  {
      
      $campsite = Campsite::find($request->id);
      // 削除する
      $campsite->delete();
      return redirect('admin/campsite/');
  }  

}

