@extends('layouts.master')
@section('content')
    @include('components.navbar')
    <h2 class="text-center text-5xl">Hotels</h2>
    <div class="content px-24 mt-32">
        <a href="/admin/hotels/create" class="rounded-lg text-slate-50 px-8 py-4 bg-sky-600">create</a>
    </div>
    <div class="table mt-12">
        <table class="border-collapse border-2 border-slate-500 w-3/4 m-auto">
            <thead>
            <tr>
                <th class="border px-8 text-sky-600 border-slate-600">id</th>
                <th class="border px-8 text-sky-600 border-slate-600">name</th>
                <th class="border px-8 text-sky-600 border-slate-600">address</th>
                <th class="border px-8 text-sky-600 border-slate-600">created at</th>
                <th class="border px-8 text-sky-600 border-slate-600">controls</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr class="text-center">
                        <td class="border border-slate-700">{{$hotel->id}}</td>
                        <td class="border border-slate-700">{{$hotel->name}}</td>
                        <td class="border border-slate-700">{{$hotel->address}}</td>
                        <td class="border border-slate-700">{{$hotel->created_at}}</td>
                        <td class="p-1">
                            <form action="/admin/hotels/delete/{{$hotel->id}}" method="POST">
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