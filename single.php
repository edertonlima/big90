

<?php if($posts){ 
	foreach ($posts as $key => $post) { ?>


		<h1><?php echo $post->name; ?></h1>				 	
		<h2>R$ <?php echo $post->price; ?></h2>	

		<p><?php echo $post->description; ?></p>




	<?php }
} ?>