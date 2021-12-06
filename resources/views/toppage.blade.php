@extends('layouts.front')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ソロキャンパーのためのキャンプ場検索サイト')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
      <h3>全国のおすすめのキャンプ場</h3>
      <div class="posts mx-auto mt-3">
        <ul class="camp_list row list-unstyled mb-5">
         @foreach($posts as $post)
         <li class="camp_list-single col-md-3">
            <a href="{{route('show', ['id' => $post] )}}">
            <div class="border rounded-lg overflow-hidden">
              <div class="camp-img">
                  @if(isset($post->images[0]))
                <img src="{{ secure_asset("storage/image/" . $post->images[0]->image_path) }}" class="img-thumbnail" >
                  @else
                <img src="{{ secure_asset("image/noimage.png") }}">
                  @endif
              </div>
              <div class="camp-text p-3">
                <h3 class="h5 text-dark">{{ \Str::limit($post->campsite_name, 50) }}</h3>
                <p class="text-center text-dark">{{ $post->area }}</p>
              </div>
            </div>
            </a>
          </li>
         @endforeach
      </div>
    </div>
@endsection