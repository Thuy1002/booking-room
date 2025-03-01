<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = ['id','categori_service_id','title','duration','price','status','image','description'];


    public function categori(){
        return $this->belongsTo(categori_service::class,'categori_service_id');
    }
    public function booking(){
        return $this->belongsToMany(booking::class,'booking_service');
    }
}
