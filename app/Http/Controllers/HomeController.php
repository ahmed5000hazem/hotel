<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('home', compact('hotels'));
    }
}
