<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
   protected $table = "user_roles";
   protected $fillable = ['role_name', 'role_status', 'show_option'];

  
}
