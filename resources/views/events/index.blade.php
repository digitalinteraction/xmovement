@extends('layouts.app')

@section('content')

	<div class="page-header">
	    
        <h2 class="main-title">Explore</h2>

	</div>

    <div class="container">
                        
        <div class="row">
            @foreach ($events as $event)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    @include('events.tile')
                </div>
            @endforeach
        </div>
        
    </div>

@endsection