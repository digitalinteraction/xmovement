@extends('layouts.app')

@section('content')

	<div class="fluid-row profile-header">

	</div>

	<div class="row">
	
		<div class="container">
	
			<div class="col-md-3 profile-left-column">
	    		
	    		<div class="avatar-wrapper">
		    		<img class="img-circle" src="{{ $user->avatar }}">
		    	</div>

		    	<div class="contact-button">
		    		Send a Message
		    	</div>

		    	<div class="user-stats">
		    		<h3>89%</h3>
		    		<p>Event Success</p>

		    		<h3></h3>
		    		<p></p>
		    	</div>

	    	</div>	
	
			<div class="col-md-6 profile-center-column">

	    		<h2 class="user-name">{{ $user->name }}</h2>

	    		<p class="user-bio">Lorem Ipsum</p>

	    		<ul class="activity-feed">

	    			<li></li>
	    			<li></li>
	    			<li></li>

	    		</ul>

	    	</div>	
	
			<div class="col-md-3 profile-right-column">
	    		
	    		<div class="sidebar-section">
	    			<div class="sidebar-section-header">
	    				Supported Events
	    			</div>
	    			<ul class="events-list">
	    				
	    				<li>No events</li>
	    			</ul>
	    		</div>
	    		
	    		<div class="sidebar-section">
	    			<div class="sidebar-section-header">
	    				Created Events
	    			</div>
	    			<ul class="events-list">
	    				<li>No events</li>
	    			</ul>
	    		</div>

	    	</div>	
	
		</div>
	
	</div>

@endsection