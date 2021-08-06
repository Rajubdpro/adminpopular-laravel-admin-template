<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
   protected $table = "pages";
   protected $fillable  = ['page_name','title','slug','sirial','page_display','contents','photo','meta_tag','meta_des','status'];
}
