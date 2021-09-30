@extends('layouts.app')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ソロキャンパーのためのキャンプ場検索サイト｜ソロキャンマップ')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
      <h2>全国のおすすめのキャンプ場</h2>
      <div class="posts mx-auto mt-3">
        <ul class="camp_list row">
         @foreach($posts as $campsite)
          <li class="camp_list-single col-md-3">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                <img src="{{ secure_asset("storage/image/" . $campsite->image_path) }}" class="img-thumbnail" >
              </div>
              <div class="camp-text p-3">
                <h3>{{ \Str::limit($campsite->campsite_name, 50) }}</h3>
                <p>{{ $campsite->area }}</p>
              </div>
            </div>
          </li>
          @endforeach 
        <h2>「○○」周辺都道府県から探す</h2>
        <ul class="camp_list row">
          <li class="camp_list-single col-md-3">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                <img src="images/picture.png" alt="キャンプ場">
              </div>
              <div class="camp-text p-3">
                <h3>キャンプ場1</h3>
                <p>場所：兵庫県姫路市</p>
              </div>
            </div>
          </li>
          <li class="camp_list-single col-md-3">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                <img src="images/picture.png" alt="キャンプ場">
              </div>
              <div class="camp-text p-3">
                <h3>キャンプ場1</h3>
                <p>場所：兵庫県姫路市</p>
              </div>
            </div>
          </li>
          <li class="camp_list-single col-md-3">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                <img src="images/picture.png" alt="キャンプ場">
              </div>
              <div class="camp-text p-3">
                <h3>キャンプ場1</h3>
                <p>場所：兵庫県姫路市</p>
              </div>
            </div>
          </li>
          <li class="camp_list-single col-md-3">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                <img src="images/picture.png" alt="キャンプ場">
              </div>
              <div class="camp-text p-3">
                <h3>キャンプ場1</h3>
                <p>場所：兵庫県姫路市</p>
              </div>
            </div>
          </li>
          <li class="camp_list-single col-md-3">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                <img src="images/picture.png" alt="キャンプ場">
              </div>
              <div class="camp-text p-3">
                <h3>キャンプ場1</h3>
                <p>場所：兵庫県姫路市</p>
              </div>
            </div>
          </li>
          <li class="camp_list-single col-md-3">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                <img src="images/picture.png" alt="キャンプ場">
              </div>
              <div class="camp-text p-3">
                <h3>キャンプ場1</h3>
                <p>場所：兵庫県姫路市</p>
              </div>
            </div>
          </li>
          <li class="camp_list-single col-md-3">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                <img src="images/picture.png" alt="キャンプ場">
              </div>
              <div class="camp-text p-3">
                <h3>キャンプ場1</h3>
                <p>場所：兵庫県姫路市</p>
              </div>
            </div>
          </li>
          <li class="camp_list-single col-md-3">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                <img src="images/picture.png" alt="キャンプ場">
              </div>
              <div class="camp-text p-3">
                <h3>キャンプ場1</h3>
                <p>場所：兵庫県姫路市</p>
              </div>
            </div>
          </li>
         </ul>
      </div>
    </div>
@endsection