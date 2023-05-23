<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Request-With, Content-Type, Accept");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('coments', function(){
  $time = time();
  $date = date("Y-m-d H:i:s", $time);
  return response()->json([
    'date' => $date,
    'time' => $time,
    'data' => [
      ['created' => '2020/05/25', 'username' => 'awesome', 'topic' => 'awesome', 'comment' => '24.99'],
      ['created' => '2021/06/11', 'username' => 'cool', 'topic' => 'cool', 'comment' => '59.99'],
      ['created' => '2022/07/07', 'username' => 'supercool', 'topic' => 'supercool', 'comment' => '99.99'],
      ['created' => $date, 'username' => 'supercool', 'topic' => 'supercool', 'comment' => 'Super 99.99'],
    ],
    'comments' => Comments::all(),
  ],200);
});

Route::get('/gcomments','CommentsController@gcomments');
Route::post('/pcomments','CommentsController@pcomments');
