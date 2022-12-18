<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $fillable = [
        'price_per_night',
        'room_number',
        'hotel_id',
        'image',
        'area',
        'people_number',
        'status',
    ];
    
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
