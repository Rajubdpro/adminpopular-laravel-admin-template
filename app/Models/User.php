<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','photo', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static $rules = [
        'name' => 'required|max:50',
        'email' => 'required|unique:users,email',
        'phone' => 'max:14|unique:users,phone',
        'password' => 'min:8',
        'photo' => 'mimes:jpeg,jpg,png,gif|max:2048',
    ];


    public function role(){
        return $this->belongsTo(user_role::class, 'role_id');
    }
}
