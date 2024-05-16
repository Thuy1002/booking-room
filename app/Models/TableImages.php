<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableImages extends Model
{
    use HasFactory;
    protected $table = 'table_images';
    protected $fillable = ['id','blog_id','room_id','image_name','image_path'];

    public function room(){
        return $this->belongsTo(rooms::class);
    }
    
    public function blog(){
        return $this->belongsTo(blog::class);
    }
}
