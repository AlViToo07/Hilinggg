<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'item_type',
        'item_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // public function hotel()
    // {
    //     return $this->belongsTo(Hotel::class);
    // }

    // public function event()
    // {
    //     return $this->belongsTo(Event::class);
    // }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'item_id');
    }

    // public function item()
    // {
    //     return $this->morphTo();
    // }
}
