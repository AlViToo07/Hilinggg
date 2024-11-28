<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'hotel_url',
        'address',
        'district_id',
        'facilities',
        'images'
    ];

    public function reviews()
    {
        return $this->belongsto(Review::class);
    }
    
}
