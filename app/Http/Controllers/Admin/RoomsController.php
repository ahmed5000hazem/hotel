<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function bookRoom(Room $room)
    {
        return view('book-room', compact('room'));
    }

    public function storeBooking(Request $request, Room $room)
    {
        $data = $request->except('_token');
        $data['room_id'] = $room->id;
        $data['user_id'] = auth()->user()->id;
        $data['status'] = 0;
        Reservation::create($data);
        return view('message', [
            "message" => 'room booked successfully',
            "alert" => "success"
        ]);
    }

    public function getAllRooms()
    {
        $rooms = Room::with('hotel')->get();
        return view('rooms', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view('admin.rooms.create', compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        // $request->file['image'];
        $image_name = \Str::random(10) . '.' . $request->image->getClientOriginalExtension();
        // Storage::disk('public')->put("/rooms/$image_name", $request->image);
        $request->file('image')->storeAs('/rooms', $image_name, 'public');
        $data['image'] = '/rooms/' . $image_name;
        $room = Room::create($data);
        return redirect('/admin/rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->back();
    }
}
