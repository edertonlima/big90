<a href="<?php echo $url_base; ?>" class="button">Home</a>

<?php 
	$categories_menu = get_categories();

	foreach ($categories_menu as $key => $category_menu) { ?>
		<a href="<?php echo $url_base; ?><?php echo $category_menu->slug; ?>" class="button"><?php echo $category_menu->name; ?></a>
	<?php }
?>

