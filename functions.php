<?php 
# 
# Beekeeper Design Studio, 19 Jun 2024, 3:01 PM
# Page title used on all the pages 
function page_title($string) {
	$string_replace = str_replace('-', ' ', $string); 
	$title = "<h1 class='fs-3'>".ucfirst($string_replace)."</h1>";
	return $title;
}
 ?>
