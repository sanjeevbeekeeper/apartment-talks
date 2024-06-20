<?php 
#  
# Setup the upload location
$upload_dir = "assets/logo/template-".$template_url_query."/layout-".$layout_url_query.'/';
# 2mb in bytes is 20,00,000
$upload_limit = '2000000'; // 2md limit

#  
# 13 Jun 2024, 6:56 PM
# Get the file from the input value
$fileCheck = $_FILES["fileToUpload"];
# Get the file with extension - ex: foobar.png
$uploaded_filename_with_ext = $fileCheck["name"];
$uploaded_filename_ext_exploded = explode('.', $uploaded_filename_with_ext);
$uploaded_filename_ext = end($uploaded_filename_ext_exploded);
# Get the file size - ex: 2mb
$file_size = $fileCheck["size"];

# 
# 13 Jun 2024, 6:56 PM
# Build the full path using the $upload_dir - ex: parentfolder/subfolder/foobar.php
$full_path_with_filename = $upload_dir.basename($uploaded_filename_with_ext);

# 
# 13 Jun 2024, 6:56 PM
# Check if the uploaded file is greater than 2mb
if ($file_size > $upload_limit) {
	# 12 Jun 2022
	# If it is greater then show these messages
	echo "File is larger than 2mb <br>";
	echo "Please reduct the size and Upload again.";
} else {
	# 12 Jun 2022
	# If everything is clear, upload the file
	$fileTmpName = $fileCheck["tmp_name"];
	# 
	# 14 Jun 2024, 4:38 AM
	# We are renaming the uploaded file before it save it to the folder
	$rename_file = $upload_dir.'logo.'.$uploaded_filename_ext;
	move_uploaded_file($fileTmpName, $rename_file);
}
