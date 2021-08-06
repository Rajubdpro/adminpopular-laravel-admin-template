<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
   protected $table = "settings";
   protected $fillable  = [
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
            'first_title',
            'second_title',
            'third_title',
            'four_title',
            'five_title',
            'six_title',
            'first_link',
            'second_link',
            'third_link',
            'four_link',
            'five_link',
            'six_link',
            'service_title1',
            'service_link1',
            'service_title2',
            'service_link2',
            'service_title3',
            'service_link3',
            'service_title4',
            'service_link4',
            'service_title5',
            'service_link5',




   ];
}
