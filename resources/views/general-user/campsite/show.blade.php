@extends('layouts.front')

@section('title', '関西のキャンプ場|solocanmap')

@section('content')
  <div class="container">
    <div class="d-flex show_images-cont mb-4">
      <div class="w-50 overflow-hidden">
        @if(isset($campsite->image_path1))
         <img src="{{ secure_asset("storage/image/" . $campsite->image_path1) }}" >
        @else
         <img src="{{ secure_asset("image/noimage.png") }}">
        @endif
      </div>
      <div class="w-50 d-flex flex-wrap">
        <div class="w-50 h-50 overflow-hidden">
          @if(isset($campsite->image_path2))
           <img src="{{ secure_asset("storage/image/" . $campsite->image_path2) }}" >
          @else
           <img src="{{ secure_asset("image/noimage.png") }}">
          @endif
        </div>
        <div class="w-50 h-50 overflow-hidden">
          @if(isset($campsite->image_path3))
           <img src="{{ secure_asset("storage/image/" . $campsite->image_path3) }}" >
          @else
           <img src="{{ secure_asset("image/noimage.png") }}">
          @endif
        </div>
        <div class="w-50 h-50 overflow-hidden">
          @if(isset($campsite->image_path4))
           <img src="{{ secure_asset("storage/image/" . $campsite->image_path4) }}" >
          @else
           <img src="{{ secure_asset("image/noimage.png") }}">
          @endif
        </div>
        <div class="w-50 h-50 overflow-hidden">
          @if(isset($campsite->image_path5))
           <img src="{{ secure_asset("storage/image/" . $campsite->image_path5) }}" >
          @else
           <img src="{{ secure_asset("image/noimage.png") }}">
          @endif
        </div>
      </div>
    </div>
  </div>
<div class="campcont container">
  <h1 class="campcont_name">{{ $campsite->campsite_name }}</h1>
  <div>{{$campsite->area}}</div>
  <h2 class="campcont_heading">{{$campsite->campsite_heading}}</h2>
  <div class="text-prewrap mb-4">{{$campsite->campsite_textarea}}</div>
  <h3 class="campcont_campsite-info container-title">施設情報</h3>
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
  <dl class="d-flex">
    <dt class="w-25">乗り入れ可能車両</dt>
    <dd class="w-75 text-prewrap">{{ $campsite->vehicle }}</dd>
  </dl>
  <dl class="d-flex">
    <dt class="w-25">立地環境</dt>
    <dd class="w-75 text-prewrap">{{ $campsite->habitat }}</dd>
  </dl>
  <dl class="d-flex">
    <dt class="w-25">施設タイプ</dt>
    <dd class="w-75 text-prewrap">{{ $campsite->campsite_type }}</dd>
  </dl>
  <dl class="d-flex">
    <dt class="w-25">レンタル可能用品</dt>
    <dd class="w-75 text-prewrap">{{ $campsite->rental_item }}</dd>
  </dl>
  <h3 class="campcont_business-info container-title mt-4">営業情報</h3>
  <dl class="d-flex">
    <dt class="w-25">営業期間</dt>
    <dd class="w-75 text-prewrap">{{ $campsite->business_period }}</dd>
  </dl>
  <dl class="d-flex">
    <dt class="w-25">定休日</dt>
    <dd class="w-75 text-prewrap">{{ $campsite->holiday }}</dd>
  </dl>
  <dl class="d-flex">
    <dt class="w-25">チェックイン</dt>
    <dd class="w-75 text-prewrap">{{ $campsite->check_out }}</dd>
  </dl>
  <dl class="d-flex">
    <dt class="w-25">チェックアウト</dt>
    <dd class="w-75 text-prewrap">{{ $campsite->check_out }}</dd>
  </dl>
  <dl class="d-flex">
    <dt class="w-25">クレジットカード</dt>
    @if( $campsite->credit_card == 'available' )
      <dd class="w-75 text-prewrap">ご利用いただけます。</dd>
    @else
      <dd class="w-75 text-prewrap">ご利用いただけません。</dd>
    @endif
  </dl>
  <dl class="d-flex">
    <dt class="w-25">利用タイプ</dt>
    <dd class="w-75 text-prewrap">{{ $campsite->camp_style }}</dd>
  </dl>
</div>
@endsection