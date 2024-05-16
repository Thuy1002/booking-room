<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table ='comment';
    protected $fillable = ['user_id','parent_id','content','rate','status','image'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function rooms(){
        return $this->belongsToMany(rooms::class,'table_comment');
    }
}
