<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categori_service extends Model
{
    use HasFactory;
    protected $table = 'categori_service';
    protected $fillable = ['title','content','status','image'];

    public function services(){
        return $this->hasMany(service::class);
    }

}
