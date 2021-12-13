@extends('layouts.front')
@section('title', 'キャンプ場登録')

@section('content')
    <div class="container">
      <li><a href="https://1a6b97bf05f84026aed26cd79bfe566d.vfs.cloud9.ap-northeast-1.amazonaws.com/">トップページ</a></li>
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
                        <input type="file" class="form-control-file" name="images[]">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">画像2</label>
                      <div class="col-md-10">
                        <input type="file" class="form-control-file" name="images[]">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">画像3</label>
                      <div class="col-md-10">
                        <input type="file" class="form-control-file" name="images[]">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">画像4</label>
                      <div class="col-md-10">
                        <input type="file" class="form-control-file" name="images[]">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">画像5</label>
                      <div class="col-md-10">
                        <input type="file" class="form-control-file" name="images[]">
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
                    <h2>営業情報</h2>
                    <div class="form-group row">
                      <label class="col-md-2">営業期間</label>
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
                    //チェックイン
                    //チェックアウト
                    //クレジットカード
                    //利用タイプ
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection