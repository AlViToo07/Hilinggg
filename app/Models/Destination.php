<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'address',
        'district_id',
        'facilities',
        'images'
    ];

    public function reviews()
    {
        return $this->belongsto(Review::class);
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class, 'item_id');
    }
        
    public function city()
    {
        return $this->belongsto(City::class);
    }
}
