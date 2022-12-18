@extends('layouts.master')
@section('content')
    @include('components.navbar')
    <h2 class="text-center text-5xl">Reservation</h2>
    <div class="content px-24 mt-32">
        <a href="/admin/reservations/create" class="rounded-lg text-slate-50 px-8 py-4 bg-sky-600">create</a>
    </div>
    <div class="table mt-12">
        <table class="border-collapse border-2 border-slate-500 w-3/4 m-auto">
            <thead>
            <tr>
                <th class="border px-8 text-sky-600 border-slate-600">id</th>
                <th class="border px-8 text-sky-600 border-slate-600">start</th>
                <th class="border px-8 text-sky-600 border-slate-600">end</th>
                <th class="border px-8 text-sky-600 border-slate-600">type</th>
                <th class="border px-8 text-sky-600 border-slate-600">status</th>
                <th class="border px-8 text-sky-600 border-slate-600">user</th>
                <th class="border px-8 text-sky-600 border-slate-600">room</th>
                <th class="border px-8 text-sky-600 border-slate-600">requirement</th>
                <th class="border px-8 text-sky-600 border-slate-600">created</th>
                <th class="border px-8 text-sky-600 border-slate-600">controls</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr class="text-center">
                        <td class="border border-slate-700">{{$reservation->id}}</td>
                        <td class="border border-slate-700">{{$reservation->start}}</td>
                        <td class="border border-slate-700">{{$reservation->end}}</td>
                        <td class="border border-slate-700">{{$reservation->type}}</td>
                        <td class="border border-slate-700">{{$reservation->status == 0?"pending" : 'confirmed'}}</td>
                        <td class="border border-slate-700">{{$reservation->user->name}}</td>
                        <td class="border border-slate-700">{{$reservation->room->room_number}}</td>
                        <td class="border border-slate-700">{{$reservation->requirement}}</td>
                        <td class="border border-slate-700">{{$reservation->created_at}}</td>
                        <td class="p-1">
                            <form action="/admin/reservations/delete/{{$reservation->id}}" method="POST">
                                @csrf   
                                <button class="py-2 px-6 rounded-lg text-slate-50 bg-rose-600">delete</button>
                            </form>
                            @if (!$reservation->status)
                                <form action="/admin/reservations/confirm/{{$reservation->id}}" method="POST">
                                    @csrf   
                                    <button class="py-2 px-6 rounded-lg mt-2 text-slate-50 bg-green-600">confirm</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection