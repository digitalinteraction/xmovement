<div class="col-sm-4 col-md-3 col-lg-2 profile-left-column">
	
	<div class="avatar-wrapper">
		<img class="avatar" style="background-image: url('{{ $user->avatar }}')">
	</div>

	<h2 class="user-name visible-xs-block">{{ $user->name }}</h2>

	<div class="contact-button">
		{{ trans('profile.send_a_message') }}
	</div>

	<div class="user-stats visible-md-block visible-lg-block">
		<h3></h3>
		<p></p>
	</div>

</div>	