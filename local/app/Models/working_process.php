<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class working_process extends Model
{
    use HasFactory;

    protected $table = "working_processes";
    protected $fillable = [
        'title',
        'image',
        'tab_item_1_hading',
        'tab_item_1_text',
        'tab_item_2_hading',
        'tab_item_2_text',
        'tab_item_3_hading',
        'tab_item_3_text',
        'tab_item_4_hading',
        'tab_item_4_text',
        'status'
    ];
}
