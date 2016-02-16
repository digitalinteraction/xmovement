<div class="col-sm-8 col-md-6 col-lg-7 profile-center-column">

	<h2 class="user-name hidden-xs">{{ $user->name }}</h2>

	<?php if ($user->bio != "") { ?>
	
		<p class="user-bio">{{ $user->bio }}</p>

	<?php } ?>

	@include('users.profile-nav')
	
	<div class="tab-content">
        <div class="tab-pane fade in active" id="newstab">
            @include('users.news')
        </div>
        <div class="tab-pane fade" id="messagestab">
        	@include('users.messages')
        </div>
        <div class="tab-pane fade" id="preferencestab">
            @include('users.preferences')
        </div>
    </div>
    
</div>