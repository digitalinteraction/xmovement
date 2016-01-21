<div class="input-section">
	<div class="input-wrapper">
		<label class="start-input-label">Photo<i class="fa fa-check-circle"></i></label>
    	<div class="clearfix"></div>


    	<input name="photo" type="hidden" id="event-image">
    
	    <!-- The fileinput-button span is used to style the file input field as button -->
	    <span class="btn btn-success fileinput-button" id="fileinput-button">
	        <span id="upload-button-text">Choose Photo</span>
	        <!-- The file input field used as target for the file upload widget -->
	        <input id="fileupload" type="file" name="files[]">
	    </span>

	    	<!-- CC IMAGES -->

	    	<style type="text/css">
	    	#cc-search-field {
	    		border: #e6e6e6 1px solid;
	    		border-radius: 4px;
	    		outline: none;
	    		margin-top: 10px;
	    		padding: 10px 12px;
	    		width: 260px;
	    	}

	    	#cc-search-results {
	    		list-style: none;
	    		margin: 20px 0 0 0;
	    		padding: 0;
	    	}

	    	#cc-search-results .cc-search-result {
	    		float: left;
	    		list-style: none;
	    		margin: 0;
	    		padding: 0;

	    		background-size: cover;
	    		background-position: center center;
	    		background-repeat: no-repeat;
	    		border: #fff 5px solid;
	    		padding-bottom: 22%;
	    		height: 0px;
	    		width: 33%;
	    	}

	    	#cc-search-results .cc-search-result:hover {
	    		border: #5BCA5B 5px solid;
	    		cursor: pointer;
	    	}

	    	</style>

	    	<span class="text-muted" style="margin: 0 10px">or</span>

	    	<input type="text" name="cc-search-field" id="cc-search-field" placeholder="Search the web for a photo.." />

	    	<div class="btn" style="margin: 0" id="cc-search-button"><i class="fa fa-search"></i></div>

	    	<ul id="cc-search-results"></ul>

	    	<script type="text/javascript">

				$('#cc-search-field').keypress(function(event) {
					
				    if (event.which == 13) // Enter key = keycode 13
				    {
				    	searchCC();
				    	return false;
				    }
				});

	    		$('#cc-search-button').click(function() {
	    			
	    			searchCC();
	    			
	    		});

	    		function searchCC() {

	    			var query = $('#cc-search-field').val();

	    			$('#photo-error-message').html('').css('display', 'none');

	    			$('#files').html('');

					$.getJSON("https://api.unsplash.com/photos/search/", {query:query, per_page:9, client_id:'6deb3bd67bb4f2e23734ce938fc463f69dccab80ee24ec73e914910fcfc03e24'} , function(data) {
						if (data) {
							console.log(data);

							$('#cc-search-results').html('<div class="clearfloat"></div>');
							
							for (var i = 0; i < data.length; i++) {
								var result = '<li class="cc-search-result" data-url="' + data[i].urls.regular + '" style="background-image: url(' + data[i].urls.small + ')"></li>';

								$('#cc-search-results').prepend(result);
							};

							if (data.length == 0) {
								$('#cc-search-results').html('<div class="clearfloat"></div>');
								$('#photo-error-message').html('No results. Please try a different search query').css('display', 'block');
							};

							$('#cc-search-results .cc-search-result').unbind('click').click(function() {

					            $('#preview-image').css('background-image', 'url(' + $(this).attr('data-url') + ')').html('');
					            $('#movement-image').val($(this).attr('data-url'));

							});
							
						}
					})
					.fail(function( jqxhr, textStatus, error ) {
						var err = textStatus + ", " + error;
						console.log( "Request Failed: " + err );

						$('#cc-search-results').html('<div class="clearfloat"></div>');
						$('#photo-error-message').html('No results. Please try a different search query').css('display', 'block');
					});
	    		}

	    	</script>

	    	<!-- CC IMAGES -->

	    <!-- The global progress bar -->
	    <div id="progress" class="progress">
	        <div class="progress-bar progress-bar-success"></div>
	    </div>

	    <!-- Photo errors -->

	    <div class="error-message" id="photo-error-message" style="display:<?php if(isset($errors['photo'])) { echo 'block'; } else { echo 'none'; } ?>"><?php if(isset($errors['photo'])) { foreach ($errors['photo'] as &$error) { echo $error; } } ?></div>

	    <!-- The container for the uploaded files -->
	    <div id="files" class="files"></div>

	</div>
</div>