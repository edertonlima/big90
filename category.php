<h1><strong><?php echo $category->name; ?></strong></h1>




<table>
	<tr valign="top">
		<td width="200" valign="">
			<h3>Categorias</h3>

			<ul>
				<?php 
					$subcategories = get_subcategories($category->id,'null');
					if($subcategories){
						foreach ($subcategories as $key => $list_subcategory) { ?>

							<li><a href="<?php echo $url_base . $category->slug . '/' . $list_subcategory->url; ?>"><?php echo $list_subcategory->name; ?></a></li>

						<?php }
					}
				?>
			</ul>
		</td>
		<td width="20"></td>
		<td>
			
			<?php if($posts){ ?>
				<table width="" cellpadding="10" border="1">
					
					<?php 						
						foreach ($posts as $key => $post) { 
							$category_slug = get_category_slug($post->id_category); ?>
						 	
						 	<tr>
						 		<td><strong><?php echo $post->name; ?></strong></td>
						 		<td><?php echo $post->code; ?></td>
						 		<td>R$ <?php echo $post->price; ?></td>
						 		<td width="100"><a href="<?php echo $url_base . $category_slug->slug . '/' . $post->slug . '/p/' . $post->code; ?>" class="button">ver produto</a></td>
						 	</tr>

							<?php
						} 
					?>

				</table>
			<?php }else{ ?>

				<p>Nenhum produto encontrado.</p>

			<?php }	?>

		</td>
	</tr>
</table>
