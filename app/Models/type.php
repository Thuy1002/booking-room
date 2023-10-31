<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $table = 'types';
    protected $fillable = ['title', 'content', 'status'];


    public function room()
    {
        return  $this->hasMany(rooms::class);
    }
    public function service_room()
    {
        return $this->belongsTo(rooms_service::class);
    }
}
