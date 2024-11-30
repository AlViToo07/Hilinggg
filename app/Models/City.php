<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'images'
    ];

    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }
}