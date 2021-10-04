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
                            <input type="text" class="form-control" name="campsite_name" value="{{ $campsite_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">地域</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="area" value="{{ old('area') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{ $campsite_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
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
                    <h2>キャンプ場詳細</h2>
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
                      <label class="col-md-2">電話番号</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="tel" value="{{ old('tel') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">料金</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">営業時間</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="businesshours" value="{{ old('businesshours') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">定休日</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="holiday" value="{{ old('holiday') }}">
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