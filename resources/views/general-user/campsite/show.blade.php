@extends('layouts.front')

@section('title', '関西のキャンプ場|ソロキャンマップ')

@section('content')
  <div class="container">
    <div class="d-flex show_images-cont mb-4">
      <div class="w-50 overflow-hidden">
        @if(isset($campsite->images[0]))
         <img src="{{ secure_asset("storage/image/" . $campsite->images[0]->image_path) }}" >
        @else
         <img src="{{ secure_asset("image/noimage.png") }}">
        @endif
      </div>
      <div class="w-50 d-flex flex-wrap">
        <div class="w-50 h-50 overflow-hidden">
          @if(isset($campsite->images[1]))
           <img src="{{ secure_asset("storage/image/" . $campsite->images[1]->image_path) }}" >
          @else
           <img src="{{ secure_asset("image/noimage.png") }}">
          @endif
        </div>
        <div class="w-50 h-50 overflow-hidden">
          @if(isset($campsite->images[2]))
           <img src="{{ secure_asset("storage/image/" . $campsite->images[2]->image_path) }}" >
          @else
           <img src="{{ secure_asset("image/noimage.png") }}">
          @endif
        </div>
        <div class="w-50 h-50 overflow-hidden">
          @if(isset($campsite->images[3]))
           <img src="{{ secure_asset("storage/image/" . $campsite->images[3]->image_path) }}" >
          @else
           <img src="{{ secure_asset("image/noimage.png") }}">
          @endif
        </div>
        <div class="w-50 h-50 overflow-hidden">
          @if(isset($campsite->images[4]))
           <img src="{{ secure_asset("storage/image/" . $campsite->images[4]->image_path) }}" >
          @else
           <img src="{{ secure_asset("image/noimage.png") }}">
          @endif
        </div>
      </div>
    </div>
  </div>
<div class="container mb-5">
  <h1>{{ $campsite->campsite_name }}</h1>
  <div>{{$campsite->area}}</div>
  <h2>{{$campsite->campsite_heading}}</h2>
  <div class="text-prewrap">{{$campsite->campsite_textarea}}</div>
</div> 
<div class="container">
    <h3 class="container-title">施設情報</h3>
    <dl class="d-flex">
      <dt class="w-25">住所</dt>
      <dd class="w-75">{{ $campsite->address }}</dd>
    </dl>
    <dl class="d-flex">
      <dt class="w-25">アクセス</dt>
      <dd class="w-75 text-prewrap">{{ $campsite->access_textarea }}</dd>
    </dl>
    <dl class="d-flex">
      <dt class="w-25">駐車場</dt>
      <dd class="w-75 text-prewrap">{{ $campsite->parking }}</dd>
    </dl>
</div>
@endsection