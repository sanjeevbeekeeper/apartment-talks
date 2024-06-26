<?php
include 'header.php';
# 
# Beekeeper Design Studio, 21 Jun 2024 - 7:18 AM
# See functions.php
echo page_title($get_current_url);
# 
# Beekeeper Design Studio, 21 Jun 2024 - 7:18 AM
# Getting the nav element in the template-parts/settings/nav
include 'template-parts/settings/nav.php';

# 
# Beekeeper Design Studio - 21 Jun 2024 - 7:18 AM
# Get all the files from a template-parts/layouts/files/ dir
$get_all_the_template_folders_glob = glob("template-parts/layouts/files/[0-9]*", GLOB_ONLYDIR);
?>

<div class="bg-warning p-3 mb-3">
	Keep this on hold for now. <br>
	Setting will not work without database.
</div>

<h3 class="fs-4">Templates</h3>
<p class="text-muted">The path is template-parts/layouts/files/</p>
<ol>
	<?php foreach ($get_all_the_template_folders_glob as $folder_as_string): 
		$folder_as_string_exp = explode('/', $folder_as_string);
		?>
		<li>Template <?php echo end($folder_as_string_exp) ?>/</li>
	<?php endforeach ?>
</ol>

<?php include 'footer.php' ?>