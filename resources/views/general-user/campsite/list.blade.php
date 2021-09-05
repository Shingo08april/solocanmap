@extends('layouts.app')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'キャンプ場一覧')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <h1>キャンプ場一覧</h1>
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
               <ul class="camp_list">
                  <li class="camp_list-single">
                    <div class="camp-img">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場1</h3>
                    <p>場所：兵庫県姫路市</p>
                  </li>
                  <li class="camp_list-single">
                    <div class="camp-img">
                      <img src="{{ asset('image/02.jpeg') }}" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場2</h3>
                    <p>場所：兵庫県姫路市</p>
                  </li>
                  <li class="camp_list-single">
                    <div class="camp-imag">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場３</h3>
                    <p>場所：滋賀県野洲市</p>
                  </li>
                  <li class="camp_list-single">
                    <div class="camp-imag">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場4</h3>
                    <p>場所：滋賀県野洲市</p>
                  </li>
                  <li class="camp_list-single">
                    <div class="camp-imag">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場5</h3>
                    <p>場所：滋賀県野洲市</p>
                  </li>
                  <li class="camp_list-single">
                    <div class="camp-imag">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場6</h3>
                    <p>場所：滋賀県野洲市</p>
                  </li>
                  <li class="camp_list-single">
                    <div class="camp-imag">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場7</h3>
                    <p>場所：滋賀県野洲市</p>
                  </li>
                  <li class="camp_list-single">
                    <div class="camp-imag">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場8</h3>
                    <p>場所：滋賀県野洲市</p>
                  </li>
                  <li class="camp_list-single">
                    <div class="camp-imag">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場9</h3>
                    <p>場所：滋賀県野洲市</p>
                  </li>
                  <li class="camp_list-single">
                    <div class="camp-imag">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場10</h3>
                    <p>場所：滋賀県野洲市</p>
                  </li><li class="camp_list-single">
                    <div class="camp-imag">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場11</h3>
                    <p>場所：滋賀県野洲市</p>
                  </li>
                  <li class="camp_list-single">
                    <div class="camp-imag">
                      <img src="" alt="キャンプ場">
                    </div>
                    <h3>キャンプ場12</h3>
                    <p>場所：滋賀県野洲市</p>
                  </li>
                </ul>
            </div>
        </div>
    </div>
@endsection