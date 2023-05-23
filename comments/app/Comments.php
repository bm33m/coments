<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
      'reference', 'username', 'email',
      'topic', 'comment', 'created', 'modified',
      'likes',
    ];

    protected $attributse = [
      'modified' => NULL,
      'email' => NULL,
    ];

    public $timestamps = false;
}
