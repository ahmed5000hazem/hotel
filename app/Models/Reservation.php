<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $fillable = ['start', 'end', 'type', 'status', 'room_id', 'user_id', 'requirement'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
