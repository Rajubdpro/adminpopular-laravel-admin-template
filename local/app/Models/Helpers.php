<?php

namespace App\Models;
use App\user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Helpers extends Model
{
    use HasFactory;


    /**
     * Get user role name.
     * 
     * @return string
     */
    public static function get_current_role_name(){

        $loginid = Auth::id(); 
        $get_user = user::find($loginid);
         return $get_user->role->role_name;

    }


    /**
     * Get user role name.
     * 
     * @return string
     */
    public static function get_current_role_id(){

        $loginid = Auth::id(); 
        $get_user = user::find($loginid);
         return $get_user->role_id;

    }


    public static function get_current_user_id(){
        $loginid = Auth::id();
        return $loginid;
    }


}
