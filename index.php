<?php
	
	include 'config.php';
	include 'db/function_db.php';

	if ($_GET) {
		$url = explode('/', $_GET['url']);
		var_dump($url);
		//var_dump(count($url));

		if(count($url) == 1){

			// category
			$page = 'category';
			$category = get_category($url[0]);
			$posts = get_posts($category->id);
			//var_dump($category);
			var_dump($posts);

		}else{
			if(count($url) > 1){

				$code_post = explode('/p/', $_GET['url']);
				if(count($code_post) > 1){
					
					// single
					$page = 'single';				
					$category = get_category($url[0]);
					$posts = get_post($code_post[1]);
					var_dump($posts);

				}else{

					// subcategory
					$page = 'subcategory';
					$category = get_category($url[0]);
					//$parent_subcategory = $url[count($url) - 2];
					$subcategory = get_subcategory(end($url));
					$posts = get_posts_subcategory($subcategory->id);

				}
			}
		}
	}else{

		// home
		$page = 'front-page';

	}

	//var_dump($page);
	echo '<hr>';
?>

<style type="text/css">
	body {
		padding: 20px;
	}
	a {
		padding: 5px 10px;
		color: #000000;
		display: inline-block;
		text-decoration: none;
	}
	a:hover {
		color: #ff0000;
	}

	a.button {
		background-color: #f1f1f1;
	}

	a.button:hover {
		background-color: #ff0000;
		color: #ffffff;
	}

	h1 span {
		display: block;
		font-size: 14px;
		font-weight: normal;
	}
</style>

<?php
	include 'menu.php';
	echo '<hr>';
	include $page . '.php';

?>