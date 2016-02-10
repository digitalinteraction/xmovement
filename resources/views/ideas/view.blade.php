@extends('layouts.app')

@section('content')
	
	<div class="page-header">
	    
        <h2 class="main-title">{{ $idea->name }}</h2>
		<h5 class="sub-title">Organized by <a href="{{ action('UserController@profile', $idea->user_id) }}">{{ $idea->user->name or $idea->user_id }}</a></h5>

	</div>

	<div class="container">
	    
	    <div class="row">
	    	<div class="col-md-8">
	    
	    		<div class="column main-column">

	    			<div class="idea-media">
	    				<img src="{{ $idea->photo }}" style="width:100%">
	    			</div>
	    			
	    			<p class="idea-description">
	    				{{ $idea->description }}
	    			</p>

	    		</div>
	    
	    	</div>
	    	<div class="col-md-4">

	    		<div class="column side-column">

	    			<ul class="stats">
	    				<li>
	    					<h3>32</h3>
		    				<h5>Days to go</h5>
	    				</li>
	    				<li>
	    					<h3>476</h3>
		    				<h5>Supporters</h5>
	    				</li>
	    			</ul>

	    			<div class="btn btn-primary">Support this Idea</div>

	    		</div>

    		</div>
	    </div>
	</div>

@endsection