<?php 
# Required: 
# for the message "Warning: Undefined variable $fm_descripiton in ..."
$fm_descripiton = "";
$get_logo_switch_status = "";
# 
# Check if the Submit button is not empty
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['SubmitButton'])){
	# 
	# Description textarea
    $fm_descripiton = $_POST['fm_description'];
    if ($layout_logo_presence) {
	    include 'upload-logo.php';
    }
} else {
	$fm_descripiton = "";
}
?>
<?php if ($upload_file_msg): ?>
	<?php 
	# $upload_logo_msg var is coming from the template-parts/header/query-string.php file
	if ($upload_file_msg == $upload_logo_msg[1]['query']) {
		$upload_logo_display_msg = $upload_logo_msg[1]['msg'];
		$upload_logo_class = $upload_logo_msg[1]['class'];
	} elseif ($upload_file_msg == $upload_logo_msg[2]['query']) {
		$upload_logo_display_msg = $upload_logo_msg[2]['msg'];
		$upload_logo_class = $upload_logo_msg[2]['class'];
	} elseif ($upload_file_msg == $upload_logo_msg[3]['query']) {
		$upload_logo_display_msg = $upload_logo_msg[3]['msg'];
		$upload_logo_class = $upload_logo_msg[3]['class'];
	} elseif ($upload_file_msg == $upload_logo_msg[4]['query']) {
		$upload_logo_display_msg = $upload_logo_msg[4]['msg'];
		$upload_logo_class = $upload_logo_msg[4]['class'];
	}
	?>
<div class="p-2 bg-<?php echo $upload_logo_class ?> rounded-1 text-white px-3 mb-2">
	<?php echo $upload_logo_display_msg ?>
</div>
<?php endif ?>

<form class="mb-4 mb-lg-0" action="" method="POST" enctype="multipart/form-data">
	<?php if ($layout_logo_presence): ?>
		<div class="bg-white p-3 border shadow rounded mb-1">
			<div class="d-flex justify-content-between">
				<div class="mb-2 fw-bold">Logo</div>
				<div class="small"><span class="text-muted">Recommended category</span>: <?php echo $logo_cat ?></div>
			</div>
			<div class="input-group">
				<input type="file" class="form-control border-secondary" name="fm_file_to_upload" id="fileToUpload" id="inputGroupFile02">
			</div>
			<div class="mt-1 small text-muted">only <strong>.png</strong> file is allowed. Upload file less than <strong>2 MB</strong></div>
		</div>
	<?php endif ?>
	<div class="bg-white p-3 border shadow rounded mb-4">
		<label for="exampleFormControlTextarea1" class="form-label fw-bold">Content</label>
		<textarea id="tiny" class="form-control border-secondary" name="fm_description" id="exampleFormControlTextarea1" rows="8" cols="3">
			<?php 
			# 
			# 13 Jun 2024, 6:23 PM
			# Check if the $fm_descripiton (input from the form) is empty.
			if (empty($fm_descripiton)): 
				# 
				# If empty then output the placeholer text from JSON
				foreach ($template_json_array['layouts'][$layout_url_query]['content'] as $value):
					echo $value;
				endforeach;	
			else:
				# 
				# If not empty then output the user input
				echo $fm_descripiton;
			endif;
			?>
		</textarea>
	</div>
	<input type="submit" id="submit_btn" class="btn btn-primary" name="SubmitButton"/>
  	<span class="ms-2" id="load">Loading...</span>
</form>