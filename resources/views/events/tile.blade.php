<div class="tile event-tile" onClick="document.location = '{{ action('EventController@view', $event->id) }}'">
	<div class="tile-image" style="background-image:url('{{ $event->photo }}')"></div>
	<div class="inner-container">
		<h4>
		    {{ $event->name }}
		</h4>
		<p>
		    Posted by <a href="/user/{{ $event->user_id }}">{{ $event->user->username or $event->user_id }}</a>
		</p>
	</div>
</div>