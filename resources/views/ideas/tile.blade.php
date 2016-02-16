<div class="tile idea-tile" onClick="document.location = '{{ action('IdeaController@view', $idea->id) }}'">
	<div class="tile-image" style="background-image:url('{{ $idea->photo }}')"></div>
	<div class="inner-container">
		<h4>
		    {{ $idea->name }}
		</h4>
		<p>
		    Posted by <a href="{{ action('UserController@profile', [$idea->user]) }}">{{ $idea->user->name or $idea->user_id }}</a>
		</p>
	</div>
</div>