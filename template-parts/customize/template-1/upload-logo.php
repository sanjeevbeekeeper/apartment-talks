<?php 
ob_start();
# 
# Beekeeper Design Studio - 21 Jun 2024, 2:22 PM
# the given page 'query-string.php' is required
# When the page redirect with an error, the query string is required in the URL
include 'template-parts/header/query-string.php';
#  
# 13 Jun 2024, 6:56 PM
# Get the file from the input value
$fileCheck = $_FILES["fm_file_to_upload"];
# 0 is pass and 1 is fail
$upload_file_error = $fileCheck['error'];
# 
# Beekeeper Design Studio - 22 Jun 2024, 6:57 AM
# Keep the redirect_page here it is used in most of the conditions below
$redirect_page = "customize.php?s=".$size_url_query."&t=".$template_url_query."&l=".$layout_url_query;
# 
# Beekeeper Design Studio - 21 Jun 2024, 5:10 PM
# The UPLOAD_ERR_NO_FILE will check if any upload is made
if(isset($fileCheck) && $upload_file_error != UPLOAD_ERR_NO_FILE) {
	# If everything PASS, run the code from below.
	# Get the file with extension - ex: foobar.png
	$upload_filesize = $fileCheck["size"];
	# 
	# Beekeeper Design Studio - 21 Jun 2024, 4:32 PM
	# When you upload the file, the filesize is sometimes 0. 
	# To prevent this we have included as the first condition below using the UPLOAD_ERR_OK
	# 1 is PASS and 0 is fail. The bottom one is for 1
	if ($upload_file_error === UPLOAD_ERR_OK && $upload_filesize > 0) {
		# 
		# Beekeeper Design Studio - 21 Jun 2024, 2:17 PM
		# File extension check
		$uploaded_filename_with_ext = $fileCheck["name"];
		$uploaded_filename_ext_exploded = explode('.', $uploaded_filename_with_ext);
		$uploaded_filename_ext = end($uploaded_filename_ext_exploded);
		$upload_fileformat = "png"; // Only .png file is supported
		if($uploaded_filename_ext != $upload_fileformat ) {
			header('Location: customize.php?s='.$size_url_query.'&t='.$template_url_query.'&l='.$layout_url_query.'&m=ext-error');
			exit();
		} else {
			# 
			# Beekeeper Design Studio - 21 Jun 2024, 2:21 PM
			# File size size. Files has to be less than 2mb
			$upload_limit = '2000000'; // Only 2 MB is allowed
			if ($upload_filesize > $upload_limit) {
				header('Location: '.$redirect_page.'&m='.$upload_logo_msg[2]['query']);
				exit();
			} else {
				# 
				# Beekeeper Design Studio - 12 Jun 2022
				# If everything is clear, upload the file
				$filename_temp_name = $fileCheck["tmp_name"];
				# 
				# 14 Jun 2024, 4:38 AM
				# We are renaming the uploaded file before it save it to the folder
				$upload_dir = "assets/logo/template-".$template_url_query."/layout-".$layout_url_query.'/';
				$rename_file = $upload_dir.'logo.'.$uploaded_filename_ext;
				if (move_uploaded_file($filename_temp_name, $rename_file)) {
					header("Location: ".$redirect_page."&m=".$upload_logo_msg[3]['query']);
					exit();
				} else {
					header("Location: ".$redirect_page."&m=".$upload_logo_msg[4]['query']);
					exit();
				}
			}
		}
	} else {
		# 
		# Beekeeper Design Studio - 21 Jun 2024, 4:34 PM
		# The error message below is for fail. 
		header("Location: ".$redirect_page."&m=".$upload_logo_msg[4]['query']);
		exit();
	}
}
ob_end_flush();