@extends('layouts.master')
@section('content')
@include('components.site-header')
<div class="fh5co-parallax" style="background-size:cover;background-image: url({{asset('storage/site/banner2.jfif')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell">
                    <h1 class="text-center">Choose Your Room</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-hotel-section">
    <div class="container">
        <div class="row">
            @foreach ($rooms as $room)
                <div class="col-md-4">
                    <div class="hotel-content">
                        <div class="hotel-grid" style="background-image: url({{env('APP_URL').'/storage'.$room->image}});">
                            <div class="price"><small>For as low as</small><span>${{$room->price_per_night}}/night</span></div>
                            <a class="book-now text-center" href="/rooms/{{$room->id}}/book"><i class="ti-calendar"></i> Book Now</a>
                        </div>
                        <div class="desc">
                            <p>
                                <small>hotel:</small>
                                <a href="#"> {{$room->hotel->name}}</a>
                            </p>
                            <p>
                                <small>area:</small>
                                {{$room->area}} M <sup>2</sup>
                            </p>
                            <p>
                                <small>status:</small>
                                {{$room->status}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection