<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table = 'rate';
    protected $fillable = ['users_id','rooms_id','comment','rating'];


    public function room(){
        return $this->belongsTo(rooms::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
