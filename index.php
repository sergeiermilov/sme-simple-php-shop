<?php require_once('./layouts/header.php'); ?>

	<div class="line-between"></div>
	<!-- content block -->
	<div class="row">
		<!-- Left aside -->
			<?php require_once('./layouts/sidebar.php'); ?>
		<!-- // Left aside -->
		<!-- Center Part -->
		<div class="col-md-9 col-lg-10">
			<div class="row">
				<?php require_once('./layouts/product-item.php'); ?>	
			</div>
		</div>
		<!-- // Center Part -->
	</div>
	<!-- content block -->
<?php require_once('./layouts/footer.php'); ?>