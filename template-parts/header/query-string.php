<?php 
$upload_file_msg = "";
if( isset($_GET['s']) && !empty($_GET['s'])) {
    $size_url_query = $_GET['s'];
    # Check if size query is available,
    # If yes then check for tempalte query
    if ($size_url_query) {
		if( isset($_GET['t']) && !empty($_GET['t'])) {
    		$template_url_query = $_GET['t'];
    		# Check if 'template' query is available,
    		# If yes then check for layout query
    		if ($template_url_query) {
				if( isset($_GET['l']) && !empty($_GET['l'])) {
    				$layout_url_query = $_GET['l'];

                    # This is used only for the upload logo
                    if( isset($_GET['m']) && !empty($_GET['m'])) {
                        $upload_file_msg = $_GET['m'];
                    }else {
                        $upload_file_msg = "";
                    }
                } 
    		}
		}
	}
} else {
    $size_url_query = "";
    $template_url_query = "";
    $layout_url_query = "";
}

# 
# Beekeeper Design Studio - 21 Jun 2024, 2:14 PM
# These messages are displayed when the user uploaded a wrong file for the logo
$upload_logo_msg = array(
    "1" => array(
        "query" => "ext-error",
        "msg" => "Only .png files are supported",
        "class" => "danger"
    ),
    "2" => array(
        "query" => "size-error",
        "msg" => "The filesize has to be less than 2 MB",
        "class" => "danger"
    ),
    "3" => array(
        "query" => "success",
        "msg" => "Uploaded Logo successfuly",
        "class" => "success"
    ),
    "4" => array(
        "query" => "error",
        "msg" => "Unknown error, try again different file",
        "class" => "warning"
    )
);