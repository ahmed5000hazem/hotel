@extends('layouts.master')
@section('content')
@include('components.site-header')
<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell">
                    <h1 class="text-center">Reserve Your Room</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="" class="w-1/3 m-auto ">
    <h1 class="text-slate-900 text-center text-6xl mt-12">Book Room {{$room->room_number}} <a class="text-xl text-rose-600" href="/rooms">Rooms</a></h1>
    <form method='post' action="/rooms/{{$room->id}}/book" class="border-2 mt-12 p-6 w-full">
        @csrf
            <div>
                <label class="my-8 " for="start">start</label>
                <input type="date" id="start" name="start" class="w-full p-3 border-2 rounded-lg" placeholder="Name">
            </div>
            <div>
                <label class="my-8 " for="end">end</label>
                <input type="date" id="end" name="end" class="w-full p-3 border-2 rounded-lg" placeholder="Name">
            </div>
            <div>
                <label class="my-8 " for="type">type</label>
                <input type="text" id="type" name="type" class="w-full p-3 border-2 rounded-lg">
            </div>
            <textarea name="requirement" class="border-2 w-full mt-8 h-36 p-4">Requirements</textarea>
            <button class="bg-sky-600 text-slate-50 mt-8 px-8 py-4 rounded-lg">Book</button>
    </form>
</div>
@endsection