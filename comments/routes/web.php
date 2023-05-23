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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/commentsapp', function () {
    return view('comments');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/', function(){
  $time = time();
  $date = date("Y-m-d H:i:s", $time);
  return response()->json([
    'date' => $date,
    'time' => $time,
    'comments' => [
      ['created' => '2020/05/25', 'username' => 'awesome', 'topic' => 'awesome', 'comment' => '24.99'],
      ['created' => '2021/06/11', 'username' => 'cool', 'topic' => 'cool', 'comment' => '59.99'],
      ['created' => '2022/07/07', 'username' => 'supercool', 'topic' => 'supercool', 'comment' => '99.99'],
      ['created' => $date, 'username' => 'supercool', 'topic' => 'supercool', 'comment' => 'Super 99.99'],
    ],
  ],200);
});

Route::get('/gcomments','CommentsController@gcomments');
//Route::post('/gcomments','CommentsController@gcomments');
Route::post('/pcomments','CommentsController@pcomments');
Route::get('/index','CommentsController@index');
