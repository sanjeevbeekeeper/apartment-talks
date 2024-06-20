<?php
# 
# Beekeeper Design Studio - 18 Jun 2024, 9:40 AM
# Get only the numbered files from a template-parts/layouts/files/ dir
$templates_glob = glob("template-parts/layouts/files/[0-9]*", GLOB_ONLYDIR);
# Beekeeper Design Studio - 18 Jun 2024, 9:40 AM
# Count the total folders inside the template-parts/layouts/files/ dir
$count_templates = count($templates_glob);
# 
# Beekeeper design studio - 11 Jun 2024, 10:29 AM
# using 'for' loop to get all the layouts inside a template-parts/layouts/files/ dir. 
for ($i=1; $i <= $count_templates ; $i++) : 
	# 
	# Beekeeper Design Studio - 18 Jun 2024, 10:26 AM
	# The glob() function is to check if there are any layout files inside the 'template/' dir
	$templates_dir_glob = glob("template-parts/layouts/files/".$i."/*", GLOB_BRACE);
	# Get the total file count inside the 'template/' dir
	$check_for_layout = count($templates_dir_glob);
	?>
	<div class="col-12 col-lg-6 col-xxl-4 mb-5">
		<div class="d-flex align-items-center mb-2">
			<h2 class="fs-5 mb-0 me-2">
				<div class="d-inline-block fw-bold me-2">Template <?php echo $i ?></div>
			</h2>
			<?php 
			# 
			# Beekeeper Design Studio, 18 Jun 2024, 10:18 AM
			# Check if the 'layout' files are present in the template-parts/layouts/files/ dir. 
			# If yes then show the button. If not then display a help message
			if ($check_for_layout > 0): ?>
				<a class="btn btn-warning px-4" href="layouts.php?s=<?php echo $size_url_query ?>&t=<?php echo $i ?>">View all layouts</a>
			<?php else: ?> 
				<div class="p-2 rounded text-body-tertiary bg-secondary bg-opacity-10 px-4">No layouts</div>
			<?php endif ?>
		</div>
		<?php
		# 
		# Beekeeper Design Studio, 18 Jun 2024, 10:20 AM
		# Check if the 'layout' files are present in the 'template/' dir
		# If yes then output the layout.
		if ($check_for_layout > 0): ?>
				<?php 
				# Use the $i to output the files.
				include 'template-parts/layouts/files/'.$i.'/'.$i.'-1.php' ?>
		<?php else: ?>
			<div class="bg-secondary bg-opacity-10 text-body-tertiary p-3" style="height:413px">
				Template <?php echo $i ?> is in WIP <br>Coming soon!</div>
		<?php endif ?>
		</div>
<?php endfor; ?>