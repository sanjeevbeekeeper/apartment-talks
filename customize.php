<?php
include 'header.php';
# 
# Beekeeper Design Studio, 13 Jun 2024
# Keep this config file here don't move it anywhere
# 'config.php' is used in the both 'output' and 'form' pages
include 'template-parts/customize/template-'.$template_url_query.'/config.php';
$logo_from_dir = "assets/logo/template-".$template_url_query."/layout-".$layout_url_query."/logo.png";
?>
<?php echo page_title($get_current_url) ?>
<?php include 'template-parts/customize/nav.php' ?>

<div class="row">
	<div class="col-12 col-lg-6 col-xxl-5 d-print-none">
		<h4 class="mb-2 fs-5">Input form</h4>
		<?php include 'template-parts/customize/template-'.$template_url_query.'/form.php' ?>
	</div>
	<div class="col-12 col-lg-6 col-xxl-7">
		<div class="d-flex flex-column flex-md-row flex-lg-column flex-xxl-row">
			<div class="me-0 me-md-3">
				<h4 class="mb-2 fs-5 d-print-none">Final output</h4>
				<?php 
				# 
				# Beekeeper Design Studio, 14 Jun 2024 - 4:48 AM
				include 'template-parts/customize/template-'.$template_url_query.'/output.php' ?>
			</div>
			<div class="mt-3 mt-md-0 mt-lg-3 mt-xxl-0 d-print-none">
				<?php
				# 
				# Beekeeper Design Studio, 14 Jun 2024 - 4:48 AM
				include 'template-parts/customize/template-'.$template_url_query.'/height-check.php' ?>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>