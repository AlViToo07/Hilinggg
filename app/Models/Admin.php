<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'address',
        'telephone',
        'hub_id',
        'img_profile',
    ];

    public function user()
    {
        return $this->belongsto(Admin::class);
    }
}
