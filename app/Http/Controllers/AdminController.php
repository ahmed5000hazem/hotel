<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $reservations = Reservation::count('id');
        $rooms = Room::count('id');
        $hotels = Hotel::count('id');
        return view('admin.home', compact('reservations', 'rooms', 'hotels'));
    }
}
