@extends('layouts.show')

@section('title', '関西のキャンプ場|ソロキャンマップ')

@section('content')
  <div class="container">
  <div class="d-flex show_images-cont mb-4">
    <div class="w-50 overflow-hidden"><img src="{{ secure_asset("storage/image/" . $campsite->images[0]->image_path) }}"  ></div>
    <div class="w-50 d-flex flex-wrap">
      <div class="w-50 h-50 overflow-hidden"><img src="{{ secure_asset("storage/image/" . $campsite->images[1]->image_path) }}"  ></div>
      <div class="w-50 h-50 overflow-hidden"><img src="{{ secure_asset("storage/image/" . $campsite->images[2]->image_path) }}"  ></div>
      <div class="w-50 h-50 overflow-hidden"><img src="{{ secure_asset("storage/image/" . $campsite->images[3]->image_path) }}"  ></div>
      <div class="w-50 h-50 overflow-hidden"><img src="{{ secure_asset("storage/image/" . $campsite->images[4]->image_path) }}"  ></div>
    </div>
  </div>
</div>
<h1 class="container">{{ $campsite->campsite_name }}</h1>
<div class="container">{{$campsite->area}}</div>
<h2 class="container">{{$campsite->campsite_heading}}</h2>
<div class="container">
  <p class="text-prewrap">{{$campsite->campsite_textarea}}</p>
</div>
<div class="container">
  <h3 class="container-title">施設情報</h3>
  
</div>
@endsection