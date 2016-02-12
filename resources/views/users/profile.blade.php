@extends('layouts.app')

@section('content')

	<div class="fluid-row profile-header">

	</div>

	<div class="container-fluid">
		
		<div class="row">
	
			<div class="col-sm-4 col-md-3 col-lg-2 profile-left-column">
	    		
	    		<div class="avatar-wrapper">
		    		<img class="img-circle" src="{{ $user->avatar }}">
		    	</div>

		    	<div class="contact-button">
		    		{{ trans('profile.send_a_message') }}
		    	</div>

		    	<div class="user-stats visible-md-block visible-lg-block">
		    		<h3>89%</h3>
		    		<p>{{ trans('profile.idea_success') }}</p>

		    		<h3></h3>
		    		<p></p>
		    	</div>

	    	</div>	
	
			<div class="col-sm-8 col-md-6 col-lg-7 profile-center-column">

	    		<h2 class="user-name">{{ $user->name }}</h2>

	    		<?php if ($user->bio != "") { ?>
	    		
	    			<p class="user-bio">{{ $user->bio }}</p>

    			<?php } ?>

	    		<ul class="activity-feed">

	    			<li></li>
	    			<li></li>
	    			<li></li>

	    		</ul>

	    	</div>	
	
			<div class="col-md-3 col-lg-3 hidden-sm profile-right-column">
	    		
	    		<div class="sidebar-section">
	    			<div class="sidebar-section-header">
	    				{{ trans('profile.supported_ideas') }}
	    			</div>
	    			<ul class="ideas-list">
	    				
	    				<li>{{ trans('profile.no_ideas') }}</li>
	    			</ul>
	    		</div>
	    		
	    		<div class="sidebar-section">
	    			<div class="sidebar-section-header">
	    				{{ trans('profile.created_ideas') }}
	    			</div>
	    			<ul class="ideas-list">
	    				<li>{{ trans('profile.no_ideas') }}</li>
	    			</ul>
	    		</div>

	    	</div>	
	
		</div>
	
	</div>

@endsection