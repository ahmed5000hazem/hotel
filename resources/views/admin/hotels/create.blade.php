@extends('layouts.master')
@section('content')
    @include('components.navbar')
    <div style="" class="w-1/3 m-auto ">
        <h1 class="text-slate-900 text-center text-6xl mt-12">Create Hotel <a class="text-xl text-rose-600" href="/admin/hotels">Hotels</a></h1>
        <form method='post' action="/admin/hotels/store" class="border-2 mt-12 p-6 w-full">
            @csrf
            <input type="text" name="name" class="w-full mt-8 p-8 border-2 rounded-lg" placeholder="Name">
            <textarea name="address" class="border-2 w-full mt-8 h-36 p-4">Address</textarea>
            <button class="bg-sky-600 text-slate-50 mt-8 px-8 py-4 rounded-lg">Create</button>
        </form>
    </div>
@endsection