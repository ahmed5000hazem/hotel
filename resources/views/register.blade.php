@extends('layouts.master')
@section('content')
        <div style="height: 100vh; display:inline-block;background-image: url('{{asset('storage/site/slider3.jpg')}}');" class="w-full h-full bg-neutral-900 bg-cover">
        
        <h1 class="text-slate-50 text-center text-6xl mt-12">Register <a class="text-base text-rose-600" href="/">Home</a></h1>
        <div class="w-1/4 mt-36 m-auto">
            <form method='post' action="/register">
                @csrf
                <input type="text" name="email" class="w-full mt-8 p-8 rounded-lg" placeholder="email">
                <input type="text" name="name" class="w-full mt-8 p-8 rounded-lg" placeholder="name">
                <input type="password" name="password" class="w-full mt-8 p-6 rounded-lg" placeholder="password">
                <input type="password" name="password_confirmation" class="w-full mt-8 p-6 rounded-lg" placeholder="password confirmation">
                <button class="bg-rose-600 text-slate-50 mt-8 px-8 py-4 rounded-lg">Register</button>
            </form>
        </div>
    </div>
@endsection