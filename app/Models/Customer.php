<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'telephone',
        'img_profile',
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
    
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    
    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
}
