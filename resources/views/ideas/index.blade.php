@extends('layouts.app')

@section('content')

	<div class="page-header">
	    
        <h2 class="main-title">{{ trans('pages.explore') }}</h2>

	</div>

    <div class="container">
                        
        <div class="row">
            @foreach ($ideas as $idea)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    @include('ideas.tile')
                </div>
            @endforeach
        </div>
        
    </div>

@endsection