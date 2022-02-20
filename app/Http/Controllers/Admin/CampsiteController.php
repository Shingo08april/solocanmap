<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campsite;

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
        $campsite = new Campsite;
        
        $form = $request->all();
        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image1'])) {
          $path = $request->file('image1')->store('public/image');
          $campsite->image_path1 = basename($path);
        } else {
            $campsite->image_path1 = null;
        }
        
        if (isset($form['image2'])) {
          $path = $request->file('image2')->store('public/image');
          $campsite->image_path2 = basename($path);
        } else {
            $campsite->image_path2 = null;
        }
        
        if (isset($form['image3'])) {
          $path = $request->file('image3')->store('public/image');
          $campsite->image_path3 = basename($path);
        } else {
            $campsite->image_path3 = null;
        }
        
        if (isset($form['image4'])) {
          $path = $request->file('image4')->store('public/image');
          $campsite->image_path4 = basename($path);
        } else {
            $campsite->image_path4 = null;
        }
        
        if (isset($form['image5'])) {
          $path = $request->file('image5')->store('public/image');
          $campsite->image_path5 = basename($path);
        } else {
            $campsite->image_path5 = null;
        }
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image1']);
        unset($form['image2']);
        unset($form['image3']);
        unset($form['image4']);
        unset($form['image5']);
        
        // データベースに保存する
        $campsite->fill($form);
        $campsite->save();
        if ($request->remove1 == 'true') {
          $campsite_form['image_path1'] = null;
      } elseif ($request->file('image1')) {
          $path = $request->file('image1')->store('public/image');
          $campsite_form['image_path1'] = basename($path);
      } else {
          $news_form['image_path1'] = $campsite->image_path;
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
    // dd($request);
      $this->validate($request, Campsite::$rules);
      
      $campsite = Campsite::find($request->id);
      
      $campsite_form = $request->all();
      
      if ($request->remove1 == 'true') {
          $campsite_form['image_path1'] = null;
      } elseif ($request->file('image1')) {
          $path = $request->file('image1')->store('public/image');
          $campsite_form['image_path1'] = basename($path);
      } else {
          $campsite_form['image_path1'] = $campsite->image_path1;
      }
      
      if ($request->remove2 == 'true') {
          $campsite_form['image_path2'] = null;
      } elseif ($request->file('image2')) {
          $path = $request->file('image2')->store('public/image');
          $campsite_form['image_path2'] = basename($path);
      } else {
          $campsite_form['image_path2'] = $campsite->image_path2;
      }
      
      if ($request->remove3 == 'true') {
          $campsite_form['image_path3'] = null;
      } elseif ($request->file('image3')) {
          $path = $request->file('image3')->store('public/image');
          $campsite_form['image_path3'] = basename($path);
      } else {
          $campsite_form['image_path3'] = $campsite->image_path3;
      }
      
      if ($request->remove4 == 'true') {
          $campsite_form['image_path4'] = null;
      } elseif ($request->file('image4')) {
          $path = $request->file('image4')->store('public/image');
          $campsite_form['image_path4'] = basename($path);
      } else {
          $campsite_form['image_path4'] = $campsite->image_path4;
      }
      
      if ($request->remove5 == 'true') {
          $campsite_form['image_path5'] = null;
      } elseif ($request->file('image5')) {
          $path = $request->file('image5')->store('public/image');
          $campsite_form['image_path5'] = basename($path);
      } else {
          $campsite_form['image_path5'] = $campsite->image_path5;
      }
      // 該当するデータを上書きして保存する
      
      unset($campsite_form['image1']);
      unset($campsite_form['image2']);
      unset($campsite_form['image3']);
      unset($campsite_form['image4']);
      unset($campsite_form['image5']);
      unset($campsite_form['remove1']);
      unset($campsite_form['remove2']);
      unset($campsite_form['remove3']);
      unset($campsite_form['remove4']);
      unset($campsite_form['remove5']);
      unset($campsite_form['_token']);
      
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

