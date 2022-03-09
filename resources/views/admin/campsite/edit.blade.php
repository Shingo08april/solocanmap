@extends('layouts.front')
@section('title', 'キャンプ場の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>キャンプ場編集</h2>
                <form action="{{ action('Admin\CampsiteController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">キャンプ場名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="campsite_name" value="{{ $campsite_form->campsite_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">地域</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="area" value="{{$campsite_form->area}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image1">
                            <div class="form-text text-info">
                                @if(isset($campsite_form->image_path1))
                                設定中: {{ $campsite_form->image_path1 }}
                                @else
                                画像なし
                                @endif
                            </div>
                            @if(isset($campsite_form->image_path1))
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove1" value="true">画像を削除
                                </label>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image2">
                            <div class="form-text text-info">
                                @if(isset($campsite_form->image_path2))
                                設定中: {{ $campsite_form->image_path2 }}
                                @else
                                画像なし
                                @endif
                            </div>
                             @if(isset($campsite_form->image_path2))
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove2" value="true">画像を削除
                                </label>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image3">
                            <div class="form-text text-info">
                                @if(isset($campsite_form->image_path3))
                                設定中: {{ $campsite_form->image_path3 }}
                                @else
                                画像なし
                                @endif
                            </div>
                             @if(isset($campsite_form->image_path3))
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove3" value="true">画像を削除
                                </label>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image4">
                            <div class="form-text text-info">
                                @if(isset($campsite_form->image_path4))
                                設定中: {{ $campsite_form->image_path4 }}
                                @else
                                画像なし
                                @endif
                            </div>
                             @if(isset($campsite_form->image_path4))
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove4" value="true">画像を削除
                                </label>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image5">
                            <div class="form-text text-info">
                                @if(isset($campsite_form->image_path5))
                                設定中: {{ $campsite_form->image_path5 }}
                                @else
                                画像なし
                                @endif
                            </div>
                             @if(isset($campsite_form->image_path5))
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove5" value="true">画像を削除
                                </label>
                            </div>
                            @endif
                        </div>
                    </div>
                      <h2>キャンプ場情報</h2>
                      <div class="form-group row">
                        <label class="col-md-2">キャンプ場説明見出し</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="campsite_heading" value="{{ $campsite_form->campsite_heading }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-2">キャンプ場説明詳細</label>
                        <div class="col-md-10">
                          <textarea class="form-control" name="campsite_textarea" rows="20">{{ $campsite_form->campsite_textarea }}</textarea>
                        </div>
                      </div>
                      <h2>施設情報</h2>
                      <div class="form-group row">
                        <label class="col-md-2">住所</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="address" value="{{ $campsite_form->address }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-2">アクセス</label>
                        <div class="col-md-10">
                          <textarea class="form-control" name="access_textarea" rows="20">{{ $campsite_form->access_textarea }}</textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-2">駐車場</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="parking" value="{{$campsite_form->parking }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-2">乗り換え可能車両</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="vehicle" value="{{$campsite_form->vehicle }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-2">立地環境</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="habitat" value="{{$campsite_form->habitat }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-2">施設タイプ</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="campsite_type" value="{{$campsite_form->campsite_type }}">
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="col-md-2">レンタル可能用品</label>
                        <div class="col-md-10">
                          <textarea class="form-control" name="rental_item" rows="15">{{ $campsite_form->rental_item }}</textarea>
                        </div>
                      </div>
                      <h2>営業情報</h2>
                      <div class="form-group row">
                        <label class="col-md-2">営業期間</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="business_period" value="{{ $campsite_form->business_period }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-2">定休日</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="holiday" value="{{ $campsite_form->holiday }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-2">チェックイン</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="check_in" value="{{$campsite_form->check_in }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-2">チェックアウト</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="check_out" value="{{$campsite_form->check_out }}">
                        </div>
                      </div>
                      <div class="form-group row">
                      <label class="wrapper" for="states">クレジットカード</label>
                        <div class="button dropdown"> 
                          <select name="credit_card">
                             @if($campsite_form->credit_card =='available' )
                                 <option value="available" selected>ご利用いただけます。</option>
                                 <option value="unavailable">ご利用いただけません。</option>
                             @else
                                 <option value="available">ご利用いただけます。</option>
                                 <option value="unavailable" selected>ご利用いただけません。</option>
                             @endif
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-2">利用タイプ</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="camp_style" value="{{ $campsite_form->camp_style }}">
                        </div>
                      </div>
                    　<div class="form-group row">
                          <div class="col-md-10">
                              <input type="hidden" name="id" value="{{ $campsite_form->id }}">
                              {{ csrf_field() }}
                              <input type="submit" class="btn btn-primary" value="更新">
                          </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection