<?php 
include 'header.php';
# 
# Beekeeper Design Studio, 19 Jun 2024 - 3:06 PM
# See functions.php
echo page_title($get_current_url);
# 
# Beekeeper Design Studio, 19 Jun 2024 - 3:06 PM
# Getting the nav element in the template-parts/templates/nav
include 'template-parts/version-log/nav.php';
# 
# Beekeeper Design Studio, 19 Jun 2024, 3:27 
$version_log_json = file_get_contents("assets/json/version-log.json");
$version_log_json_array = json_decode($version_log_json, true);
?>

<?php foreach ($version_log_json_array as $key_date => $value_date_array): ?>
	
	<h2 class="fs-5 mb-3"><?php echo $key_date ?></h2>
	<?php foreach ($value_date_array as $key_time => $value_time_array): ?>
		
		<?php foreach ($value_time_array as $key_cat => $value_cat_array): ?>
			<div class="mb-2"><?php echo $key_time ?> <span class="badge text-bg-secondary"><?php echo $key_cat ?></span></div>

			<ol>
			<?php foreach ($value_cat_array as $value_items): ?>
				<li><?php echo $value_items; ?></li>
			<?php endforeach ?>
			</ol>
		
		<?php endforeach ?>
	
	<?php endforeach ?>

<?php endforeach ?>

<?php include 'footer.php' ?>