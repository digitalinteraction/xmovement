@extends('layouts.app')

@section('content')
    <div class="container-fluid hero-container">
        <div class="black-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-container">
                        <h1>Let's make your next event a success</h1>
                        <a href="{{ action('EventController@add') }}">
                            <button>Get Started</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading text-center">
                        <h2>Featured Events</h2>
                    </div>
                        
                    <div class="row">
                        @foreach ($events as $event)
                            <div class="col-xs-12 col-md-4">
                                @include('events.tile')
                            </div>
                        @endforeach
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
@endsection