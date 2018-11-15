<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', 'PostController');
  // 『resource』で生成した場合、自動的にnameの設定がされている。
  // 第三引数にonly、exceptの使用が可能
  // 『Route::resource('hoge', 'HogeController', ['only' => ['index', 'create', 'edit', 'store', 'destroy']]);』

// 基本routeを単体で生成する場合
// Route::get('/posts', 'PostsController@index');
// Route::get('/posts/{post}', 'PostsController@show')->where('post','[0-9]+');
   // idのみを取得する様に制限をかける。
   // 正規表現により、postに入る値を数字のみ受け付ける処理をさせる。
// Route::get('/posts/create', 'PostsController@create');
// Route::post('/posts', 'PostsController@store');
// Route::get('/posts/{post}/edit', 'PostsController@edit');
// Route::patch('/posts/{post}', 'PostsController@update');
// Route::delete('/posts/{post}', 'PostsController@destroy');

Route::resource('posts.comments', 'CommentController', ['only' => ['store', 'destroy']]);

Route::resource('tags', 'TagController', ['only' => ['index', 'destroy', 'store']]);

// vue.jsを表示するページ
  // .vueを用いない、htmlとjsに記述する（bladeで記述する為、jsを下部に記述）
  Route::get('vue00', function () {
      return view('vue00');
  });
  // 単一コンポーネントで記述場合（00と同等内容）
  Route::get('vue', function () {
      return view('vue');
  });


// 送信メール本文のプレビュー用ルーティング
Route::get('sample/mailable/preview', function(){
    return new App\Mail\SampleNotification();
});
// メール送信実行用ルーティング
Route::get('sample/mailable/send', 'SampleController@SampleNotification');
    // URLを入力することで送信（コントローラーのアクションが実行）される。
