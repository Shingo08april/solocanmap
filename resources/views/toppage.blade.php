@extends('layouts.common')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ソロキャンパーのためのキャンプ場検索サイト')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
      <h3>全国のおすすめのキャンプ場</h3>
      <div class="posts mx-auto mt-3">
        <ul class="camp_list row list-unstyled mb-5">
         @for($i = 0; $i < 4; $i++)
         @if($i > count($posts)-1)
         @break
         @endif
         <li class="camp_list-single col-md-3">
            <a href="{{route('show', ['id' => $posts[$i]->id] )}}">
            <div class="border rounded-lg overflow-hidden">
              @if(null != $posts[$i]->image)
              <div class="camp-img">
                <img src="{{ secure_asset("storage/image/" . $posts[$i]->image->image_path) }}" class="img-thumbnail" >
              </div>
              @endif
              <div class="camp-text p-3">
                <h3>{{ \Str::limit($posts[$i]->campsite_name, 50) }}</h3>
                <p>{{ $posts[$i]->area }}</p>
              </div>
            </div>
            </a>
          </li>
         @endfor
         </ul>
        <h2>「近畿」周辺都道府県から探す</h2>
         <ul class="camp_list row list-unstyled">
         @for($i = 0; $i < 8; $i++)
         @if($i > count($posts)-1)
         @break
         @endif
         <li class="camp_list-single col-md-3">
            <a href="{{route('show', ['id' => $posts[$i]->id] )}}">
            <div class="border rounded-lg overflow-hidden">
              @if(null != $posts[$i]->image)
              <div class="camp-img">
                <img src="{{ secure_asset("storage/image/" . $posts[$i]->image->image_path) }}" class="img-thumbnail" >
              </div>
              @endif
              <div class="camp-text p-3">
                <h3>{{ \Str::limit($posts[$i]->campsite_name, 50) }}</h3>
                <p>{{ $posts[$i]->area }}</p>
              </div>
            </div>
            </a>
          </li>
         @endfor
        </ul>
      </div>
    </div>
@endsection