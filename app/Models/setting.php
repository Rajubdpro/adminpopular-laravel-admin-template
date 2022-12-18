<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
   protected $table = "settings";
   protected $fillable  = [
            'app_name',
            'favicon',
            'logo',
            'about_us',
            'email',
            'email2',
            'primary_color',
            'phone',
            'phone2',
            'address',
            'google_map',
            'copyright',
            'google_analytics',
            'live_chat',
            'facebook',
            'twitter',
            'linkedin',
            'google',
            'youtube',
            'pinterest',
            'dribble',
            'instagram',

   ];
}
