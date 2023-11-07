<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discount';
    protected $fillable = ['code', 'description', 'status', 'amount', 'start_date', 'end_date'];

    public function room()
    {
        return $this->belongsTo(rooms::class);
    }
    public function setCodeAttribute($value)
    {
        $this->attributes['code'] = $value ? strtoupper($value) : null;
    }
}
