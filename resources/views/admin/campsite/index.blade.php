@extends('layouts.front')
@section('title', '登録済みキャンプ場一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>キャンプ場一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\CampsiteController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\CampsiteController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">キャンプ場名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th></th></th>
                                <th width="20%">キャンプ場名</th>
                                <th width="20%">地域</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $campsite)
                                <tr>
                                    <th>{{ $campsite->id }}</th>
                                    <td>
                                        @if(isset($campsite->image_path1))
                                        <img src="{{ secure_asset("storage/image/" . $campsite->image_path1) }}" class="img-thumbnail" >
                                        @else
                                        <img src="{{ secure_asset("image/noimage.png") }}">
                                        @endif
                                    </td>
                                    <td>{{ \Str::limit($campsite->campsite_name, 50) }}</td>
                                    <td>{{ $campsite->area }}</td>
                                    <td>
                                        <div>
                                            <a href="{{action('Admin\CampsiteController@edit', ['id' => $campsite->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{action('Admin\CampsiteController@delete', ['id' => $campsite->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection