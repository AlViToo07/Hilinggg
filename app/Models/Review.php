<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'item_type',
        'item_id',
        'rating',
        'review',
    ];

    public function customer()
    {
        return $this->belongsto(Admin::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
