<div class="input-section">
    <div class="input-wrapper">
        
        <input name="photo" type="hidden" id="uploaded-photo" value="{{ $value }}">
    
        <!-- The fileinput-button span is used to style the file input field as button -->
        <span class="btn btn-success fileinput-button" id="fileinput-button">
            <span id="upload-button-text">Choose Photo</span>
            <!-- The file input field used as target for the file upload widget -->
            <input id="fileupload" type="file" name="files[]">
        </span>

        <?php if ($cc) { ?>

            <!-- CC IMAGES -->

            <span class="text-muted" style="margin: 0 10px">or</span>

            <input type="text" name="cc-search-field" id="cc-search-field" placeholder="Search the web for a photo.." />

            <div class="btn" id="cc-search-button"><i class="fa fa-search"></i></div>

            <ul id="cc-search-results"></ul>

            <!-- CC IMAGES -->

        <?php } ?>

        <!-- The global progress bar -->
        <div id="progress" class="progress visuallyhidden">
            <div class="progress-bar progress-bar-success"></div>
        </div>

        <!-- Photo errors -->

        <!-- The container for the uploaded files -->
        <div id="files" class="files"></div>

    </div>
</div>