<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $fillable = ['title', 'service_id', 'type_id', 'image','description_img','view' ,'floor','imagfacilitiese','description', 'price', 'status', 'capacity'];

    public function type()
    {
        return $this->belongsTo(type::class);
    }
    public function services()
    {
        return $this->belongsToMany(service::class, 'rooms_service');
    }

    public function booking()
    {
        return $this->hasMany(booking::class, 'rooms_service');
    }

    public function comments()
    {
        return $this->belongsToMany(comment::class, 'table_comment');
    }

    public function discounts(){
        return $this->hasMany(Discount::class);
    }

    public function images(){
     return $this->hasMany(TableImages::class);
    }
}
