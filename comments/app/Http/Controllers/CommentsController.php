<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $time = time();
      $date = date("Y-m-d H:i:s", $time);
      return response()->json([
      'time'=> $time,
      'date' => $date,
      'data' => [
        ['created' => '2020/05/25', 'username' => 'awesome', 'topic' => 'awesome', 'comment' => '24.99'],
        ['created' => '2021/06/11', 'username' => 'cool', 'topic' => 'cool', 'comment' => '59.99'],
        ['created' => '2022/07/07', 'username' => 'supercool', 'topic' => 'supercool', 'comment' => '99.99'],
        ['created' => $date, 'username' => 'supercool', 'topic' => 'supercool', 'comment' => 'Super 99.99'],
      ],
      'comments' => Comments::all(),
      ],200);
    }

    /*
    *
    * http://127.0.0.1:8000/comments?data={"username": "Awesome", "email": "awesome@awe.co", "topic": "Cool Str", "comment": "Cool Comment 100", "c00": "0000"}
    */
    public function gcomments(Request $request)
    {
      $info = "info: ";
      $info .= $_SERVER['HTTP_HOST'].", ";
      //$data = $request->data;
      //$datad = json_decode($data);
      $datad = $request;
      //echo "<br>";
      //echo "<h2>".$datad->username."</h2>";
      //echo "<br>";
      //echo "Comments:";
      //echo $info;
      $time = time();
      $date = date("Y-m-d H:i:s", $time);
      $email = trim($datad->email);
      //echo $email;
      $info = Comments::create([
        'username' => trim($datad->username),
        'email' => trim($datad->email),
        'topic' => trim($datad->topic),
        'comment' => trim($datad->comment),
        'created' => $date,
        'modified' => $date,
        'reference' => $time,
        'likes' => 1,
      ]);
      $username = $info["username"];
      return response()->json([
        'username' => $username, 'created' => $date,
        'reference' => $time, 'info' => $info
        ],200);
    }

    public function pcomments(Request $request)
    {
      $info = "info: ";
      $info .= $_SERVER['HTTP_HOST'].", ";
      //$data = $request->data;
      //$datad = json_decode($data);
      //echo "<br>";
      //echo "<h2>".$datad->username."</h2>";
      //echo "<br>";
      //echo "Comments:";
      //echo $info;
      $time = time();
      $date = date("Y-m-d H:i:s", $time);
      $datad = $request;
      $email = trim($datad->email);
      //echo $email;
      $info = Comments::create([
        'username' => trim($datad->username),
        'email' => trim($datad->email),
        'topic' => trim($datad->topic),
        'comment' => trim($datad->comment),
        'created' => $date,
        'modified' => $date,
        'reference' => $time,
        'likes' => 1,
      ]);
      $username = $info["username"];
      return response()->json([
        'username' => $username, 'created' => $date,
        'reference' => $time, 'info' => $info
        ],200);
    }

}
