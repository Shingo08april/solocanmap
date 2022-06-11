<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campsite;
use Storage;

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
        
        $campsite_form = $request->all();
        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($campsite_form['image1'])) {
          $path = Storage::disk('s3')->putFile('/',$campsite_form['image1'],'public');
          $campsite->image_path1 = Storage::disk('s3')->url($path);
        } else {
            $campsite->image_path1 = null;
        }
        
        if (isset($campsite_form['image2'])) {
          $path = Storage::disk('s3')->putFile('/',$campsite_form['image2'],'public');
          $campsite->image_path2 = Storage::disk('s3')->url($path);
        } else {
            $campsite->image_path2 = null;
        }
        
         if (isset($campsite_form['image3'])) {
          $path = Storage::disk('s3')->putFile('/',$campsite_form['image3'],'public');
          $campsite->image_path3 = Storage::disk('s3')->url($path);
        } else {
            $campsite->image_path3 = null;
        }
        
         if (isset($campsite_form['image4'])) {
          $path = Storage::disk('s3')->putFile('/',$campsite_form['image4'],'public');
          $campsite->image_path4 = Storage::disk('s3')->url($path);
        } else {
            $campsite->image_path4 = null;
        }
        
        if (isset($campsite_form['image5'])) {
          $path = Storage::disk('s3')->putFile('/',$campsite_form['image5'],'public');
          $campsite->image_path5 = Storage::disk('s3')->url($path);
        } else {
            $campsite->image_path5 = null;
        }
        
        // フォームから送信されてきた_tokenを削除する
        unset($campsite_form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($campsite_form['image1']);
        unset($campsite_form['image2']);
        unset($campsite_form['image3']);
        unset($campsite_form['image4']);
        unset($campsite_form['image5']);
        
        // データベースに保存する
        $campsite->fill($campsite_form);
        //$campsite->user_id=Auth::id()
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
          $path = Storage::disk('s3')->putFile('/',$campsite_form['image1'],'public');
          $campsite_form['image_path1'] = Storage::disk('s3')->url($path);
      } else {
          $campsite_form['image_path1'] = $campsite->image_path1;
      }
      
      if ($request->remove2 == 'true') {
          $campsite_form['image_path2'] = null;
      } elseif ($request->file('image2')) {
          $path = Storage::disk('s3')->putFile('/',$campsite_form['image2'],'public');
          $campsite_form['image_path2'] = Storage::disk('s3')->url($path);
      } else {
          $campsite_form['image_path2'] = $campsite->image_path1;
      }
      
      if ($request->remove1 == 'true') {
          $campsite_form['image_path3'] = null;
      } elseif ($request->file('image3')) {
          $path = Storage::disk('s3')->putFile('/',$campsite_form['image3'],'public');
          $campsite_form['image_path3'] = Storage::disk('s3')->url($path);
      } else {
          $campsite_form['image_path3'] = $campsite->image_path1;
      }
      
      if ($request->remove4 == 'true') {
          $campsite_form['image_path4'] = null;
      } elseif ($request->file('image4')) {
          $path = Storage::disk('s3')->putFile('/',$campsite_form['image4'],'public');
          $campsite_form['image_path4'] = Storage::disk('s3')->url($path);
      } else {
          $campsite_form['image_path4'] = $campsite->image_path1;
      }
      
      if ($request->remove5 == 'true') {
          $campsite_form['image_path1'] = null;
      } elseif ($request->file('image5')) {
          $path = Storage::disk('s3')->putFile('/',$campsite_form['image5'],'public');
          $campsite_form['image_path5'] = Storage::disk('s3')->url($path);
      } else {
          $campsite_form['image_path5'] = $campsite->image_path1;
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

