<?php

// filename: upload.form.php

// first let's set some variables

// make a note of the current working directory relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'article_creation/create.php';

// set a max file size for the html upload form
$max_file_size = 30000; // size in bytes
// now echo the html page
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<!--
	
	<form id="Upload" action="article_creation/create" enctype="multipart/form-data" method="post">
	
		<h1>
			Upload form
		</h1>
		
		<p>
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
		</p>
		
		<p>
			<label for="file">File to upload:</label>
			<input id="file" type="file" name="file">
		</p>
				
		<p>
			<input id="submit" type="submit" name="submit" value="Upload me!">
		</p>
	
	</form>
	
	-->

<!--login form inputs-->
<form name="article-form" class="article-form" action="article_creation/create" method="post">

    <div class = "header">
        <h1> Article creation </h1>
    </div>

<!--Input fields-->
    <div class="subject">
        <input name="subject" type="text" class="input subject" value="Subject" />
    </div>

    <!--Input fields-->
    <div class="body">
        <textarea cols="40" rows="8" name="bodytext" id="bodytext"></textarea>
    </div>

    <!--Buttons-->
    <div class="footer">
        <input type="submit" name="submit" value="Create" class="button" />
    </div>
    <!--END Buttons-->

</form>

<script>
$(function() {
    

    
});
</script>