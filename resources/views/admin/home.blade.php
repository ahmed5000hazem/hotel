@extends('layouts.master')
@section('content')
    @include('components.navbar')
    <div class="flex justify-evenly	mt-96">
        <div class="text-center bg-rose-600 rounded-lg text-slate-50 p-24 w-1/4"># Rooms <span class="text-4xl"> {{$rooms}} </span> </div>
        <div class="text-center bg-sky-600 rounded-lg text-slate-50 p-24 w-1/4"># Hotels <span class="text-4xl"> {{$reservations}} </span> </div>
        <div class="text-center bg-gray-600 rounded-lg text-slate-50 p-24 w-1/4"># Reservations <span class="text-4xl"> {{$hotels}} </span> </div>
    </div>
@endsection