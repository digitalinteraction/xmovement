@extends('layouts.app', ['bodyclasses' => 'transparent'])

@section('content')
    <div class="container-fluid hero-container">
        <div class="black-overlay"></div>
        <div class="text-container">
            <h1>{{ trans('home.tagline', ['idea' => trans_choice('common.idea', 1)]) }}</h1>
            <a href="{{ action('IdeaController@add') }}">
                <button>{{ trans('home.get_started') }}</button>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="panel-heading text-center">
                <h2>{{ trans('home.featured_ideas', ['idea' => trans_choice('common.idea', count($ideas))]) }}</h2>
            </div>
                
            <div class="row-fluid">
                @foreach ($ideas as $idea)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        @include('ideas.tile')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection