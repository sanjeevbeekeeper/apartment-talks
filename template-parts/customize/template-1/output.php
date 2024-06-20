<div id="printMe" class="p-1">
	<div id="<?php echo $div_0_id ?>" class="<?php echo $div_0_class ?>" style="height:<?php echo $height ?>px;width:<?php echo $width ?>px;">
		<div id="<?php echo $div_1_id ?>" class="<?php echo $div_1_class ?>" style="<?php echo $div_style ?>">
			<?php 
			# 
			# LOGO
			# 13 Jun 2024, 1:53 PM
			# If $layout_logo_presence is not empty from JSON file. Output the data
			# we also look for logo in a folder. See the 'if else' condition below
			if ($layout_logo_presence) {
				# 				
				# 14 Jun 2024, 5:40 PM
				# Check if the logo file is in the folder
				if (file_exists($logo_from_dir)) {
					# If logo is present, output the $logo_from_dir with a modified file as URL query
					$file_modified_time = filemtime($logo_from_dir);
					$logo_dir_switch = $logo_from_dir.'?v='.$file_modified_time;
				} else {
					# If not present, output the placeholder file
					$logo_dir_switch = "assets/logo-categories/".$logo_src;
				}
				# 
				# 17 Jun 2024, 2:01 PM
				# Cache busting
				echo "<img src='".$logo_dir_switch."' height='".$logo_height."' class='".$logo_class."'>";
			}
			# 
			# 13 Jun 2024, 11:28 AM
			# Check if the user input (from the textarea) is not empty.
			# If not empty then output user data. By default this will be not empty
			if (!empty($fm_descripiton)): 
				# 
				# 13 Jun 2024, 11:28 AM
				# Output the description
				echo $fm_descripiton;
			else:
				# 
				# 13 Jun 2024, 11:28 AM
				# Since the content can be more or less
				# The Json has multiple key-value for each line of content and We are using a 'foreach' to get all the contents
				foreach ($template_json_array['layouts'][$layout_url_query]['content'] as $value):
					echo $value;
				endforeach;	
			endif; ?>
		</div>
	</div>
</div>