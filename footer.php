</div>
<nav class="pt-5 mt-5 text-center d-print-none">
	<div><a class="text-reset text-decoration-none" href="version-log.php">v1</a></div>
	&copy; 2024, Beekeeper Design Studio 
</nav>
</body>
<?php 
# 
# Beekeeper Design Studio, 19 Jun 2024 - 10:00 AM
$get_current_url = pathinfo( $_SERVER['PHP_SELF'], PATHINFO_FILENAME);
# Show these scripts only in the 'customize' page
if ($get_current_url == 'customize'): ?>
	<script src="https://cdn.tiny.cloud/1/9yo2dai5v97xiee05jluqpaq3mlby3m4qic0wnca11qdd2yq/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
	<script src="assets/js/print-btn.js"></script>
	<script src="assets/js/tinymce-customize.js"></script>
	<script src="assets/js/get-the-div-height.js" async="async"></script>
	<!-- Beekeeper Design Studio, 19 Jun 2024, 2:20 PM -->
	<!-- turning off the online-check for now.  -->
	<!-- If we needed we will turn it on in future -->
	<!-- <script src="assets/js/online-check.js" async="async"></script> -->
<?php endif ?>
</html>