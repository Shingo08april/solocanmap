@extends('layouts.front')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ソロキャンパーのためのキャンプ場検索サイト')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
      <h2 class="font-weight-bold content-heading">全国のおすすめのキャンプ場</h2>
      <div class="posts mx-auto mt-3">
        <ul class="camp_list d-flex list-unstyled mb-5">
         @foreach($posts as $post)
         <li class="camp_list-single">
            <a href="{{route('show', ['id' => $post] )}}">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                  @if(isset($post->image_path1))
                <img src="{{ secure_asset("storage/image/" . $post->image_path1) }}" >
                  @else
                <img src="{{ secure_asset("image/noimage.png") }}">
                  @endif
              </div>
              <div class="camp-text p-3">
                <h3 class="text-dark camp_list-single-heading font-weight-bold">{{ \Str::limit($post->campsite_name, 50) }}</h3>
                <p class="text-center text-dark area-font">{{ $post->area }}</p>
              </div>
            </div>
            </a>
          </li>
         @endforeach
      </div>
    </div>
@endsection