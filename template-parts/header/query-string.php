<?php 
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
    			}
    		}
		}
	}
} else {
    $size_url_query = "";
    $template_url_query = "";
    $layout_url_query = "";
}