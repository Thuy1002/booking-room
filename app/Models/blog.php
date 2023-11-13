<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $fillable  = ['user_id','title','status','content','image','image_description'];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function images(){
        return $this->hasMany(TableImages::class);
       }
}
