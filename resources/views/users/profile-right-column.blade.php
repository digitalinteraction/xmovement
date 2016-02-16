<div class="col-md-3 col-lg-3 hidden-sm profile-right-column">
	
	<div class="sidebar-section">
		<div class="sidebar-section-header">
			{{ trans('profile.supported_ideas') }}
		</div>
		<ul class="ideas-list">
			@if (count($supported_ideas) > 0)
			    @foreach ($supported_ideas as $idea)
	                @include('ideas.tile')
	            @endforeach
			@else
			    <li>{{ trans('profile.no_ideas') }}</li>
			@endif
		</ul>
	</div>
	
	<div class="sidebar-section">
		<div class="sidebar-section-header">
			{{ trans('profile.created_ideas') }}
		</div>
		<ul class="ideas-list">
			@if (count($created_ideas) > 0)
			    @foreach ($created_ideas as $idea)
	                @include('ideas.tile')
	            @endforeach
			@else
			    <li>{{ trans('profile.no_ideas') }}</li>
			@endif
		</ul>
	</div>

</div>	