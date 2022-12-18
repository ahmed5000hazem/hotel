@extends('layouts.master')
@section('content')
    @include('components.navbar')
    <h2 class="text-center text-5xl">Rooms</h2>
    <div class="content px-24 mt-32">
        <a href="/admin/rooms/create" class="rounded-lg text-slate-50 px-8 py-4 bg-sky-600">create</a>
    </div>
    <div class="table mt-12">
        <table class="border-collapse border-2 border-slate-500 w-3/4 m-auto">
            <thead>
            <tr>
                <th class="border px-8 text-sky-600 border-slate-600">id</th>
                <th class="border px-8 text-sky-600 border-slate-600">price per night</th>
                <th class="border px-8 text-sky-600 border-slate-600">room number</th>
                <th class="border px-8 text-sky-600 border-slate-600">area</th>
                <th class="border px-8 text-sky-600 border-slate-600">people number</th>
                
                <th class="border px-8 text-sky-600 border-slate-600">img</th>
                <th class="border px-8 text-sky-600 border-slate-600">status</th>
                <th class="border px-8 text-sky-600 border-slate-600">created at</th>
                <th class="border px-8 text-sky-600 border-slate-600">controls</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr class="text-center">
                        <td class="border border-slate-700">{{$room->id}}</td>
                        <td class="border border-slate-700">{{$room->price_per_night}}</td>
                        <td class="border border-slate-700">{{$room->room_number}}</td>
                        <td class="border border-slate-700">{{$room->area}} M <sup>2</sup> </td>
                        <td class="border border-slate-700">{{$room->people_number}} people</td>
                        <td class="border border-slate-700 p-1">
                            <img class="w-24" src="{{env('APP_URL').'/storage'.$room->image}}" alt="">
                        </td>
                        <td class="border border-slate-700">{{$room->status}}</td>
                        <td class="border border-slate-700">{{$room->created_at}}</td>
                        <td class="p-1">
                            <form action="/admin/rooms/delete/{{$room->id}}" method="POST">
                                @csrf   
                                <button class="py-2 px-6 rounded-lg text-slate-50 bg-rose-600">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection