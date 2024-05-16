<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_comment extends Model
{
    use HasFactory;
    protected $table = 'table_comment';
    protected $fillable = ['id','room_id','blog_id'];
}

