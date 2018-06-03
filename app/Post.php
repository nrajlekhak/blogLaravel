<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
   protected $table = 'posts';
   //primary key
   private $primarKey = 'id';
   //enable timestamps for created and updated
   public $timestamps = true;
}
