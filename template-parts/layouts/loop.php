<?php
# 
# Beekeeper design studio - 11 Jun 2024, 10:29 AM
# using 'for' loop to get all the layouts
$layout_glob = glob("template-parts/layouts/files/".$template_url_query."/*", GLOB_BRACE);
for ($i=1; $i <= count($layout_glob) ; $i++) : 
	# 
	# Beekeeper Design Studio - 18 Jun 2024, 10:26 AM
	# The glob() function is to check if there are any customize files inside the 'template-*/' dir
	$customize_dir_glob = glob("template-parts/customize/template-".$template_url_query."/*", GLOB_BRACE);
	# Get the total file count inside the 'template-*/' dir
	$check_for_customize_files = count($customize_dir_glob);
	?>
	<div class="col-12 col-lg-6 col-xxl-4 mb-5">
		<div class="d-flex align-items-center mb-2">
			<h2 class="fs-5 mb-0 me-2">
				<div class="d-inline-block fw-bold me-2">Layout <?php echo $i ?></div>
			</h2>
			<?php
			# Beekeeper Design Studio, 18 Jun 2024, 11:10 AM
			# 
			if ($check_for_customize_files > 0): ?>
				<a class="btn btn-success px-4" href="customize.php?s=<?php echo $size_url_query ?>&t=<?php echo $template_url_query; ?>&l=<?php echo $i ?>">Customize</a>
			<?php else: ?>
				<div class="p-2 rounded text-body-tertiary bg-secondary bg-opacity-10 px-4">Cannot customize</div>
			<?php endif ?>
		</div>
		<?php include 'template-parts/layouts/files/'.$template_url_query.'/'.$template_url_query.'-'.$i.'.php' ?>
	</div>
<?php endfor ?>