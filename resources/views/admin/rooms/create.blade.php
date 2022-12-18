@extends('layouts.master')
@section('content')
    @include('components.navbar')
    <div style="" class="w-1/3 m-auto ">
        <h1 class="text-slate-900 text-center text-6xl mt-12">Create Room <a class="text-xl text-rose-600" href="/admin/hotels">Hotels</a></h1>
        <form method='post' action="/admin/rooms/store" enctype="multipart/form-data" class="border-2 mt-12 p-6 w-full">
            @csrf
            <input type="text" name="price_per_night" class="w-full mt-8 p-8 border-2 rounded-lg" placeholder="price per night">
            <input type="text" name="room_number" class="w-full mt-8 p-8 border-2 rounded-lg" placeholder="room number">
            <input type="text" name="area" class="w-full mt-8 p-8 border-2 rounded-lg" placeholder="area">
            <input type="text" name="people_number" class="w-full mt-8 p-8 border-2 rounded-lg" placeholder="people number">
            <input type="text" name="status" class="w-full mt-8 p-8 border-2 rounded-lg" placeholder="status">
            <div class="mt-6">
                <label for="select_hotel">Hotel</label>
                <select name="hotel_id" id="select_hotel" class="p-4 border-2">
                    @foreach ($hotels as $hotel)
                        <option class="p-2" value="{{$hotel->id}}">{{$hotel->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-6">
                <label for="room_image">image</label>
                <input type="file" name="image" id="room_image">
            </div>
            <button class="bg-sky-600 text-slate-50 mt-8 px-8 py-4 rounded-lg">Create</button>
        </form>
    </div>
@endsection