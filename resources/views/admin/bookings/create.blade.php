@extends('layouts.master')
@section('content')
    @include('components.navbar')
    <div style="" class="w-1/3 m-auto ">
        <h1 class="text-slate-900 text-center text-6xl mt-12">Create Reservation <a class="text-xl text-rose-600" href="/admin/reservations">Reservation</a></h1>
        <form method='post' action="/admin/reservations/store" class="border-2 mt-12 p-6 w-full">
            @csrf
            <div>
                <label class="my-8 " for="start">start</label>
                <input type="date" id="start" name="start" class="w-full p-3 border-2 rounded-lg" placeholder="Name">
            </div>
            <div>
                <label class="my-8 " for="end">end</label>
                <input type="date" id="end" name="end" class="w-full p-3 border-2 rounded-lg" placeholder="Name">
            </div>
            <div class="mt-6">
                <label for="select_user">user</label>
                <select name="user_id" id="select_user" class="p-4 border-2">
                    @foreach ($users as $user)
                        <option class="p-2" value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-6">
                <label for="select_room">room</label>
                <select name="room_id" id="select_room" class="p-4 border-2">
                    @foreach ($rooms as $room)
                        <option class="p-2" value="{{$room->id}}">{{$room->room_number}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="my-8 " for="type">type</label>
                <input type="text" id="type" name="type" class="w-full p-3 border-2 rounded-lg">
            </div>
            <textarea name="requirement" class="border-2 w-full mt-8 h-36 p-4">Requirements</textarea>
            <button class="bg-sky-600 text-slate-50 mt-8 px-8 py-4 rounded-lg">Create</button>
        </form>
    </div>
@endsection