<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsleter extends Model
{
   protected $table = "newsleters";
   protected $fillable = ['email'];
}
