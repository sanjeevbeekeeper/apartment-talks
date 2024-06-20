<?php 
# 
# 13 Jun 2024, 11:47 AM
# we get both the 'template' and the 'layout' from the URL query string
# These two $template_url_query and $layout_url_query is coming from a header.php file

# 
# 13 Jun 2024, 11:47 AM
# Get the JSON file using the query string
$template_json = file_get_contents("assets/json/template-".$template_url_query.".json");
$template_json_array = json_decode($template_json, true);

# 
# 13 Jun 2024, 11:47 AM
# 'width' and 'height' remain same for all the 'templates' and 'layouts' for 5x5 dimension
# It is all defined in a 'global' key
$width = $template_json_array['global']['width'];
$height = $template_json_array['global']['height'];

# 
# 13 Jun 2024, 11:40 AM
# No need to move this inside the 'for' loop below.
# The JSON has 'style' key only on the 2nd div (that is array is 1) 
$div_style = $template_json_array['layouts'][$layout_url_query]['div'][1]['style'];

# 
# 13 Jun 2024, 11:40 AM
# Each 'div' key has multiple key-value pairs. 
# In order to find out we count the total div first. 
# And with the count we use 'for' loop to get all the key-values inside each 'div'
for ($i=0; $i < count($template_json_array['layouts'][$layout_url_query]['div']); $i++) { 

	// for 'id'
	// The code below will output '$div_0_id', '$div_1_id',  
	${'div_'.$i.'_id'} = $template_json_array['global']['div-id'][$i];
	
	// for 'class'
	// The code below will output '$div_0_class', '$div_1_class',  
	${'div_'.$i.'_class'} = $template_json_array['layouts'][$layout_url_query]['div'][$i]['class'];
}
# 
# 13 Jun 2024, 2:09 PM
# Check if the logo exists in this current 'layout' key
$check_logo = $template_json_array['layouts'][$layout_url_query];
if (array_key_exists('logo', $check_logo)) {
	$layout_logo_presence = 1;
	# 
	# If yes, then get all the details
	$logo_src = $check_logo['logo']['src'];
	$logo_height = $check_logo['logo']['height'];
	$logo_class = $check_logo['logo']['class'];
	$logo_cat = ucfirst($check_logo['logo']['cat']);
} else {
	$layout_logo_presence = 0;
}
?>