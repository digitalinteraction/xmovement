@extends('layouts.app', ['bodyclasses' => 'transparent'])

@section('content')
    <div class="container-fluid hero-container">
        <div class="black-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-container">
                        <h1>{{ trans('home.tagline') }}</h1>
                        <a href="{{ action('IdeaController@add') }}">
                            <button>{{ trans('home.get_started') }}</button>
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
                        <h2>{{ trans('home.featured_ideas') }}</h2>
                    </div>
                        
                    <div class="row">
                        @foreach ($ideas as $idea)
                            <div class="col-xs-12 col-md-4">
                                @include('ideas.tile')
                            </div>
                        @endforeach
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
@endsection