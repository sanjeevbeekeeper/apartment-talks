<?php 
include 'header.php';
# 
# Beekeeper Design Studio, 19 Jun 2024 - 3:06 PM
# See functions.php
echo page_title($get_current_url);
# 
# Beekeeper Design Studio, 19 Jun 2024 - 3:06 PM
# Getting the nav element in the template-parts/templates/nav
include 'template-parts/templates/nav.php' ?>

<div class="row mt-4">
	<div class="col-12">
		<div class="row">
			<?php include 'template-parts/templates/loop.php' ?>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>