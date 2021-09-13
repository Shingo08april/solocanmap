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
                      <label class="col-md-2">画像</label>
                      <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">キャンプ場名</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="campsite-name" value="{{ old('campsite-name') }}">
                      </div>
                    </div>
                    <h2>キャンプ場情報</h2>
                    <div class="form-group row">
                      <label class="col-md-2">キャンプ場説明見出し</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="campsite-heading" value="{{ old('campsite-heading') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2">キャンプ場説明詳細</label>
                      <div class="col-md-10">
                        <textarea class="form-control" name="campsite-textarea" rows="20">{{ old('campsite-textarea') }}</textarea>
                      </div>
                    </div>
                    <h2>キャンプ場詳細</h2>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection