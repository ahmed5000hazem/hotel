@extends('layouts.master')
@section('content')
@include('components.site-header')

	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center"><div class="alert mt-12 w-full alert-{{$alert}}">{{$message}}</div></h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
@endsection