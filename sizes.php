<?php
include 'header.php';
# 
# Beekeeper Design Studio, 19 Jun 2024 - 3:06 PM
# See functions.php
echo page_title($get_current_url);
# 
# Beekeeper Design Studio, 19 Jun 2024 - 3:06 PM
# Getting the nav element in the template-parts/sizes/nav
include 'template-parts/sizes/nav.php' ?>

<div class="row">
	<div class="col-12 col-sm-6 col-md-4 col-xl-3 col-2 fs-1">
		<?php
		# 
		# Beekeeper Design Studio, 19 Jun 2024, 3:04 PM
		# Using foreach loop to get all the 'sizes' from the array above.
		$size_array = array('5x5');
		foreach ($size_array as $key => $value): ?>
			<a href="templates.php?s=<?php echo $value ?>" class="btn btn-block btn-dark fs-1 w-100 lh-sm p-3 py-5" >
				<?php echo $value ?>
			</a>
		<?php endforeach ?>
	</div>
</div>

<?php include 'footer.php' ?>