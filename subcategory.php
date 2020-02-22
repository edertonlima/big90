
<a href="<?php echo $url_base; ?><?php echo $category->slug; ?>"><?php echo $category->name; ?></a>

<?php foreach ($url as $breadcrumbs) {
	if(($breadcrumbs != end($url)) AND ($breadcrumbs != $url[0])){
		$subcategory_breadcrumbs = get_subcategory($breadcrumbs); ?>

		> <a href="<?php echo $url_base . $category->slug . '/' . $subcategory_breadcrumbs->url; ?>"><?php echo $subcategory_breadcrumbs->name; ?></a>

	<?php }
} ?>

<h1>
	<?php echo $subcategory->name; ?>
	<?php if($posts){ ?>
		<span><?php echo count($posts); ?> resultados</span>
	<?php } ?>
</h1>


<?php
// filro
if($posts){

	foreach ($posts as $key => $post) { 

		$filtro['localizacao'][$post->localizacao_estado]++;

	}
}
//var_dump($filtro);
?>


<table>
	<tr valign="top">
		<td width="200" valign="">

			<?php $subcategories = get_subcategories($category->id,$subcategory->id);
			if($subcategories){ ?>
				<h3>Categorias</h3>

				<ul>
					<?php 
						foreach ($subcategories as $key => $list_subcategory) { ?>

							<li><a href="<?php echo $url_base . $category->slug . '/' . $list_subcategory->url; ?>"><?php echo $list_subcategory->name; ?></a></li>

						<?php }
					?>
				</ul>
			<?php } ?>

			<?php if($posts){ ?>
			<h3>Custo do frete</h3>
			<ul>
				<?php 
					//$subcategories = get_subcategories($category->id,'null');
					//if($subcategories){
						//foreach ($subcategories as $key => $list_subcategory) { ?>

							<li><a href="<?php echo $current_url . '?frete=gratis'; ?>">Grátis (<?php echo count($posts); ?>)</a></li>

						<?php //}
					//}
				?>
			</ul>
			<?php }?>

			<?php if($filtro['localizacao']){ ?>
			<h3>Localização</h3>
			<ul>
				<?php 
					
				foreach ($filtro['localizacao'] as $key => $value) { ?>

					<li><a href="<?php echo $current_url . '?frete=gratis&localizacao=' . $key; ?>"><?php echo $key . ' (' . $value . ')'; ?></a></li>

				<?php }	?>
			</ul>
			<?php } ?>

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