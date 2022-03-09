@extends('layouts.front')
@section('title', 'キャンプ場登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>キャンプ場登録</h2>
                <form action="{{ action('Admin\CampsiteController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                      <label class="col-md-2">画像1</label>
                      <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">画像2</label>
                      <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">画像3</label>
                      <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image3">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">画像4</label>
                      <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image4">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">画像5</label>
                      <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image5">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">キャンプ場名</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="campsite_name" value="{{ old('campsite_name') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">地域</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="area" value="{{ old('area') }}">
                      </div>
                    </div>
                    <h2>キャンプ場情報</h2>
                    <div class="form-group row">
                      <label class="col-md-2">キャンプ場説明見出し</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="campsite_heading" value="{{ old('campsite_heading') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">キャンプ場説明詳細</label>
                      <div class="col-md-10">
                        <textarea class="form-control" name="campsite_textarea" rows="20">{{ old('campsite_textarea') }}</textarea>
                      </div>
                    </div>
                    <h2>施設情報</h2>
                    <div class="form-group row">
                      <label class="col-md-2">住所</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">アクセス</label>
                      <div class="col-md-10">
                        <textarea class="form-control" name="access_textarea" rows="20">{{ old('access_textarea') }}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">駐車場</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="parking" value="{{ old('parking') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">乗り入れ可能車両</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="vehicle" value="{{ old('vehicle') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">立地環境</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="habitat" value="{{ old('habitat') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">施設タイプ</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="campsite_type" value="{{ old('campsite_type') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">レンタル可能用品</label>
                      <div class="col-md-10">
                        <textarea class="form-control" name="rental_item" rows="15">{{ old('rental_item') }}</textarea>
                      </div>
                    </div>
                    <h2>営業情報</h2>
                    <div class="form-group row">
                      <label class="col-md-2">営業期間</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="business_period" value="{{ old('business_period') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">定休日</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="holiday" value="{{ old('holiday') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">チェックイン</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="check_in" value="{{ old('check_in') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">チェックアウト</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="check_out" value="{{ old('check_out') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="wrapper" for="states">クレジットカード</label>
                      <div class="button dropdown"> 
                        <select name="credit_card">
                           <option value="available">ご利用いただけます。</option>
                           <option value="unavailable">ご利用いただけません。</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">利用タイプ</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="camp_style" value="{{ old('camp_style') }}">
                      </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection