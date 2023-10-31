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
 
}
